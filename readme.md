## Install Project

1. Create a database locally named homestead utf8_general_ci
2. Download composer https://getcomposer.org/download/
3. Pull Laravel/php project from git provider.
4. Rename .env.example file to .envinside your project root and fill the database information. (windows wont let you do it, so you have to open your console cd your project root directory and run mv .env.example .env )
5. Open the console and cd your project root directory
6. Run composer install or php composer.phar install
7. Run php artisan key:generate
8. Run php artisan migrate
9. Run php artisan db:seed


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
