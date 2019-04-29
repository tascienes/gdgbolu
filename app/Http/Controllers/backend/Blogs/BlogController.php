<?php

namespace App\Http\Controllers\backend\Blogs;



use App\Models\Blog;
use App\Models\BlogCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;


class BlogController extends Controller
{
    public function index()
    {

        $blogs = Blog::all();
        return view("backend.blog.blogs", compact("blogs"));

    }

    public function createShow()
    {

        $categories = BlogCategory::all();
        return view("backend.blog.newBlog", compact("categories"));

    }

    public function updateShow($slug)
    {

        $blog = Blog::where("slug", $slug)->first();
        $categories = BlogCategory::all();

        return view("backend.blog.newBlog", compact("blog", "categories"));
    
    }

    public function create(Request $request)
    {
            $file=null;
    
        $file = Input::file('coverImage');
        $filenameWithExt = $file->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
     
        $name="blog".time().$filenameWithExt;
       
        $file->move(public_path().'/blogs/',$name);
      

        $slug = str_slug($request->title.Carbon::now(),"-");

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->keywords = $request->keywords;
        $blog->description = $request->description;
        $blog->tags = $request->tags;
        $blog->content = $request->get("content");
        $blog->category_id = $request->blogCategory;
        $blog->user_id = "1";
        $blog->slug = $slug;
        $blog->cover_image="/blogs/".$name;
        

        if ($blog->save()){

            return ["status" => "success", "title" => "başarılı", "message" => "Blog kaydedildi."];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Blog kaydedilemedi"];


    }

    public function update($slug, Request $request)
    {
        $newSlug = str_slug($request->title.Carbon::now(),"-");

        $oldBlog = Blog::where("slug", $slug)->first();
        $file = $oldBlog->cover_image;

        if ($request->file("coverImage") != null){

            Storage::disk("public")->delete($oldBlog->cover_image);
            $file = Storage::disk("public")->putFile("/blogs",$request->file("coverImage"));

        }

        $blog = Blog::where("slug", $slug)->update([
            "title" => $request->title,
            "keywords" => $request->keywords,
            "description" => $request->description,
            "tags" => $request->tags,
            "content" => $request->get("content"),
            "category_id" => $request->blogCategory,
            "user_id" => "1",
            "slug" => $newSlug,
            "cover_image" => $file,
        ]);

        if ($blog){

            return ["status" => "success", "title" => "başarılı", "message" => "Blog güncellendi."];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Blog güncellenemedi"];
    }

    public function delete(Request $request)
    {

        $blog = Blog::where("id", $request->id)->first();
        Storage::disk("public")->delete($blog->cover_image);
        $blog->delete();

        if ($blog){

            return ["status" => "success", "title" => "başarılı", "message" => "Blog silindi."];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Blog silinemedi"];

    }
    
}
