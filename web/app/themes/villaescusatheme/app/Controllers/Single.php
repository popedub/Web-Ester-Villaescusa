<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Single extends Controller
{
    public function galeria() {
        $data = [];
        $images = get_field('galeria');
        foreach ($images as $image) {
         $this_foto = (object) array(
             'foto' => wp_get_attachment_image( $image['ID'], 'full', false, array('class' => 'img-fluid mx-auto d-block') ),
             'caption' => $image ['caption'],
         );
           array_push($data, $this_foto);
        }
        return $data;

    }

    public function info() {
        return get_field('info');
    }

    public function fx() {
        $field = get_field_object('fx_type');
        $value = $field['value'];
        if($value){
            return $value;
        }
    }
}
