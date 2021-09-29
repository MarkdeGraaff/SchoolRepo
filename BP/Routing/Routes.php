<?php
//Laad de autoloader
AutoLoader::register();

Route::set('page-link', function() {
  ExamplePage::CreateView('ExamplePage');
});

Route::callback();

?>
