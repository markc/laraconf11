<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo"></a></p>

## About Laraconf 11

This repository is a fork of [iAmKevinMcKee/laraconf](https://github.com/iAmKevinMcKee/laraconf), updated to Laravel 11 as a learning exercise. It's based on the Laracasts tutorial [Rapid Laravel Apps With Filament](https://laracasts.com/series/rapid-laravel-development-with-filament/). After encountering issues with the course using Laravel 11, I decided to fork the completed Laravel 10 project repo and upgrade it to Laravel 11. With assistance from AI tools, I've managed to get most features working and will continue to update the project as I progress through the tutorial.

## Usage

This section will be updated with tested instructions using Bash. The idea is to be able to
copy and paste the below into a Bash shell and immediately login to a working project.

```
# optional convenience aliases
alias pa='php artisan'
alias sd='sqlite3 database/database.sqlite'

[ ! -d ~/Dev ] && mkdir ~/Dev
cd ~/Dev
git clone https://github.com/markc/laraconf11.git
cd laraconf11
cp .env.example .env # update DB_* entries, defaults to sqlite
touch database/database.sqlite
composer install
npm install
pa key:generate
pa storage:link
pa migrate
pa migrate:fresh --seed
npm run build # or 'dev' in another shell
echo -e "\nLogin as me@example.com using 'password'\n"
pa serve
```

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
