# Test Description

_____________________________________________________________________________________________
# About
This code challenge was made using the Laravel framework, MySQL database and Bootstrap. I utilised a MAMP installation. Refer to the last section for versions specifications.

The file affiliates.txt is at com.gambling.test/database/seeders and is used as an input for populating a MySQL database.

![alt text]()

#Run the code

See the following list of commands necessary to execute the code:

#### $ git clone https://github.com/anatrevis/com.gambling.test.git
#### $ cd gambling.test.git 
#### $ composer-update

After, create a database called "gambling" and set your .env file to connect with your database.
#### $ mysql -u root -p
#### mysql> CREATE DATABASE gambling;
#### mysql> exit;

Finally, do the database migrations and seeding, run the webserver.

#### $ php artisan migrate
#### $ php artisan db:seed
#### $ php artisan serve 

##Run the tests

After running your application, you can run the tests by the following command:
#### $ php artisan test

##Dependencies Versions

The specific versions from each dependency are:

#### mysql  Ver 14.14 Distrib 5.7.34, for osx10.12 (x86_64)
#### PHP 8.0.8 (cli)
#### Laravel Installer 4.2.10
#### Bootstrap v5.2 (through CDN so don't need to install)




