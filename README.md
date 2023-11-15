# Project Setup

composer install  <br>
npm install   <br>
cp .env.example .env<br>
Create a file database.sqlite inside folder database <br>
Change those lines in your .env <br>
DB_CONNECTION=sqlite <br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=path\to\your\project\database\database.sqlite<br>
DB_USERNAME=root<br>
DB_PASSWORD=<br>

npm install <br>
php artisan key:generate <br>
 php artisan migrate  <br>
 php artisan db:seed --class=UsersTableSeeder<br>

 ## Run Project
 npm run dev<br>
 php artisan serve<br>


## Run Tests

php artisan test

# Website Preview
## Home
![Alt Text](./images/home.png)
## Create User
![Alt Text](./images/create-user.png)
## Edit User
![Alt Text](./images/edit-user.png)
## Delete User
![Alt Text](./images/delete-user.png)

## Test Result
![Alt Text](./images/Test.png)
