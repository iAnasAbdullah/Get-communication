
# SERVO COMMUNICATION AND DATABASE

## INTRODUCTION

this website is a contiuous progression to the previous <a href="http://www.google.com">SERVO COMMUNICATION</a> website that i made previously, now the website have an online database attached to it from a website called heroku,  

## Setting up the database

You will need to install PostgreSQL and connect to the databse server using either the command line client `psql -U username -W' or a GUI client like pgAdmin. 
First, we will create a file called `database.ini` that contains the database connection parameters and access credentials. Example:

```plaintext
host=localhost
port=5432
database=apps.tasks
user=todoappusr
password=YOUR_PASSWORD
```

```sql

/*Create Table*/
CREATE TABLE IF NOT EXISTS servo_values (
    id SERIAL PRIMARY KEY,
    servo_value int NOT NULL,
    date_added TIME with time zone NOT NULL
);
```