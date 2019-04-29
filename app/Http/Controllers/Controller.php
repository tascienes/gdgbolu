<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;


    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "files" => "required",
            "files.*" => "mimes:jpg,jpeg,png|max:5000"
        ];
    }

    public function messages()
    {
        return [
            "files.required" => "Bu alan gerekli",
            "files.*.mimes" => "Dosya uzantısı jpg,jpeg,png olabilir",
            "files.*.max" => "Dosya boyutu en fazla :max kb olabilir"
        ];
    }

}
