<?php

class App
{
    public static $endpoint = "http://localhost/dogshop/api1.json";

    public static function main($type)
    {

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
            $random = rand(0,1);
            $nmbr = rand(1,50);
            $slump = rand(0,1);
            $nmb = rand(1,50-$nmbr);
                $list .= "
                <li class='list-group-item'>
                <img height=200px width=185px src='$item[image]' alt='$item[name]'><br>
                <b> $item[name]</b> </b> <br> 
                <b> Pris:</b> $item[price] Kr</b><br>
                <b> Produkt beskrivning:</b> $item[description] <br>
                <b> Antal i lager 2kg:</b> $nmbr <br>
                <b> Antal i lager 12kg:</b> $nmb <br>
                </li>
                ";
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