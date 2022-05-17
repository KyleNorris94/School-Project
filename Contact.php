<!doctype html>

<html lang="en">
<head>

	<title>Contact Page</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<meta name="keywords" content="News, Pokedex, Pokemon " />
    <meta name="description" content="Contact Page" />
	<meta name="author" content="Elite 4" />
	<link href="normalize.css" rel="stylesheet" />
	<link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="slicknav.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="jquery.slicknav.min.js"></script>
	<script type="text/javascript">$(document).ready(function(){
		$('#nav_menu').slicknav({prependTo:"#mobile_menu"});
    });
    </script></head>
	
<body>
	    
		
	<header>
		<h2>THE ELITE FOUR</h2>
		<h3>Your guides through your Pokemon adventure</h3>
    </header>
    
    <nav id="mobile_menu"></nav>
    <nav id="nav_menu">
    	<ul>
    		<li><a class="current" href="Main.html">Home</a></li>
    		<li><a  href="Gameboy.html">Your Pokedex</a></li>
            <li><a href="Gen1.html">All Generation 1</a></li>
    		<li class="last item"><a href="Contact.html">Join us!</a></li>      
    	</ul>
    </nav>
    <main class="home">
       <aside>
          <h3><p>Sign up for Email updates from the team!</p>
             <form id="email_form" name="email_form" action="join.html" method="get">
	            <label for="email_address1">Email Address:</label>
	            <input type="text" id="email_address1" name="email_address1">
	            <span>*</span><br>
	            <label for="email_address2">Confirm Email:</label>
	            <input type="text" id="email_address2" name="email_address2">
	            <span>*</span><br>
	            <label>&nbsp;</label>
	            <input type="button" id="join_list" value="Join our List"></input>   
	         </form>
		 </h3> 
      </aside>
      <section>
         <h1>Catch them all!</h1>
         
         <h2>We pokemon with you!</h2>
            <p>Our goal is simple. We play, you play, others play. Let's play together. Building a community of players allows us to keep our data relevant and accurate.</p>
            <p class="indent">Come to<i> The Elite Four</i> for quick and easy access to the information on the pokemon you love.</p>
			<p>We are always seeking self-improvement and ways to make your gaming experience more fun. Contact us if you have ideas, questions, or concerns. For now, we have a ticker for pokemon current on the main page, but soon, we hope to publish a newsletter. Sign up if interested.
        
            <p id="contact_us"><em>Contact us by phone:</em>  867-5309 for general information.</p>
		    <p><b>Contact by email:</b> &#9993; EliteFour@gmail.com &#9993;</p> <br>
		</section>
		<div class="sidebar">
		<p> <b>Credits:</b> Ronniel Dizon, our gym leader... </p>
		<p> Alec Blanton is a software developer who loves....</p>
		<p> Kyle Norris, the one and only...</p>
		<p>Cisco Velez is an old man...</p>
		<p>Tomache Vargas, need I say more?</p>
		
		
		
		</div>
    </main>
    <footer>
      <p>&copy; Copyright 2021 The Elite Four + Vargas</p>
	  <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a> 
    </footer>
</body>
</html>