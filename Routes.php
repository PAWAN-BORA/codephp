<?php
     // require_once('./App/Controllers/'.$class_name.'.php');

    // Route::set('about-us', function(){
    //     AboutUs::createView("AboutUs");
    //
    // });
    // Route::set('contact-us', function(){
    //     ContactUs::createView("ContactUs");
    // });
    Route::set('about-us', 'Index@about');
    Route::set('contact-us', 'Index@contact');
    Route::set('/', 'Index@start');


 ?>
