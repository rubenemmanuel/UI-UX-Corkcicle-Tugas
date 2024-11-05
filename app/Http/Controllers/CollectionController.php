<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index(){

        $items = [
            [
                'name' => 'Cold Cup XL',
                'image' => "images/tumbler01.webp",
                'price' => 'Rp 830.000,00'
            ],
            [
                'name' => 'Disney Cold Cup',
                'image' => "images/tumbler02.webp",
                'price' => 'Rp 1.153.000,00'
            ],
            [
                'name' => 'Star Wars™ Tumbler',
                'image' => "images/tumbler03.webp",
                'price' => 'RRp 807.000,00'
            ],
            [
                'name' => 'Star Wars™ Canteen',
                'image' => "images/tumbler04.webp",
                'price' => 'Rp 565.000,00'
            ],
            [
                'name' => 'Star Wars™ Stemless',
                'image' => "images/tumbler05.webp",
                'price' => 'Rp 807.000,00'
            ],
            [
                'name' => 'Disney100 Heritage Sketch Tumbler',
                'image' => "images/tumbler06.webp",
                'price' => 'Rp 323.000,00'
            ],
            [
                'name' => 'KFC x Corkcicle Cruiser',
                'image' => "images/tumbler07.png",
                'price' => 'Rp 1.151.000,00'
            ],
            [
                'name' => 'KFC x Corkcicle Sport Canteen',
                'image' => "images/tumbler08.png",
                'price' => 'Rp 1.036.000,00'
            ],
            [
                'name' => 'DISNEY CRUISER',
                'image' => "images/tumbler09.png",
                'price' => 'Rp 978.350,00'
            ],
            [
                'name' => 'COLD CUP XL',
                'image' => "images/tumbler10.png",
                'price' => 'Rp 978.350,00'
            ],
            [
                'name' => 'COMMUTER CUP',
                'image' => "images/tumbler11.png",
                'price' => 'Rp 777.000,00'
            ],
            [
                'name' => 'SIERRA COMMUTER CUP',
                'image' => "images/tumbler12.png",
                'price' => 'Rp 783.700,00'
            ],
            [
                'name' => 'DISNEY CRUISER',
                'image' => "images/tumbler13.png",
                'price' => 'Rp 978.350,00'
            ],
            ];

            return view('collection',[
            'title' => 'Products',
            'items' => $items
        ]);
    }
}
