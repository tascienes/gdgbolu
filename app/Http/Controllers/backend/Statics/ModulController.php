<?php

namespace App\Http\Controllers\backend\Statics;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ModulController extends Controller
{
    public function show()
    {
        $modules = Module::all();
        return view("backend.static.moduleIndex", compact("modules"));
    }

    public function newModulShow()
    {
        $pages = Page::all();
        return view("backend.static.newModule", compact("pages"));
    }

    public function editModulShow($id)
    {
        $pages = Page::all();
        $module = Module::where("id", $id)->first();
        return view("backend.static.newModule", compact("pages", "module"));
    }

    public function update(Request $request, $id)
    {

        $page = Module::where("id", $id)->update([
            "name" => $request->name,
            "title" => $request->title,
            "description" => $request->description,
            "page_id" => $request->page_id

        ]);

        if ($page) {
            return "başarılı";
        }

        return "hatalı";
    }

    public function create(Request $request)
    {
        $module= new Module();

        $module->name = $request->name;
        $module->title = $request->title;
        $module->description = $request->description;
        $module->page_id = $request->page_id;


        if ($module->save()) {
            return ["status" => "success", "title" => "Başarılı", "message" => "Yeni modul kaydedildi"];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Yeni modul kaydedilemedi"];
    }

    public function delete(Request $request)
    {
        $module = Module::where("id", $request->id)->delete();

        if ($module) {
            return ["status" => "success", "title" => "Başarılı", "message" => "Modül silindi"];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Modül silinemedi"];
    }
}
