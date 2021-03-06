## About Laravel Test

This is the test Project


## Installation

- clone the repo on the local system.
- copy the content of the .env.example to make .env file. It can be done by executing the command "cp .env.example .env"
  . and make the changes in the .env file according to your environment.

### Install the dependencies and devDependencies.

- cd Laraveltest (or the folder you specify while cloning the repo)
- Run the "composer install" command.
- also run the "composer dump-autoload" command to autoload the classes.

## Database and Seeding

To Database and seeding the data.

- Run the "php artisan migrate" to make the tables. Don't forget to make the database first and mention it in the .env
  file.
- run the "php artisan db:seed" to seed the database.
- No auth required

## Start the server

- Run the following to start the backend section.

```zsh
cd {folder}
php artisan serve
```

- In case if you get the error 'No Application Encryption Key Has Been Specified' while running the "php artisan serve"
  command then run the "php artisan key:generate" command and again run the serve command.

Verify the deployment by navigating to your server address in your preferred browser.

> http://127.0.0.1:8000

## Production

```sh
    php artisan optimize:clear
    composer install --optimize-autoloader --no-dev
    php artisan config:cache
    php artisan view:cache
```

##API END POINTS
```sh
--Listing the Users
/api/users

- Listing the websites
/api/websites

-- Creating Subscribers

/api/websites/{website}/subscribe/{user}

-- Creating Posts

/api/websites/{website}/post
```
## POSTMAN LINK FOR APIs
https://www.getpostman.com/collections/e7b56b49132bee375926

**Free Software!**
