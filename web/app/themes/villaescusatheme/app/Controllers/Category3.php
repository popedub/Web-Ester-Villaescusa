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

    public static function align() {

        $field = get_field_object('align_foto');
        $value = $field['value'];
        if($value){
            return $value;
        }
    }
}
