<?php

namespace App\Service;

class Json
{
        public function jsonarray(string $path): string
        {
        $text='';
        $data=file_get_contents($path);
        $data=json_decode($data, true);
        foreach ($data as $key => $row) {
            $title[$key]  = $row['title'];
            $price[$key] = $row['price'];
            $inventory[$key] = $row['inventory'];
        }
        $title=array_column($data, 'title');
        $price=array_column($data, 'price');
        $inventory=array_column($data, 'inventory');
        array_multisort($price, SORT_ASC, $title, SORT_ASC, $data);
        foreach ($data as $row) {
           $text.=" Title: ".$row['title']."\n Price: ".$row['price']."\n Inventory: ".$row['inventory']."\n\n";
        }
        $json=json_encode($data);
        return $json;
        }
}