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
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link href="css/style.css" rel="stylesheet">


<script src="js/jquery-1.9.1.min.js"></script>
<!--<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>-->
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
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
			<?php				if (isset($_POST['odoslat'])){					include 'funkcie.php';					if (isset($_POST['vozidlo']) && isset($_POST['datumprevzatia']) && isset($_POST['miestoprevzatia']) && isset($_POST['miestodovzdania']) && isset($_POST['dlzkaprenajmu']) && isset($_POST['menopriezvisko']) && isset($_POST['ulica']) && isset($_POST['mesto']) && isset($_POST['email']) && isset($_POST['tel']) ){						$sprava = "Rezervácia \n";
						$sprava .= "Vozidlo - " . $_POST["vozidlo"] . "\n"; 
						$sprava .= "Dátum prevzatia - " . $_POST["datumprevzatia"] . "\n";  
						$sprava .= "Miesto prevzatia - " . $_POST["miestoprevzatia"] . "\n";  
						$sprava .= "Miesto odovzdania - " . $_POST["miestodovzdania"] . "\n"; 
						$sprava .= "Dľžka prenájmu - " . $_POST["dlzkaprenajmu"] . "\n"; 
						$sprava .= "Objednávajúci \n";
						$sprava .= "Meno / Názov firmy - " . $_POST["menopriezvisko"] . "\n"; 
						$sprava .= "Ulica - " . $_POST["ulica"] . "\n"; 
						$sprava .= "Mesto - " . $_POST["mesto"] . "\n"; 
						$sprava .= "Email - " . $_POST["email"] . "\n"; 
						$sprava .= "Telefón - " . $_POST["tel"] . "\n"; 
						$sprava .= isset($_POST["ico"]) ? "Ičo - " . $_POST["ico"] . "\n" : "";
						$sprava .= isset($_POST["dic"]) ? "Dič - " . $_POST["dic"] . "\n" : "";
						$sprava .= isset($_POST["icdph"]) ? "Ič DPH - " . $_POST["icdph"] . "\n" : "";
						$sprava .= isset($_POST["poznamka"]) ? "Správa - " . $_POST["poznamka"] . "\n" : "";
						send_email($_POST['email'], 'Rezervácia - Autocentrum MP', $sprava);					} else {						echo "<p class='red'>Musíte vyplniť všetky povinné údaje</p>";					}					}				   			?>
			<h1>Rezervácia</h1>
			<form name="rezervacia" id="rezervacia" action="reservation.php" method="POST">
			<div class="stlpec1">
				<h3>Údaje o vozidle</h3>
				<label for="vozidlo">Vozidlo <span class="red">*</span></label>
					<select name="vozidlo" id="vozidlo" class="custom" required> 
						<optgroup label="ekonomicka trieda">
							<option selected='selected'>ŠKODA Fábia</option>
							<option>ŠKODA Fábia</option>
							<option>ŠKODA Fábia</option>
						</optgroup>
						<optgroup label="ekonomicka trieda">
							<option selected='selected'>ŠKODA Fábia</option>
							<option>ŠKODA Fábia</option>
							<option>ŠKODA Fábia</option>
						</optgroup>
					</select>
				<label for='datumprevzatia'>Dátum prevzatia <span class="red">*</span></label>
					<input id="datumprevzatia" name="datumprevzatia" type="text" value="" required>
				<label for='miestoprevzatia'>Miesto prevzatia <span class="red">*</span></label>
					<select name="miestoprevzatia" id="miestoprevzatia" class="custom" required> 
                        <option selected='selected'>Zvolen, Astronomicka 1</option>
                        <option>Detva, Astronomicka 1</option>
                        <option>Lučenec, Astronomicka 1</option>
						<option>Dudince, Astronomicka 1</option>
    				</select>
				<label for='miestodovzdania'>Miesto odovzdania <span class="red">*</span></label>
					<select name="miestodovzdania" id="miestodovzdania" class="custom" required> 
                        <option selected='selected'>Zvolen, Astronomicka 1</option>
                        <option>Detva, Astronomicka 1</option>
						<option>Lučenec, Astronomicka 1</option>
						<option>Dudince, Astronomicka 1</option>
    				</select>
				<label for="dlzkaprenajmu">Dĺžka prenájmu <span class="red">*</span></label>
					<select name="dlzkaprenajmu" id="dlzkaprenajmu" class="custom" required> 
							<option selected='selected'>1 deň</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
					</select>
			</div>
			<div class="stlpec2">
				<h3>Osobné údaje</h3>
				<label for='menopriezvisko'>Meno a prezvisko / Názov firmy <span class="red">*</span></label>
					<input id="menopriezvisko" name="menopriezvisko" type="text" value="" required>
				<label for='ulica'>Ulica a číslo <span class="red">*</span></label>
					<input id="ulica" name="ulica" type="text" value="" required>
				<label for='mesto'>Mesto a PSČ <span class="red">*</span></label>
					<input id="mesto" name="mesto" type="text" value="" required>
				<label for='email'>Email <span class="red">*</span></label>
					<input id="email" name="email" type="email" value="" required>
				<label for='tel'>Telefón <span class="red">*</span></label>
					<input id="tel" name="tel" type="text" value="" required>
			</div>
			<div id="stlpec3">
				<h3>Údaje o firme</h3>
				<label for='ico'>IČO</label>
					<input id="ico" name="ico" type="text" value="">
				<label for='dic'>DIČ</label>
					<input id="dic" name="dic" type="text" value="">
				<label for='icdph'>IČ DPH</label>
					<input id="icdph" name="icdph" type="text" value="">
				<label for='poznamka'>Poznámka</label>
					<textarea name="poznamka" id="poznamka"></textarea>
			</div>
			<input name="odoslat" id="odoslat" type="submit" value="Odoslať">
			<p id="rezervaciapopis"><span class="red">*</span> POLIA OZNAČENÉ HVIEZDIČKOU JE POTREBNE VYPLNIŤ.<br />
					ODOSLANÍM OBJEDNÁVKY SÚHLASÍTE S <a href="rules.php">PODMIENKAMY POSKYTOVANIA SLUŽIEB.</a></p>
				
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