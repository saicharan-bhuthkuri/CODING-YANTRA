$url = "https://windows.php.net/downloads/releases/php-8.3.29-nts-Win32-vs16-x64.zip"
$zipFile = "php.zip"
$destDir = "php_runtime"

Write-Host "Downloading PHP from $url..."
Invoke-WebRequest -Uri $url -OutFile $zipFile

Write-Host "Extracting..."
Expand-Archive -Path $zipFile -DestinationPath $destDir -Force

Write-Host "Cleaning up..."
Remove-Item $zipFile

Write-Host "Creating start_server.bat..."
$batContent = "@echo off`r`ncd /d ""%~dp0""`r`n""$destDir\php.exe"" -S localhost:8000`r`npause"
[System.IO.File]::WriteAllText("start_server.bat", $batContent)

Write-Host "Done! You can now run start_server.bat to start the website."
