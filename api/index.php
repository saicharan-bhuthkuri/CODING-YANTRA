<?php
// Forward Vercel requests to the appropriate file

$request_uri = $_SERVER['REQUEST_URI'];
$path = parse_url($request_uri, PHP_URL_PATH);

// Remove leading slash
$file = ltrim($path, '/');

// Default to index.php
if ($file === '' || $file === 'index.php') {
    $file = 'index.php';
}

// Security: Prevent directory traversal
if (strpos($file, '..') !== false) {
    http_response_code(403);
    echo "403 Forbidden";
    exit;
}

// Adjust path to point to parent directory (since we are in /api)
$target_file = __DIR__ . '/../' . $file;

if (file_exists($target_file) && is_file($target_file)) {
    // Determine mime type for static assets (though Vercel should handle assets via routes, this is a fallback)
    $ext = pathinfo($target_file, PATHINFO_EXTENSION);
    if ($ext === 'css') {
        header("Content-Type: text/css");
    } elseif ($ext === 'js') {
        header("Content-Type: application/javascript");
    } elseif (in_array($ext, ['png', 'jpg', 'jpeg', 'gif', 'ico'])) {
       // Let the browser handle images, or content-type generic
    }
    
    // Serve the file
    // For PHP files, include them. For others, readfile?
    // Actually, Vercel-php is designed to execute PHP.
    // If it's a PHP file, include it.
    
    if ($ext === 'php') {
        // We need to be careful about working directory.
        // Changing directory to root so includes work as expected
        chdir(__DIR__ . '/../');
        require $target_file;
    } else {
        // Serve static content if it fell through (though unexpected with vercel.json routes)
        readfile($target_file);
    }
} else {
    http_response_code(404);
    echo "404 Not Found: " . htmlspecialchars($file);
}
