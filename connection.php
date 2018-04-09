<?php
/**
 * Created by PhpStorm.
 * User: Darius
 * Date: 4/3/2018
 * Time: 9:39 PM
 */
const DB_HOST = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_DATABASE_NAME = 'test';
const DB_PORT = 3306;

$connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME, DB_PORT);