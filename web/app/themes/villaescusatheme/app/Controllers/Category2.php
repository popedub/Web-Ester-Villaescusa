<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Category2 extends Controller
{
    public function descripcion() {
        return get_field('descripcion');
    }
    public function fotos() {
        global $post;
        $fotos = get_field('fotos_seccion', $post->ID);
        $data = [];
        $this_row = (object)[];
        if( $fotos ):
        // loop through the rows of data
        foreach ($fotos as $foto){
            $this_row->foto = $foto['foto'];
            $this_row->size = $foto['size_foto'];
            array_push($data, $this_row);
        }
        endif;

        //array_push($data, $this_row);
        return $fotos;
    }
}
