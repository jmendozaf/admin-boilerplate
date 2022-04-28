# Laravel Craftable Admin boilerplate by Javi Mendoza
This is a boilerplate to build a Laravel Admin with craftable
## Steps to install
- **sudo npm install degit -g**
- **degit jmendozaf/admin-boilerplate [new project]**
- **$ composer install**
- **$ npm install**
- **$ cp .env.example .env**
- **$ php artisan key:generate**
- **Edit .env file**
- **Replace de db paramters.**
  - **DB_CONNECTION=pgsql**
  - **DB_HOST=127.0.0.1**
  - **DB_PORT=5432**
  - **DB_DATABASE=[db_name]**
  - **DB_USERNAME=[user]**
  - **DB_PASSWORD=[password]**
  - **$ php artisan migrate**
- **$ npm run production**
- **Edit config/eloquent_model_generator.php**
- **Replace[project_path] with correct path for 'output_path' => '[project_path]/app/Models' line**

