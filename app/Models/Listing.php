<?php

namespace App\Models;


class Listing {
    public static function all(){
        return[
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales enim sit amet auctor condimentum. In pharetra turpis ut libero tincidunt, nec ultrices elit aliquet.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two (test)',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales enim sit amet auctor condimentum. In pharetra turpis ut libero tincidunt, nec ultrices elit aliquet.'
            ]
            ];
    }
}
