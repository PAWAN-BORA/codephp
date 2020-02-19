<?php
    Route::set('about-us', function(){
        AboutUs::createView("AboutUs");
    });
    Route::set('contact-us', function(){
        ContactUs::createView("ContactUs");
    });
    Route::set('index.php', function(){
        ContactUs::createView("index");
    });
 ?>
