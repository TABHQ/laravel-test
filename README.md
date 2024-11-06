# TAB recruitment test

You have 1 hour to progress through the tasks below. Do not stress if you can't get all done, just work through it one by one and try your best.

You will be provided connection details to a database on the day which you will use to insert and read from with some test data provided and the data you insert.

## Tasks

You have been provided with a basic Laravel project with three accessible routes.
1. `/` - Home page
2. `/users` - List of users
3. `/users/{id}` - User detail page

### `/` - Home page

The home page contains 3 figures on the screen.
1. Total number of users
2. Total number of transactions
3. Current value of the bank

The figures are currently hardcoded and need to be replaced with real data from the database.

### `/users` - List of users
The users page lists all users in the database. The base table has been setup for you, however the 'Bank value' column is currently hardcoded and needs to be replaced with the real value.

### `/users/{id}` - User detail page
The user detail page shows the user's details and a list of their transactions. The transactions are currently hardcoded and need to be replaced with real data from the database.
There is a form on the user detail page to perform a transaction on the user. The form is currently not functional and needs to be implemented.

### Bonus points

If you have time left over we encourage you to show your creative side, animations? Convert the form to be submitted via AJAX? Loading spinners? Have fun with it!

Good luck!

## Key considerations
You will notice that the transactions table does not have a primary key, i.e. 'id'. This is intentional and you should consider how you will handle this when interacting with the transactions table.
We encourage you to perform one task at a time, starting with the home page and working your way through the tasks. Having a fully functional task is better than have little bits of all the tasks.
Don't hesitate to ask questions or get help if you're unable to get connected to the database, we want to help to make sure you have all you need to give it your best shot!

## Setup
1. Clone the repository
2. Run `composer install`
3. Copy the `.env.example` file to `.env`
4. Run `php artisan key:generate`
5. Enter the database connection details in the `.env` file
6. Run `php artisan serve`
7. Navigate to the domain given in the terminal (typically http://localhost:8000 or http://127.0.0.1:8000)
