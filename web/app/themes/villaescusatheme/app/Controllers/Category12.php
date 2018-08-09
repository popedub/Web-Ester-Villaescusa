<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Category12 extends Controller
{
    public static function descripcion() {
        return get_field('descripcion');
    }

    public function fotos() {
        //init var
        $return = '';
        //get repeater field
        $fotos = get_field('fotos_seccion');
        if( is_array($fotos) ) {
        foreach ($fotos as $foto) {
            $return .= \App\template('partials.content-foto',[
                'foto' => wp_get_attachment_image( $foto['foto'], 'full', false, array('class' => 'img-fluid mx-auto d-block') ),
                'size' => $foto['size_foto'],
                ]);
            }
        }

        return $return;
    }
}
