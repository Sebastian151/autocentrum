<!DOCTYPE html>
<html>
<head>

<title>Autocentrum MP</title>

<meta charset="utf-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="robots" content="all">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />-->
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<script src="js/jquery-1.9.1.min.js"></script>
<!--<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>-->
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="js/scripts.js"></script>

</head>
<body>
    <div id="main" class="clearfix">
        <header>
			<div id="header-top">
				<div id="logo">
					<a class="logo"><img src="img/logo.png" alt="logo"></a>
				</div>
				<div id="prihlasit">
					 <a href="#"><img src="img/panacik.jpg" alt="prihlasenie">Prihlásiť</a></p> 
				</div>	
			</div>
			<span class="menu_click">MENU</span>
            <nav class="menu">
                <ul>
                    <li><a href="index.php">Úvod</a>|</li>
                    <li><a href="carpark.php">Autopark</a>|</li>
                    <li><a href="price.php">Cenník</a>|</li>
                    <li><a href="reservation.php">Rezervácie</a>|</li>
					<li><a href="rules.php">Podmienky</a>|</li>
					<li><a href="servis.php">Servis</a>|</li>
					<li><a href="autofoils.php">Autofólie</a>|</li>
                    <li><a href="contact.php">Kontakt</a></li>
                </ul>
            </nav>
        </header>
		<section id="content">
			<?php 
				if (isset($_POST['odoslat'])){
					include 'funkcie.php';
					if (isset($_POST['adresat']) && isset($_POST['meno']) && isset($_POST['email']) && isset($_POST['sprava'])){
						$sprava = "Správa \n";
						$sprava .= " Meno - " . $_POST["meno"] . "\n";
						$sprava .= " Email - " . $_POST["email"] . "\n";
						isset($_POST["tel"]) ? $sprava .= " Tel - " . $_POST["tel"] . "\n" : "";
						$sprava .= " Správa - " . $_POST["sprava"] . "\n";
						send_email($_POST['email'], 'Správa - Autocentrum MP', $sprava);
					} else {
						echo "<p class='red'>Musíte vyplniť všetky povinné údaje</p>";
					}
				}
			?>
			<div id="kontakt">
				<h1>Kontakt</h1>
				<div class="stlpec1">
					<h3>Napíšte nám</h3>
					<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit </p>
					<form name="kontakt" id="kontaktform" action="contact.php" method="POST">
						<label for="adresat">Adresát <span class="red">*</span></label>
							<select name="adresat" id="adresat" class="custom" required> 
									<option selected='selected'>Autopožičovňa</option>
									<option>Servis</option>
									<option>Autofólie</option>
							</select>
						<label for='meno'>Meno a Priezvisko <span class="red">*</span></label>
							<input id="meno" name="meno" type="text" value="" required>
						<label for='email'>Email <span class="red">*</span></label>
							<input id="email" name="email" type="email" value="" required>
						<label for='tel'>Telefón</label>
							<input id="tel" name="tel" type="text" value="">
						<label for='sprava'>Správa <span class="red">*</span></label>
							<textarea name="sprava" id="sprava" required></textarea>
						<br />
						<input name="odoslat" id="odoslat" type="submit" value="Odoslať">
						<p id="rezervaciapopis"><span class="red">*</span> POLIA OZNAČENÉ HVIEZDIČKOU JE POTREBNE VYPLNIŤ.</p>
					</form>
				</div>
				<div class="stlpec2">
					<h3>Autocentrum MP, spol. s r.o.</h3>
					<img src="img/auto1.png" alt="auto1" height="160" width="300">
				</div>
				<div id="stlpec3">
					<p>Adresa 318/11 <br />98401 Lucenec 1</p>
					<p><span class="bold">IČO:</span> 0000000000 <br /><span class="bold">DIČ:</span> 0000000000<br /><span class="bold">IČ DPH:</span> sk0000000000</p>
					<p><span class="bold">Telefón:</span> +421 905 000 000<br /><span class="bold">Email:</span> <a href="mailto:@.sk">email@email.sk</a></p>
				</div>
			</div>
		</section>
      <footer>
			<nav>
				 <ul>
					<li><a href="index.php">Úvod</a>|</li>
                    <li><a href="carpark.php">Autopark</a>|</li>
                    <li><a href="price.php">Cenník</a>|</li>
                    <li><a href="reservation.php">Rezervácie</a>|</li>
					<li><a href="rules.php">Podmienky</a>|</li>
					<li><a href="servis.php">Servis</a>|</li>
					<li><a href="autofoils.php">Autofólie</a>|</li>
                    <li><a href="contact.php">Kontakt</a></li>
				</ul>
			</nav>
			<div id="vytvoril"><span class="siva">Vytvoril</span> SEBO</div>
            <div id="prava"><span class="siva">2015 © Všetky práva vyhradené.</span></div>
        </footer>
    </div>  
</body>
</html>