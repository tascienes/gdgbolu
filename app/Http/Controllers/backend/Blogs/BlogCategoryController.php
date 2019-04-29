<?php

namespace App\Http\Controllers\backend\Blogs;


use App\Models\BlogCategory;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;

class BlogCategoryController extends Controller
{
    public  function index(){
            $categories=BlogCategory::all();
            return view("backend.blog.categories",compact("categories"));
    }
    public function createShow(){
        return view("backend.blog.newCategory");
    }
    public function updateShow($id){

        $category=BlogCategory::where("id",$id)->first();

        return view("backend.blog.newCategory",compact("category"));
    }
    public function create(Request $request){

        $slug=str_slug($request->title);


        $category =new BlogCategory();

        $category->title=$request->title;
        $category->keywords=$request->keywords;
        $category->description=$request->description;
        $category->slug=$slug;


        if($category->save()){
            return["status"=>"success","title"=>"Başarılı","message"=>"kaydedildi"];
        }
        return["status"=>"error","title"=>"no","message"=>"wrong!!"];

    }


    public function update($id,Request $request){
        $slug=str_slug($request->title);

        $category=BlogCategory::where("id",$id)->update([
            "title"=>$request->title,
            "keywords"=>$request->keywords,
            "description"=>$request->description,
            "slug"=> $slug
        ]);
        if($category){
            return["status"=>"success","title"=>"Başarılı","message"=>"kaydedildi"];
        }
        return["status"=>"error","title"=>"no","message"=>"wrong!!"];
    }
    public function delete(Request $request){

        $category=BlogCategory::where("id",$request->id)->delete();
        
        if($category){
            return["status"=>"success","title"=>"Başarılı","message"=>"silindi"];
        }
        return["status"=>"error","title"=>"no","message"=>"wrong!!"];
    }

}
