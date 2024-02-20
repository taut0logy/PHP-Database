# CSE 3120 - Assignment on Lab 5

Assignment on using xampp and phpmyadmin to create a database and table, and then using php to connect to the database and insert , update, delete and select data from the table.

## Database and Table Creation

1. Create a database called `php_database` using phpmyadmin.
2. Create a table called `reg_info` with the following fields:
   - `id` (int, auto increment, primary key)
   - `name` (varchar, 100)
   - `email` (varchar, 255)
   - `password` (varchar, 100)
   - `joined` (timestamp, default current timestamp)
