<?php

namespace App\classes;

class ImageUpload {
    public $value;
    public $directory;
    public function __construct($data) {
        $this-> value = $data;
    }

    public function index() {
        echo '<pre>';
        print_r($this-> value);
        print_r($_FILES);
        echo '</pre>';
        $this-> imageName = $_FILES['image']['name'];
        echo $this-> imageName;
        $this-> directory = '../asstes/img/'.$this-> imageName;
        echo $this-> directory;
        move_uploaded_file($_FILES['image']['tmp_name'], $this-> directory);
        echo 'Done';
    }
}