# EUWORKER

Install the project:

1. Clone project
2. Install laravel packages - `composer install`
3. Install node packages - `npm install`
4. Copy file .ENV.EXAMPLE to file .ENV
5. Set key for project - `php artisan key:generate`
6. Generate JWT - `php artisan jwt:secret`
7. Create DB and write credentials for DB in .ENV file
8. Filling DB - `php artisan migrate:refresh --seed`
9. Generate ide helper file `php artisan ide-helper:generate` and `php artisan ide-helper:meta` for eloquent methods (PhpStrorm see filleble, methods)
10. Compile js and styles `npm run dev` 
