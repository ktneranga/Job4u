<?php

namespace App\Models;

class Listing{
    public static function all(){
        return [
            [
                'id' => 1,
                'title' => 'Post one',
                'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, temporibus iste nisi reiciendis magnam odio iusto illum ab cumque, ipsam asperiores natus corporis, cupiditate dolor dolorem in deleniti ratione repudiandae.'
            ],
            [
                'id' => 2,
                'title' => 'Post two',
                'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, temporibus iste nisi reiciendis magnam odio iusto illum ab cumque, ipsam asperiores natus corporis, cupiditate dolor dolorem in deleniti ratione repudiandae.'
            ],
            [
                'id' => 3,
                'title' => 'Post three',
                'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, temporibus iste nisi reiciendis magnam odio iusto illum ab cumque, ipsam asperiores natus corporis, cupiditate dolor dolorem in deleniti ratione repudiandae.'
            ]
        ];
    }

    public static function find($id){
        $listings = self::all();
        foreach ($listings as $listing) {
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }

}
