# Sales Report Application

## Overview

This project was developed as a technical assessment for the Support/Backend Engineering role at Cari AI. It implements a consolidated product sales report utilizing the Laravel framework. The application strictly adheres to the Model-View-Controller (MVC) architectural pattern and provides a clean, responsive user interface powered by Bootstrap 5.

## Architecture & Technology Stack

* **Core Framework:** Laravel 11.x
* **Language:** PHP 8.x
* **Database Engine:** SQLite (Configured as the default driver for streamlined local deployment and testing)
* **Frontend Design:** Bootstrap 5 (via CDN), Blade Templating Engine

## Interface Preview

![Application Interface](./public/images/screenshot.png)

## Local Deployment Guide

Follow these steps to deploy and test the application in a local environment:

### 1. Repository Setup
Clone the repository and navigate to the project root:
```bash
git clone https://github.com/YARE-CTRL/Prueba_Cari_PHP.git
cd Prueba_Cari_PHP
```

### 2. Dependency Management
Install the required PHP dependencies via Composer:
```bash
composer install
```

### 3. Environment Configuration
Duplicate the environment template to create your local `.env` file:
```bash
copy .env.example .env
```
Generate the application encryption key:
```bash
php artisan key:generate
```

### 4. Database Initialization
The application uses SQLite. Ensure the database file exists (Laravel automatically generates it during migration, or you can create it via `touch database/database.sqlite`). 

Run the migrations and seed the database with the required test data:
```bash
php artisan migrate --seed
```

### 5. Application Serving
Start the local development server:
```bash
php artisan serve
```
Access the application by navigating to `http://127.0.0.1:8000` in your web browser.
