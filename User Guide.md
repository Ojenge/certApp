User Guide
- Clone the project into your local server from Github
- Run the following command in terminal/ command line interpreter to install the required dependencies:
‘’’
composer install
‘’’
If you do not have compose installed in your system you can go [here](https://getcomposer.org) and follow the guide on how to install composer depending on your system specifications
- Once the install process is done, create a .env file in the root of the project folder. You can copy the .env.example file. Change the following to match your local server settings:
‘’’
DB_CONNECTION=mysql
DB_HOST={{your database host}}
DB_PORT={{your database port}}
DB_DATABASE={{name of the database}}
DB_USERNAME={{your database user}}
DB_PASSWORD={{your database password}}
‘’’

- After setting up the file above. GO back to your terminal/command line interpreter and run the following commands:
‘’’
php artisan migrate —seed
‘’’
this will migrate the database tables and seed all the necessary  tables with data.

- Open your browser and load the project to get started.
- Click on register on the top right menu and register a use in order to access the main system.
- Once registered click on Login and enter your credentials in order to login.
- By default the first page after login displays the statistics on the number of certificates issued on the tool. In order to generate a certificate click on Get Certificate on the left hand menu. Enter your details then click on Generate Certificate. A new tab will open up in your browser with a pdf version of your certificate.

