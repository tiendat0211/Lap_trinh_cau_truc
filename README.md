Report here:
Link to group drive: driveSP_18

Week 1-3 report --> SP_18_W3

Week 4 (cards) --> SP_18_W4

Install instruction:
-Step 1: Run the following command to create application.

  + Create a new app:
	composer create-project laravel/laravel example-app
  + Install breeze (A laravel authentication template)
	composer require laravel/breeze --dev 
	php artisan breeze:install 
  + Install and compile npm
	npm install 
	npm run dev
-Step 2: Create database with xampp.

  +Create database in xampp with name demo_ltct
  +In file .env, rename database DB_DATABASE=demo_ltct
  +Migrate database
	php artisan migrate 
  +Start local server
	php artisan serve 
