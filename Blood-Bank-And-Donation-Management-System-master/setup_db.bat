@echo off
TITLE Import Database
CLS

ECHO Database Import Tool
ECHO --------------------

SET MYSQL_CMD=mysql

REM Check for MySQL in XAMPP if not in PATH
mysql --version >nul 2>&1
IF %ERRORLEVEL% NEQ 0 (
    IF EXIST "C:\xampp\mysql\bin\mysql.exe" (
        SET MYSQL_CMD="C:\xampp\mysql\bin\mysql.exe"
    ) ELSE (
        ECHO [ERROR] MySQL not found. Please make sure XAMPP is installed or MySQL is in PATH.
        PAUSE
        EXIT /B
    )
)

ECHO Found MySQL. Attempting to import database...
ECHO User: root
ECHO Pass: (empty)
ECHO File: sql\blood_bank_database.sql
ECHO.
ECHO NOTE: If this fails with "Access denied", you likely have a password set for root.
ECHO.

%MYSQL_CMD% -u root -e "CREATE DATABASE IF NOT EXISTS blood_donation;"
IF %ERRORLEVEL% NEQ 0 (
    ECHO [ERROR] Failed to create database.
    PAUSE
    EXIT /B
)

%MYSQL_CMD% -u root blood_donation < sql\blood_bank_database.sql
IF %ERRORLEVEL% NEQ 0 (
    ECHO [ERROR] Failed to import data.
    PAUSE
    EXIT /B
)

ECHO [SUCCESS] Database 'blood_donation' imported successfully!
PAUSE
