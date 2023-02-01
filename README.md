# Laravel Task Manager

A task manager with project support, built for Coalition Technologies as part of the interview process. It uses the TALL (Tailwind, Alpine, Laravel, Livewire) stack with a MySQL backend. The development environment uses Laravel Sail, through Docker.

## How To Run It

1. Clone or download the repository to your desired directory and cd into the project
2. Run `composer install` to install all required PHP dependencies
3. Run `npm install` to install Vite and the frontend dependencies
4. Create a MySQL database and make sure that the DB name and connection details for your local MySQL instance match the .env file
5. Generate your application key with `php artisan key:generate`
6. Migrate and seed the database using `php artisan migrate:fresh --seed`
7. Start the server with `php artisan serve`
8. Start Vite with `npm run dev`
9. Navigate to `127.0.0.1:8000` in your web browser to view the application
