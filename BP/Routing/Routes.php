<?php
//Laad de autoloader
AutoLoader::register();

Route::set('page-link', function() {
  ExampleController::CreateView('ExamplePage');
});

Route::callback();

?>
