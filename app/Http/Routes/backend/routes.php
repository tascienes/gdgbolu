<?php

Route::get("/admin/giris-yap","Auth\AuthController@showLoginForm")->name("backend.login");
Route::post("/admin/giris-yap","Auth\AuthController@login");
Route::get("/admin/cikis-yap","Auth\AuthController@logout")->name("backend.logout");


Route::group(["prefix"=>"admin","as"=>"backend","namespace"=>"backend","middleware"=>"admin"],function (){
    Route::get("/",function (){


        return view("backend.home.index");
    });


Route::group(["prefix"=>"settings","as"=>".settings","namespace"=>"Settings"],function (){

   Route::get("/","SettingsController@show")->name(".show");
    Route::post("/update", "SettingsController@update")->name(".update");
    Route::post("/create", "SettingsController@create")->name(".create");
    Route::post("/delete", "SettingsController@delete")->name(".delete");
    });
    Route::group(["prefix" => "blog", "as" => ".blog", "namespace" => "Blogs"], function (){
        Route::get("/", "BlogController@index")->name(".index");
        Route::get("/yeni-blog", "BlogController@createShow")->name(".createShow");
        Route::get("/duzenle/{slug}", "BlogController@updateShow")->name(".updateShow");
        Route::post("/delete", "BlogController@delete")->name(".delete");
        Route::post("/update/{id}", "BlogController@update")->name(".update");
        Route::post("/create", "BlogController@create")->name(".create");

        Route::group(["prefix" => "categories", "as" => ".category"], function (){
            Route::get("/", "BlogCategoryController@index")->name(".index");
            Route::get("/yeni-kategori", "BlogCategoryController@createShow")->name(".createShow");
            Route::get("/duzenle/{id}", "BlogCategoryController@updateShow")->name(".updateShow");
            Route::post("/update/{id}", "BlogCategoryController@update")->name(".update");
            Route::post("/create", "BlogCategoryController@create")->name(".create");
            Route::post("/delete", "BlogCategoryController@delete")->name(".delete");
        });




    });
    Route::group(["prefix"=>"gallery","as"=>".gallery","namespace"=>"Gallery"],function (){
        Route::get("/list","GalleryController@listele")->name(".list");
        Route::post("/delete","GalleryController@delete")->name(".delete");
        Route::get("/","GalleryController@show")->name(".show");
        Route::post("/", "GalleryController@update")->name(".update");

    });


    Route::group(["prefix"=>"forms","as"=>".forms","namespace"=>"Forms"],function (){
        Route::get("/feedbackList","FormsController@feedbackList")->name(".feedbackList");
        Route::post("/feedDelete","FormsController@feedDelete")->name(".feedDelete");
        Route::get("/applyList","FormsController@applyList")->name(".applyList");
        Route::post("/applyDelete", "FormsController@applyDelete")->name(".applyDelete");

    });
    Route::group(["prefix"=>"kura","as"=>".kura","namespace"=>"Kura"],function (){
        Route::get("/","KuraController@show")->name(".show");
        Route::post("/","KuraController@kura")->name(".kura");
        Route::get("/list","KuraController@kuraList")->name(".kuraList");
       Route::post("/delete","KuraController@delete")->name(".delete");
       // Route::post("/applyDelete", "FormsController@applyDelete")->name(".applyDelete");

    });




    Route::group(["prefix"=>"events","as"=>".events","namespace"=>"Events"],function (){

        Route::get("/","EventsController@show")->name(".show");
        Route::post("/update", "EventsController@update")->name(".update");
        Route::post("/create", "EventsController@create")->name(".create");
        Route::get("/createShow", "EventsController@createShow")->name(".createShow");
        Route::post("/delete", "EventsController@delete")->name(".delete");
    });
    Route::group(["prefix"=>"speakers","as"=>".speakers","namespace"=>"Speakers"],function (){

            Route::get("/","SpeakersController@show")->name(".show");
        Route::post("/update", "SpeakersController@update")->name(".update");
        Route::get("/updateShow/{id}", "SpeakersController@updateShow")->name(".updateShow");
        Route::post("/create", "SpeakersController@create")->name(".create");
        Route::get("/createShow", "SpeakersController@createShow")->name(".createShow");
        Route::post("/delete", "SpeakersController@delete")->name(".delete");
    });
    Route::group(["prefix"=>"members","as"=>".members","namespace"=>"Members"],function (){

        Route::get("/","MembersController@show")->name(".show");
        Route::post("/update", "MembersController@update")->name(".update");
        Route::get("/updateShow/{id}", "MembersController@updateShow")->name(".updateShow");
        Route::post("/create", "MembersController@create")->name(".create");
        Route::get("/createShow", "MembersController@createShow")->name(".createShow");
        Route::post("/delete", "MembersController@delete")->name(".delete");
    });
    Route::group(["prefix"=>"sponsors","as"=>".sponsors","namespace"=>"Sponsors"],function (){

        Route::get("/","SponsorsController@show")->name(".show");
        Route::post("/update", "SponsorsController@update")->name(".update");
        Route::get("/updateShow/{id}", "SponsorsController@updateShow")->name(".updateShow");
        Route::post("/create", "SponsorsController@create")->name(".create");
        Route::get("/createShow", "SponsorsController@createShow")->name(".createShow");
        Route::post("/delete", "SponsorsController@delete")->name(".delete");
    });

    Route::group(["prefix"=>"participants","as"=>".participants","namespace"=>"Participants"],function (){

        Route::get("/","ParticipantsController@show")->name(".show");
        Route::post("/add", "ParticipantsController@add")->name(".add");
        Route::get("/list","ParticipantsController@allShow")->name(".allShow");
        Route::post("/delete", "ParticipantsController@delete")->name(".delete");
    });

    Route::group(["prefix"=>"tickets","as"=>".tickets","namespace"=>"Tickets"],function (){

        Route::get("/","TicketsController@show")->name(".show");
        Route::post("/update", "TicketsController@update")->name(".update");
        // Route::post("/create", "TicketsController@create")->name(".create");
        //Route::post("/delete", "TicketsController@delete")->name(".delete");


    });
    Route::group(["prefix"=>"counters","as"=>".counters","namespace"=>"Counters"],function (){

        Route::get("/","CountersController@show")->name(".show");
        Route::post("/update", "CountersController@update")->name(".update");
        // Route::post("/create", "TicketsController@create")->name(".create");
        //Route::post("/delete", "TicketsController@delete")->name(".delete");


    });



      //static

    Route::group(["prefix" => "static", "as" => ".static", "namespace" => "Statics"], function () {
        Route::get("/", "StaticController@show")->name(".show");
        Route::get("/yeni-sayfa", "StaticController@newPageShow")->name(".newPageShow");
        Route::post("/new-page-create", "StaticController@create")->name(".newPageCreate");
        Route::get("/duzenle/{slug}", "StaticController@editPageShow")->name(".pageEditShow");
        Route::post("/edit/{slug}", "StaticController@update")->name(".pageEdit");
        Route::post("/delete", "StaticController@delete")->name(".delete");

        Route::group(["prefix" => "modul", "as" => ".module"], function () {
            Route::get("/", "ModulController@show")->name(".show");
            Route::get("/yeni-modul", "ModulController@newModulShow")->name(".newModuleShow");
            Route::post("/new-module-create", "ModulController@create")->name(".newModuleCreate");
            Route::get("/duzenle/{id}", "ModulController@editModulShow")->name(".editModuleShow");
            Route::post("/edit/{id}", "ModulController@update")->name(".moduleEdit");
            Route::post("/delete", "ModulController@delete")->name(".delete");
        });
    });

});