<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel Blade CRUD Learning Project

This is a simple **Laravel + Blade CRUD app** built to learn how the **Laravel ecosystem** works.  
It includes routing, controllers, models, migrations, validation, pagination, Blade layouts/components, and database relationships.  

---

## 🚀 Features
- CRUD operations (Create, Read, Update, Delete)
- Form validation with error messages
- Flash messages on success/error
- Route Model Binding
- Pagination
- Foreign key relations in models & migrations
- Blade layouts, slots, components, props
- Dynamic routing
- Basic CSS applied

---

## ⚙️ Installation & Setup

Clone the repo and install dependencies:

```bash
git clone https://github.com/your-username/Allien-Network.git
cd Allien-Network
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve
