# Laravel Symfony Stopwatch Log

A simple package that help you to report execution time to laravel log file.

## Installation
```bash
composer require erlangp/laravel-sf-stopwatch
```

## How to use
```php
sfsw()->x();
echo 'Processing';
sfsw()->x();
sleep(3); // simulate long running task
sfsw()->x();
echo 'Done';
sfsw()->x();
```

example output in `laravel.log`
```
stopwatch: ["J365NJNH",1,"default/watch_J365NJNH_1: 34.50 MiB - 0 ms"]
stopwatch: ["J365NJNH",2,"default/watch_J365NJNH_2: 34.50 MiB - 3005 ms"]
stopwatch: ["J365NJNH",3,"default/watch_J365NJNH_3: 34.50 MiB - 0 ms"]
```
