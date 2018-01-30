<?php
include("components/header.php");
?>
<style>
.container-fluid.content
  {

  }
.col-md-8.web, .col-md-4.web
  {

  }
 p.content
 {
 	text-align:justify;
 }
</style>
<div class="container-fluid content">
	<div class="row">
		<div class="col-md-4 web">
		<img src="views/resources/images/wt.jpg" width="100%" style="border-radius: 10px;">
		</div>

		<div class="col-md-8 web" >
		<h3>Cat &amp Leon's World Tour Blog Page</h3>
		<p class="content">Two weeks before embarking on a round the world trip between November 2017 and January 2018, we decided to create a blog as a diary for our trip.</p>
		<p class="content">I developed the page in stages from the most important elements to the least (as I had limited time to create the web application).</p>
		<p class="content">The first stage was was to create the login and blog administration page. The login area provided options to add a blog, add a message to the message board and to upload photos to the gallary area,  dependant upon the login credentials of the user</p>
		<p class="content">The user interface for the page was then created with an emphasis on a lightwweight wasy to navigate page</p>
		<p class="content">Finally extra areas such as the 'Where is Cat &amp Leon?' and flight itinery were added</p>
		<p class="content">Owing to the success of the page, I am currently redeveloping the page to facilitate a private diary area, automating alternative text on images and also revamping the aesthetics of the page </p>
		</div>
	</div>
</br></hr></br
	<div class="row">
		<div class="col-md-4 web">
		<img src="views/resources/images/bophins.jpg" width="100%">
		</div>
		<div class="col-md-8 web" >
		<h1>The Bophins</h1>
		<p class="content">The Bophins are a Northampton based garage rock band</p>
		<p class="content">THe guitarist of The Bophins kindly allowed me to use his web hosting for my personal page and in return I offered create a home page for the band.</p>
		<p class="content">The page is currently in developement (awaiting some extra information from the band for the content of the site)</p>
		<p class="content">I chose to use the Laravel framework to improve my knowledge of frameworks (having never used on before), I found the framework to speed up the process however I have now created my own lightweight MVC template which I would probably as a prefereance</p>
		</div>
	</div>
</div>

<?php
include("components/footer.php");