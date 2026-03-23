# Importing Example Users

To import example users into your local database, use the following command in your terminal (replace `username` and `database_name` with your MySQL credentials):

```
mysql -u username -p database_name < database/users.sql
```

This will import the users from the provided SQL file into your database.

**Note:**
- Only use this file for test/demo data. Do not use real user data in public repositories.
- Make sure your database schema matches the structure of the exported users table.

The default MySQL username is usually root and the password is often blank (just press Enter when prompted).

You can access phpMyAdmin by clicking the "Admin" button next to MySQL in the XAMPP Control Panel. No extra setup is needed—just navigate to your database from there.
