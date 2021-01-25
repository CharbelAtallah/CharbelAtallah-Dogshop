<?php

class App
{
    public static $endpoint = "https://fakestoreapi.com/products";

    public static function main($category = "")
    {

        try {
            $array = self::getData($category);
            // print_r($array);
            self::viewData($array);
        } 
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function getData($category = "")
    {
        if (empty($category)) {
            $json=@file_get_contents(self::$endpoint);
        }

        $json = @file_get_contents(self::$endpoint.$category);
        // @ = Error Control Operator
        if (!$json) {
            throw new Exception("<p>Ett fel har inträffat</p>");
            return json_decode($json,true);
            
        }

        // Returnera data som en PHP-Array
        return json_decode($json, true);
    }

    public static function viewData($array){
        $output = "";
        foreach ($array as $key => $value) {}

        foreach ($array as $key => $value) {
           if ($value['category'] == "electronics") {
           }
           else {
               $output .= "<div><img class='thumbnail' src='".$value['image'].">
               <p class='title'>".$value['title']."</p>
               <p class='price'>".$value['price']."</p>
               <p class='description'>".$value['description']."</p>
               </div>";
           }
        }

        echo $output;
    }
}