# simple E-Articles publishing website using restful apis based on Laravel 8 framework
## Features
- Two resource models __Article__ and __Author__
- Restful apis (for CRUD operations)
- One-to-many relationship between authors and articles
- faker to seed table with random data maintaining the one-to-many constraint.

### Article Schema 
 id, title, category, description, author_id, views
### Author Schema
id, name

## How To Run
- clone project
- copy __.env.example__ to __.env__
- setup database properties as per your preference in __.env__ file
- run below commands 
``` 
composer install
composer require laravel/ui
php artisan ui vue --auth

npm install && npm run dev

# to migrate database
php artisan migrate

# start server
php artisan serve
```
## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.


## Example
Home
![alt text](https://github.com/rohit25s/article-laravel-php-rest/blob/master/images/home.png?raw=true)

Register
![alt text](https://github.com/rohit25s/article-laravel-php-rest/blob/master/images/register.png?raw=true)

List all articles
![alt text](https://github.com/rohit25s/article-laravel-php-rest/blob/master/images/list_articles.png?raw=true)

Create an Article
![alt text](https://github.com/rohit25s/article-laravel-php-rest/blob/master/images/post.png?raw=true)

Result
![alt text](https://github.com/rohit25s/article-laravel-php-rest/blob/master/images/posted.png?raw=true)

Create an Author
![alt text](https://github.com/rohit25s/article-laravel-php-rest/blob/master/images/author.PNG?raw=true)

