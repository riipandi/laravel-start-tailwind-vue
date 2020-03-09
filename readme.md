# Laravel Start Tailwind Vue

Starter project Laravel with TailwindCSS and Vue.js preset.

## Quick Start

### Create Project

```
composer create-project --prefer-dist riipandi/laravel-start-tailwind-vue myapp
```

### Install
Edit or create `.env` file and then execute:

```sh
# Composer dependencies
composer install
php artisan key:generate
php artisan migrate:fresh --seed

# Compiling resources
npm install --no-optional --no-audit
npm run development
```

> For detailed explanation on how things work, check out [Laravel docs](https://laravel.com/docs).

## License

This project licensed under the terms of [MIT License][choosealicense].
Please see [license file](./license.txt) for more information.

[choosealicense]:https://choosealicense.com/licenses/mit/
