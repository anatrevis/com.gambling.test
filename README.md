# About
This code challenge was made using the Laravel framework, MySQL database and Bootstrap. I utilised a MAMP installation. Refer to the last section for versions specifications.

The file affiliates.txt is at com.gambling.test/database/seeders and is used as an input for populating a MySQL database.

# Run the code

See the following list of commands necessary to execute the code:

#### $ git clone https://github.com/anatrevis/com.gambling.test.git
#### $ cd gambling.test.git 
#### $ composer-update

After, create a database called "gambling" and set your .env file to connect with your database. 
You can create a .env file by creating a copy from .envAna and only change the name of the file to ".env" and changing DB_HOST,
DB_PORT, DB_USERNAME and DB_PASSWORD for your parameters.
#### $ mysql -u root -p
#### mysql> CREATE DATABASE gambling;
#### mysql> exit;

Finally, do the database migrations and seeding, run the webserver.

#### $ php artisan migrate
#### $ php artisan db:seed
#### $ php artisan serve 

Then you can click in the url, and you will be able to visualize the interface.

## Interface

This is the first screen you see. It has a select where you can choose which office is inviting the affiliates. You are able to add multiple offices to the system.
![alt text](https://github.com/anatrevis/com.gambling.test/blob/master/systemImages/screen1.png?raw=true)
I utilised an input validation on the form so if you try to invite affiliates without selecting an office, a warning will pop up.
![alt text](https://github.com/anatrevis/com.gambling.test/blob/master/systemImages/screen2.png?raw=true)
I created Dublin Office and a Fake Office with a different address (in Dundalk, around 80km far from Dublin Office) for demonstration purposes. They will throw different results.
![alt text](https://github.com/anatrevis/com.gambling.test/blob/master/systemImages/screen3.png?raw=true)
After selecting the Dublin Office, this should be the output:
![alt text](https://github.com/anatrevis/com.gambling.test/blob/master/systemImages/screen4.png?raw=true)


## Run the tests

After running your application, you can run the tests by the following command:
#### $ php artisan test

## Final Considerations

This program could be easily expandable with different features. I could add a field for selecting a specific distance range, for example. Or I could have set an email sender which would send an invitation email for each affiliate, and so on. The program also could use more testing. In this version, I tested the Distance Formula and did some Application tests for demonstration purposes.

## Dependencies Versions
The specific versions from each dependency are:

#### mysql  Ver 14.14 Distrib 5.7.34, for osx10.12 (x86_64)
#### PHP 8.0.8 (cli)
#### Laravel Installer 4.2.10
#### Bootstrap v5.2 (through CDN so don't need to install)




