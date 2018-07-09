<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function slider() {
        $images = get_field('galeria_inicio');
        if ($images) {
            return $images;
        }
    }
    public function link_home() {
        return get_permalink(14);
    }
}
