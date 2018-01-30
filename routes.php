<?php
Route::set('index.php', function(){
	Index::CreateView('Index');
});

Route::set('about', function(){
	About::CreateView('About');
	About::test();
});

Route::set('home', function(){
	Index::CreateView('Index');
});

Route::set('portfolio', function(){
	Portfolio::CreateView('portfolio');
	//About::test();
});

Route::set('webdevelopment', function(){
	Webdevelopment::CreateView('Webdevelopment');
	//About::test();
});

Route::set('photography', function(){
	Photography::CreateView('Photography');
	//About::test();
});

Route::set('musicvideo', function(){
	Musicvideo::CreateView('Musicvideo');
	//About::test();
});

Route::set('contact', function(){
	Contact::CreateView('Contact');
	//About::test();
});

Route::set('blog', function(){
	Blog::CreateView('Blog');
	//About::test();
});

Route::set('admin', function(){
	Admin::CreateView('Admin');
	//About::test();
});