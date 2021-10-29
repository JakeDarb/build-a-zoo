<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function index(){
        $nft = 'otter';
        $data['nft'] = $nft;
        return view('market/index');
    }

    public function show(\App\Models\Market $nft){
        $nft = 'otter';
        $data['nft'] = $nft;
    return view('market/show', $data);
    }
}
