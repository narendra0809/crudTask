# E-Commerce Product Management System

This is a Laravel-based E-Commerce Product Management System that allows admin users to manage products through an intuitive interface.

## Table of Contents

- [Admin Credentials](#admin-credentials)
- [Database Setup](#database-setup)
- [Project Flow](#project-flow)
- [Installation](#installation)
- [Usage](#usage)

## Admin Credentials

- **Username:** np4375@gmail.com
- **Password:** Narendra@321

## Database Setup

1. **Create a Database**: 
   - Create a new database in your MySQL server (e.g., `crud_task`).

2. **Configure `.env` File**: 
   - Copy `.env.example` to `.env` and update the database credentials:
     ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=crud_task
     DB_USERNAME=root
     DB_PASSWORD=
     ```

3. **Run Migrations**:
   - Run the following command to create the necessary tables:
     ```bash
     php artisan migrate
     ```

4. **Seed the Database** (optional):
   - If you have seeders, run:
     ```bash
     php artisan db:seed
     ```

## Project Flow

1. **Admin Login Functionality**:
   - Admin can log in using their credentials.
   
2. **Product Creation**:
   - After login, admins can create new products with fields for name, amount, description, and an image upload feature.

3. **Product Listing**:
   - Admins can view all available products on a dedicated listing page.

4. **Edit Product**:
   - Admins can modify the details of any existing product.

5. **View Product**:
   - Users can view detailed information about specific products.

## Installation

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/narendra0809/product_base_task
