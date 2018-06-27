<?php

namespace App;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function slider() {
        $images = get_field('galeria_inicio');
        if ($images) {
            return $images;
        }
    }
}
