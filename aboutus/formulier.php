	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<?php include("../landingpage/header.php"); ?>
	<div class="content">
	    <br>
	    <strong style="font-size:1.5rem;">Contact formulier</strong>

	    <form action="insert.php" method="post">
	        <label for="firstname">Voornaam</label>
	        <input type="text" id="fname" name="firstname" placeholder="Naam" required>

	        <label for="lastname">Achternaam</label>
	        <input type="text" id="lname" name="lastname" placeholder="Achternaam" required>

	        <label for="email">Email</label>
	        <input type="email" id="email" name="email" placeholder="Email" required>

	        <label for="gender">Gender</label>
	        <select id="gender" name="gender" required>
	            <option disabled selected hidden>Kies gender:</option>
	            <option value="man">Man</option>
	            <option value="vrouw">Vrouw</option>
	            <option value="NVT">Wil ik liever niet zeggen</option>
	        </select>
	        <label for="message">Bericht</label>
	        <textarea id="message" name="message" placeholder="Bericht" style="height:200px" required></textarea>

	        <input class="submit" type="submit" value="Submit">

	        <a href="index.php">Terug</a>
	    </form>

	</div>
	</div>