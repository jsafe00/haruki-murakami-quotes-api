### My favorite Haruki Murakami Quotes API Call

To execute:

In the root folder:

```
docker-compose build
```

```
docker-compose up -d
```

```
docker-compose exec quotes_api bash
```

```
cp .env.example .env
```

```
composer install
```

```
php artisan migrate
```

```
php artisan db:seed
```

```
php artisan serve --host 0.0.0.0 --port 8081
```

Accessing project in the browser:

```
127.0.0.1:8081/api/v1/quotes
```

Accessing database using PgAdmin:

```
Connection:
Host Name: 127.0.0.1
Port: 5434
Database:postgres
Username:postgres
Password:secret
```

Add laravel passport

```
composer require laravel/passport
php artisan passport:install

//if needed
php artisan refresh:migrate
php artisan db:seed
php artisan passport:keys
```
