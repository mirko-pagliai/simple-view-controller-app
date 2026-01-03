# simple-view-controller Application skeleton

A skeleton for creating applications with `simple-view-controller`.

The framework source code can be found here: [mirko-pagliai/simple-view-controller](https://github.com/mirko-pagliai/simple-view-controller).

## Installation

### 1. Create the project

Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`, then run:
```bash
composer create-project --prefer-dist mirko-pagliai/simple-view-controller-app [your-app-name]
```

### 2. Start the development server

```bash
php -S localhost:8000 -t public
```

Then open your browser at:

```
http://localhost:8000
```

### 3. Environment configuration (optional)

If you want to enable debug mode:

```bash
cp config/.env.example config/.env
```

Edit the newly created `.env` file and set the `DEBUG` variable:

```env
DEBUG=true
```

> Note: the `.env` file is optional and must not be committed to version control.


## Project structure (essential)

- `public/index.php` → application entry point
- `config/bootstrap.php` → environment bootstrap
- `config/routes.php` → route definitions
- `src/Controller/` → application controllers
- `templates/` → PHP templates

## Debug

The `DEBUG` environment variable is always loaded as a string and **must be explicitly parsed** by the application code, for example:

```php
$debug = filter_var(
    getenv('DEBUG') ?? 'false',
    FILTER_VALIDATE_BOOLEAN
);
```
