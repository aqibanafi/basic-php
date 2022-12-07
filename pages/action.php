<?php

require_once '../vendor/autoload.php';

use App\classes\PasswordGenerator;
use App\classes\ImageUpload;

if(isset($_POST['given_length'])) {
    $passWordGenerator = new PasswordGenerator($_POST);
    $result = $passWordGenerator-> index();
    include 'home.php';
}
    $imageupload = new ImageUpload($_POST);
    $imageupload -> index();

