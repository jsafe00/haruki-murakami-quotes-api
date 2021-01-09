### My favorite Haruki Murakami Quotes in API Call

To execute:

In the root folder:

```
docker-compose up -d
```
```
docker-compose exec -it {container_name_api} bash
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
