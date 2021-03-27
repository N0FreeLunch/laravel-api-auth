## laravel
```
composer install
php artisan migrate
```

## make sql file
```
touch database/database.sqlite
```

## default authenticate scaffolding
```
composer require laravel/ui
```

```
// Generate basic scaffolding...
php artisan ui bootstrap
php artisan ui vue
php artisan ui react

// Generate login / registration scaffolding...
php artisan ui bootstrap --auth
php artisan ui vue --auth
php artisan ui react --auth
```

## use react scaffolding
```
php artisan ui react --auth
```
> [auth/login.blade.php]
> [auth/passwords/confirm.blade.php]
> [auth/passwords/email.blade.php]
> [auth/passwords/reset.blade.php]
> [auth/register.blade.php]
> [auth/verify.blade.php]
> [home.blade.php]
> [layouts/app.blade.php]
> [HomeController.php]

```
npm install
```


```
node -v
```
> v15.11.0
