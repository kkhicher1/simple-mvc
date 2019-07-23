<?php
Route::set('index.php', function () {
    return HomeController::view('Home');
});
Route::set('about', function () {
    AboutUsController::view('About');
});
Route::set('blog', function () {
    BlogController::view('Blog');
});
// Route::set('contact');
