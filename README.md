# Tasks for Today Management System (Laravel)

A Laravel rebuild of the TSA1 Tasks for Today Management System, using migrations, a seeder, and Eloquent models.

## Pages

| URL | Description |
|---|---|
| `/` | Welcome page, showing only today's tasks |
| `/tasks` | Task List, showing every task ordered by date |
| `/profile` | Profile page, showing the single user record |
| `/about` | About page, identifying the developer |

## Requirements

- PHP 8.2 or higher
- Composer
- Git

## Setup

1. Clone the repository:
   ```
   git clone https://github.com/aaart005-en/tasks-laravel.git
   cd tasks-laravel
   ```
2. Install dependencies:
   ```
   composer install
   ```
3. Create the environment file and generate the app key:
   ```
   copy .env.example .env
   php artisan key:generate
   ```
4. Create the SQLite database file, run the migrations and seed the sample data:
   ```
   php -r "file_exists('database/database.sqlite') || touch('database/database.sqlite');"
   php artisan migrate --seed
   ```
5. Start the development server:
   ```
   php artisan serve
   ```
6. Open http://127.0.0.1:8000 in your browser.

## Project structure

- `routes/web.php` – route definitions
- `app/Http/Controllers/` – `TaskController`, `PageController`
- `app/Models/` – `Task` (with a `today` query scope), `User`
- `resources/views/` – Blade views (`layouts`, `tasks`, `pages`)
- `database/migrations/` and `database/seeders/` – tasks and users migrations, and a seeder with sample data

## Live demo

(add your hosted link here)