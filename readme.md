# Sample Porject

This is just a sample project with user authentication from front end and admin authentication from backend.

## How to install

- go into you project folder
- run "composer install" (download and install if composer not found)
- run "php artisan migrate"
- run "php artisan serve"
- open your browser and type localhost:8000
- you should see the sample project

- use query.sql file to insert data in admins table
- type localhost:8000/admin and you should see the admin login
- use (name = 'admin@test.com' and password = '123456') to login