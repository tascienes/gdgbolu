<?php

namespace App\Http\Controllers\backend\Statics;

use App\Models\Page;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticController extends Controller
{
    public function show()
    {
        $pages = Page::all();
        return view("backend.static.index",compact("pages"));
    }

    public function newPageShow()
    {
        return view("backend.static.newPage");
    }

    public function editPageShow($slug)
    {
        $page = Page::where("slug", $slug)->first();
        return view("backend.static.newPage", compact("page"));
    }

    public function update(Request $request, $slug)
    {
        if ($request->slug == null){
            $slugNew = str_slug($request->name);
        } else {
            $slugNew = str_slug($request->slug);
        }

        $page = Page::where("slug", $slug)->update([
            "name"=>$request->name,
            "slug" => $slugNew,
            "title" => $request->title,
            "keywords" => $request->keywords,
            "description" => $request->description,

        ]);

        if ($page){
            return "başarılı";
        }

        return "hatalı";
    }

    public function create(Request $request)
    {

        if ($request->slug == null){
            $slug = str_slug($request->name);
        } else {
            $slug = str_slug($request->slug);
        }

        $page = new Page();

        $page->name = $request->name;
        $page->slug = $slug;
        $page->title = $request->title;
        $page->keywords = $request->keywords;
        $page->description = $request->description;

        if($page->save()) {
            return ["status" => "success", "title" => "Başarılı", "message" => "Yeni sayfa kaydedildi"];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Yeni sayfa kaydedilemedi"];
    }

    public function delete(Request $request)
    {
        $page = Page::where("id", $request->id)->delete();

        if ($page){
            return ["status" => "success", "title" => "Başarılı", "message" => "Sayfa silindi"];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Sayfa silinemedi"];
    }
}
