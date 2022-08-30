<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Laravel Competency Test

- Create a Resource called User with following **attributes** **id, name, email, created_at, updated_at, deleted_at**
- Create a Resource called Department with following **attributes** **id, name, created_at, updated_at, deleted_at**
- Create a Pivot resource UserDepartment with 1 to many relationship
- Create an event on create event of User and upon user creation store 2 records in Pivot table with user id and random id from department table, Pivot table should also use timestamps.
- All resources should have migrations, factory and seeders

- Create 2 APIs
  - 1 for creating a user resource
  - 2 for listing all user resources
