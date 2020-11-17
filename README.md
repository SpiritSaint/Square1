## Square1

### Instructions

1. Clone this repository using ssh or https:
    - `git clone git@github.com:SpiritSaint/Square1.git`
    - `git clone https://github.com/SpiritSaint/Square1.git`
2. Move into code folder and install composer dependencies:
    - `cd Square1`
    - `composer install`
3. Copy the example environment file and execute key generate:
    - `cp .env.example .env`
    - `php artisan key:generate`
4. Update `.env` with your own database settings and run migrations
    - `nano .env` and change settings:
        - `DB_DATABASE` using the database name.
        - `DB_USERNAME` using the mysql user.
        - `DB_PASSWORD` using the user password. 
    - Finally, run `php artisan migrate` and `php artisan db:seed` to create `admin` user:
5. Run schedule worker and serve:
   - `php artisan serve` and `php artisan schedule:work`.
6. Wait for `ExtractFeed` job.

#### Default user with privileges

- `username:` admin
- `password:` password

#### Some note for debug

If you want reduce the wait time of `ExtractFeed` job, uncomment the code of `app/Console/Kernel.php`.

From:

```php
    protected function schedule(Schedule $schedule)
    {
         $schedule->job(ExtractFeed::class)->hourly();
//         $schedule->job(ExtractFeed::class)->everyMinute();
    }
```

To:

```php
    protected function schedule(Schedule $schedule)
    {
//         $schedule->job(ExtractFeed::class)->hourly();
         $schedule->job(ExtractFeed::class)->everyMinute();
    }
```

### Badges

#### Workflows

![PHP](https://github.com/spiritsaint/square1/workflows/PHP/badge.svg)
![JavaScript](https://github.com/spiritsaint/square1/workflows/JavaScript/badge.svg)

#### Code Climate

[![Maintainability](https://api.codeclimate.com/v1/badges/162c3f77a4a4707529c6/maintainability)](https://codeclimate.com/github/SpiritSaint/Square1/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/162c3f77a4a4707529c6/test_coverage)](https://codeclimate.com/github/SpiritSaint/Square1/test_coverage)

#### CodeCov

[![codecov](https://codecov.io/gh/SpiritSaint/Square1/branch/master/graph/badge.svg)](https://codecov.io/gh/SpiritSaint/Square1)


### Contact details

Send me a email iantorres@outlook.com
