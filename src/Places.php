<?php
    class Place
    {
        private $city;
        private $image;

        function __construct($city, $image)
        {
            $this->city = $city;
            $this->image = $image;
        }

        function setImage($new_image)
        {
            $this->image = (string) $new_image;
        }

        function getImage()
        {
            return $this->image;
        }

        function setCity($new_city)
        {
            $this->city = (string) $new_city;
        }

        function getCity()
        {
            return $this->city;
        }

        function save()
        {
            array_push($_SESSION['list_of_cities'], $this);
        }

        static function getAll()
        {
            return $_SESSION['list_of_cities'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_cities'] = array();
        }
    }

 ?>
