# BerBikeLah 2020 App
Cycling event registration & qrcode checkpoint system using Laravel. 

### How to use
  1. Clone this repository.
  2. run `composer install` command.
  3. Duplicate file **.env.example** to **.env**.
  4. Set your enviroment setting (App env, **Database**, SMTP, etc) in **.env** file.
  5. run `php artisan key:generate` command to create app key in .env file.
  6. run `php artisan migrate -seed` command to run database migration with seeder.
  7. run `php artisan serve` to run the app in your local web server.
  8. Enjoy the app :).

