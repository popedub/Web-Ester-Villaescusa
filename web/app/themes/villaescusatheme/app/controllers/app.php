<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }
    public function contact()
    {
        // $post = [];
        // $post   = get_post( 16, ARRAY_A  );
        // $content = $post['post_content'];
        return get_field('biografia', 16);
    }

    public function contact_en()
    {
        // $post = [];
        // $post   = get_post( 16, ARRAY_A  );
        // $content = $post['post_content'];
        return get_field('biografia', 191);
    }
    public function email()
    {
        return get_field('email', 16);
    }
    public function redes()
    {
        $links = [];
        $fb = get_field('facebook', 16);
        $inst = get_field('instragram', 16);
        array_push($links, $fb, $inst);
        return $links;
    }
}
