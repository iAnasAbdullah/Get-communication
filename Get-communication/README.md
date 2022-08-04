
# SERVO COMMUNICATION AND DATABASE

## INTRODUCTION

this website is a contiuous progression to the previous <a href="https://github.com/iAnasAbdullah/voice-command-arduino">VOICE-COMMAND-ARDUINO</a> website that i made previously, now the website have an online database attached to it from a website called heroku. 

## how it works

i've combined two buttons at once which were [Choose a COM Port] and [Speak] into one button which is now [Speak] that lets you choose your COM port first then allows you to speak.
same rules applies here, there are three key words that the program will have which are:
1. يمين
2. يسار
3. منتصف

once you say one of the following words, it will appear in your screen where you can save the result into a database by clicking on [MOVE] and if the current word matches one of the above key words, it will be written to the database.
NOTE: you can use sentences rather than just words

## how to set up
1. you need to download xampp which is a server provider for launching php files.
2. install the whole (Get-communication) file.
3. path to xampp where you saved it and look for 

```sql

/*Create Table*/
CREATE TABLE IF NOT EXISTS servo_values (
    id SERIAL PRIMARY KEY,
    servo_value int NOT NULL,
    date_added TIME with time zone NOT NULL
);
```