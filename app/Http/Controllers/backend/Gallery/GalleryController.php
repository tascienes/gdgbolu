<?php

namespace App\Http\Controllers\backend\Gallery;

use App\Models\Album;
use App\Models\Setting;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;

class GalleryController extends Controller
{
    public function show(){


  $settings=Setting::all();

        return view("backend.gallery.gallery",compact("settings"));

    }
    public function update(Request $request){

        $input=$request->all();
        $images=array();
        if($files=$request->file('images')){
            foreach($files as $file){
                $filenameWithExt=$file->getClientOriginalName();
                $name="album".time().$filenameWithExt;
                $file->move('photos',$name);
 		        $images[]=$name;	
                    }
        }
       

        $album=new Album();
        $album->route= json_encode($images);
        $album->name=$input['name'];
        $album->save();



        if ($album->save()){

            return ["status" => "success", "title" => "başarılı", "message" => "Blog kaydedildi."];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Blog kaydedilemedi"];



    }


    public function delete(Request $request){

        $album = Album::where("id", $request->id)->first();
        
        $images=rtrim(ltrim($album->route));
        $resim=json_decode($images);


        for ($i=0;$i<count($resim); $i++){

                $yol="/photos/".$resim[$i];
            Storage::disk("public")->delete($yol);

        }

        $album->delete();
        if ($album){

            return ["status" => "success", "title" => "başarılı", "message" => "Blog silindi."];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Blog silinemedi"];


    }

    public function listele(){



        $albums=Album::all();
return view("backend.gallery.galleryList",compact("albums"));
    }




}
