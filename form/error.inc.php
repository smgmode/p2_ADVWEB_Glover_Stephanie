<style type="text/css">
* {
	margin:0;
	padding: 0;
	border: 0;
}

header {
	background: beige;
	padding: 10px 0;
	position: fixed;
	left: 0;
	right: 0;
}

header nav ul li {
	display: inline-block;
	font-family: 'Montserrat', sans-serif;
	font-size: 15px;
	font-weight: bold;
}

header nav a:hover {
	color: blue;
}


.socialmedia {
	display: inline;
	font-family: 'Montserrat', sans-serif;
}

footer img {
	height: 25px;
}

footer {
	background: beige;
}
</style>

<header>
  <nav>
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="services.html">Services</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </nav>
</header>

<h1>Missing fields</h1>
<p>Sorry, you have not completed all of the required fields.</p>
<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>

<footer>
	<div class="socialmedia">
		<a href="https://twitter.com"><img src="images/twitter.png" alt="twitter" title="twitter" /></a>
		<a href="https://www.facebook.com"><img src="images/facebook.png" alt="facebook" title="facebook" /></a>
		<a href="https://www.instagram.com"><img src="images/ig.png" alt="instagram" title="instagram" /></a>
		<p>&copy; 2018 Le Concept de Design</p>
	</div>
</footer>
