<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Singer;

class SingerController extends Controller
{
    public function add_singer(){
        $singer = new Singer();
        $singer->name = 'sonu nigam';
        $singer->save();

        $songids = [2,3,5];
        $singer->songs()->attach($songids);
    }

    public function show_singer($id){
        $singers = Song::find($id)->singer;
        return  $singers; 
    }

}
