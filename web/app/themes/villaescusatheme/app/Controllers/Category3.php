<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Category3 extends Controller
{
    public static function size() {


        $field = get_field_object('size_thumbnail');
        $value = $field['value'];
        if($value){
            return $value;
        }

    }
    public function fotos() {
        global $post;
        $fotos = get_field('galeria', $post->ID);


        //array_push($data, $this_row);
        return $fotos;
    }
}
