@echo off
TITLE Blood Donation System Server
CLS

ECHO Version Verification:
ECHO ---------------------

REM Try global PHP
php -v >nul 2>&1
IF %ERRORLEVEL% EQ 0 (
    SET PHP_CMD=php
    GOTO :FOUND
)

REM Try XAMPP PHP
C:\xampp\php\php.exe -v >nul 2>&1
IF %ERRORLEVEL% EQ 0 (
    SET PHP_CMD=C:\xampp\php\php.exe
    GOTO :FOUND
)

ECHO [ERROR] PHP is not found in PATH or C:\xampp\php.
PAUSE
EXIT /B

:FOUND
ECHO PHP Found: %PHP_CMD%
ECHO Starting Server...
ECHO.
ECHO Server running at: http://localhost:8000
ECHO Press Ctrl+C to stop.
ECHO.

"%PHP_CMD%" -S localhost:8000 -t public
PAUSE
