<?php

Route::set('/planets',function(){
    Home::planets();
});
Route::not_found();
?>