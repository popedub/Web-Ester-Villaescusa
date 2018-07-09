<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateInicio extends Controller
{
    public function links() {
        $link = [];
        $fotografia = get_category_link(2);
        $postproduccion = get_category_link(3);
        array_push($link, $fotografia, $postproduccion);
        return $link;
    }
    public function nombres() {
        $nombres = [];
        $foto = get_cat_name(2);
        $post = get_cat_name(3);
        array_push($nombres, $foto, $post);
        return $nombres;
    }
    public function foto_hover()
    {
        return get_field('imagen_fotografia');
    }
    public function post_hover()
    {
        return get_field('imagen_postproduccion');
    }
}
