<?php

class App
{
    public static $endpoint = "https://fakestoreapi.com/products";

    public static function main($type)
    {
        if ($type) {
            self::$endpoint = self::$endpoint . "/category/" . $type;
        }

        try {
            $array = self::getData();
            self::viewData($array);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public static function viewData($items)
    {
        $list = "<ul class='list-group'>";
        foreach ($items as $item) {
            if ($item['category'] == "electronics") {
            }
            else {
                $list .= "
                <li class='list-group-item'>
                <img height=200 width=145 src='$item[image]' alt='$item[title]'>
                <b> $item[title] </b><br> 
                <b> Price:</b> $$item[price] </b><br>
                <b> About:</b> $item[description] <br>
                <b> Gender:</b> $item[category] <br>
                </li>
                ";
            }
        }
        $list .= "</ul>";

        echo $list;

        echo "<hr>";
    }

    public static function getData()
    {
        $json = @file_get_contents(self::$endpoint);

        if (!$json) {
            throw new Exception("
                <div class='alert alert-danger' role='alert'>
                    Sorry, the information that you're looking for are missing!
                </div>
            ");
        }
        return json_decode($json, true);
    }
}