<?php
/**
 * Created by PhpStorm.
 * User: Darius
 * Date: 4/3/2018
 * Time: 10:27 PM
 */
session_start();
echo 'Welcome '. $_SESSION['nume'] .'. Your message has been send';
