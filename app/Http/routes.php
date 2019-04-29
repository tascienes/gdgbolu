<?php

include base_path("app/Http/Routes/frontend/routes.php");
include base_path("app/Http/Routes/backend/routes.php");





Route::get('/home', 'HomeController@index');
