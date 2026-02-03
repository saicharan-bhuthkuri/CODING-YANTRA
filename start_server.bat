@echo off
cd /d "%~dp0"
"php_runtime\php.exe" -S localhost:8000
pause