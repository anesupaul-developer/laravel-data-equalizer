<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel Application

Simple demo laravel console application for pulling data from external api's into a mongo database using docker as a bonus.
Idea project I took it from [Upwork](https://www.upwork.com/jobs/span-class-highlight-Laravel-span-Python-pull-data-from-API-endpoints-ASAP~017f10c78bd727aa27)

For demo purpose, I query a jokes api, store information into the database and get the data via an api endpoint of ours.
On your terminal run 

1. docker exec -it ph php artisan random:joke # This command fetches a single random joke and stores into mongodb 
2. visit http://localhost:8088/api/joke using your browser or postman to see data retrieved from the above command
