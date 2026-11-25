# Sustainable for Cambodia

Laravel 12 and Blade conversion of the seven-page public website.

## Local setup

Requires PHP 8.2 or later and Composer. The site needs no database or Node build.

1. Run composer install.
2. Copy .env.example to .env.
3. Run php artisan key:generate.
4. Run php artisan serve and open the URL printed in the console.

## Hosting

Point the document root at the public directory inside the Laravel project. Run composer install --no-dev --optimize-autoloader, configure APP_URL, generate an application key on first setup and set APP_DEBUG=false. The PHP process needs write access to storage and bootstrap/cache.

The old .html addresses redirect to the corresponding Laravel routes. Contact opens a prefilled email draft. Donation and newsletter forms are demos and require service integration before accepting payments or subscriptions.
