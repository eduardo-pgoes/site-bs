<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class PagesController extends Controller
{
    
    public function apoio(){

        $files = Storage::files("/public/apoio");

        $files = array_map(function($file){
            return str_replace("public","storage",$file); 
        },$files);

        //O Logo da AJAPET não deve ser exibido com os outros
        $files = array_filter($files, function($file){
            return !strpos($file,"AJAPET");
        });

        return view('apoio')->with('files',$files);
    }
}


