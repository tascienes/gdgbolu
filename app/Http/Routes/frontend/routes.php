<?php



Route::group(["as"=>"frontend","namespace"=>"frontend"],function (){

    Route::get('/',"HomeController@home")->name(".index");

    Route::get('/index', "HomeController@home")->name(".index");

        Route::group(["as"=>".blog","prefix"=>"blog"],function (){

            Route::get("/","BlogController@index")->name(".index");

            Route::get("/{category}","BlogController@category")->name(".category");

            Route::get("/{category}/{slug}","BlogController@details")->name(".details");

            });

        Route::get("/gdg","BlogController@gdg")->name(".gdg");

        Route::get("/wtm","BlogController@wtm")->name(".wtm");

        Route::get("/workshop","BlogController@workshop")->name(".workshop");

        Route::get("/team","HomeController@team")->name(".team");

        Route::get("/about-us","HomeController@about")->name(".about");

        Route::get("/sponsor","HomeController@sponsor")->name(".sponsor");

        Route::get("/gallery","HomeController@gallery")->name(".gallery");

        Route::get("/apply","FormsController@applyShow")->name(".applyShow");

        Route::post("/apply","FormsController@applySubmit")->name(".applySubmit");

        Route::get("/feedback","FormsController@feedbackShow")->name(".feedbackShow");

        Route::post("/feedback","FormsController@feedbackSubmit")->name(".feedbackSubmit");
       
	Route::get("/album","FormsController@photosShow")->name(".photosShow");

    });

