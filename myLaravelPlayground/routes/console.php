<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('hello', function () {
    $this->info('Hello, World!');
})->purpose('Display a greeting');

Artisan::command('progress:demo', function () {
    $bar = $this->output->createProgressBar(100);
    $bar->start();
    for ($i = 0; $i < 100; $i++) {
        usleep(50000);
        $bar->advance();
    }
    $bar->finish();
    $this->newLine();
    $this->info('Task completed!');
})->purpose('Demonstrate progress bar');