# Laravel Symfony Stopwatch Log

A simple package that help you to report execution time to laravel log file.

## Installation
```bash
composer require erlangp/laravel-sf-stopwatch
```

## How to use
```php
sf_stopwatch()->x();

echo 'Processing';

sf_stopwatch()->x();

sleep(5); // example simulate long running task

sf_stopwatch()->x();

echo 'Done';

sf_stopwatch()->x();
```

example output in `laravel.log`
```
[2021-10-18 11:30:18] local.DEBUG: stopwatch: ["default/watch_9KAH2MJ6_1: 22.00 MiB - 37 ms"] 
[2021-10-18 11:30:23] local.DEBUG: stopwatch: ["default/watch_9KAH2MJ6_2: 22.00 MiB - 5031 ms"] 
[2021-10-18 11:30:24] local.DEBUG: stopwatch: ["default/watch_9KAH2MJ6_3: 22.00 MiB - 25 ms"] 
```
