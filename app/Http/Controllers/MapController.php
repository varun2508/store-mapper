<?php

namespace App\Http\Controllers;

use App\Store;
use FarhanWazir\GoogleMaps\GMaps;

class MapController extends Controller
{
    
    /**
     * Display a Google map.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $config['center'] = 'Broadway, New York';
        $config['zoom'] = '11';
        $config['map_height'] = '600px';

        $gmap = new GMaps();
        $gmap->initialize($config);
        
        $stores = Store::all();
        foreach ($stores as $key => $store)
        {
            $description = "<b>{$store->name}</b><br>"
            . "{$store->address}, {$store->city}, {$store->state}, {$store->zip}<br>"
            . "{$store->phone}";
            
            $marker['position'] = "{$store->address} {$store->city} {$store->state} {$store->zip}";
            $marker['infowindow_content'] = $description;

            $gmap->add_marker($marker);
        }
        
        $map = $gmap->create_map();
        return view('map.index', compact('map'));

    }

}
