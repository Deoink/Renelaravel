# Activity 4 - Authentication and Authorization

This version applies the Laravel From Scratch (2026 Edition) Authentication and Authorization lessons to the existing Product CRUD app.

## Features

- User registration and login
- Logout
- `auth` middleware protecting Product CRUD
- User has many Products
- Product belongs to User
- Users only see their own products
- Product Policy protects view/update/delete
- `view-admin` Gate protects `/admin`
- Admin navigation is shown with `@can`

## Demo accounts after seeding

- Admin: `admin@example.com` / `password`
- User: `test@example.com` / `password`

## Setup

1. Run `composer install`.
2. Make sure `.env` is configured.
3. For a clean database, run:

```bash
php artisan migrate:fresh --seed
```

4. Start the app with Laravel Herd or:

```bash
php artisan serve
```

5. Visit `/login` or `/register`.

If you already have the Activity 3 database, run:

```bash
php artisan migrate
```

Existing products created before Activity 4 may have no owner. For a clean demonstration, use `php artisan migrate:fresh --seed`.
