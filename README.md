# E-office

Generally speaking, under the hood this project was build with [Laravel](https://laravel.com) as a main framework.

## Requirement

1. Web server: `nginx`, `xampp`, `lampp` or even `mampp` or anything else
2. `php` at least 8.x version
3. Javascript run time like `Node js` for example (and have an package manager: `npm` or `yarn`)

## Run development mode

If you want to say 'its works on my machine', u should run several `command` to be able do that:

1. Clone this project `https://github.com/yuxxeun/e_office.git`
2. Make environment file by running `cp .env.example .env` command
3. Open double `bash` and run: `composer install` & `yarn install`
4. Take s2 program
5. `php artisan key:generate` for generating the `key`
6. And then run: `php artisan migrate:fresh --seed` for generating fixed & dummy data
7. Look at your browser on `localhost:8000`
8. In case you want to generate health monitoring result, you can run `php artisan health:check` and see the result on `localhost:8000/health?fresh`

## License

E-office is open-sourced software licensed under the [MIT license](./LICENSE).
