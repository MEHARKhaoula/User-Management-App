# Project Setup
````
composer install  
npm install   
cp .env.example .env

Create a file database.sqlite inside folder database 
Change those lines in your .env 
DB_CONNECTION=sqlite 
DB_DATABASE=path\to\your\project\database\database.sqlite

php artisan key:generate 
php artisan migrate 
php artisan db:seed --class=UsersTableSeeder
````
 ## Run Project
 ````
 npm run dev
 php artisan serve
 ````

# Website Preview
## Home
![Alt Text](./images/home.png)
## Create User
![Alt Text](./images/create-user.png)
## Edit User
![Alt Text](./images/edit-user.png)
## Delete User
![Alt Text](./images/delete-user.png)

