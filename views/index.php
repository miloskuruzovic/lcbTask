<?php 
	include_once "templates/header.php";
	include_once "templates/navigation.php";
?>

<div class="container">
	<div class="row text-center">
		<h1>Lcb Task</h1>
	</div>
	<div class="row" style="margin-top: 20px;">
		<blockquote>
		<dl>
			<dt>Registracija i Logovanje</dt>
			<dd>Donji desni ugao, forma za registraciju, uneti željeni username i password.</dd>
			<dd>Nakon uspešne registracije možete da se ulogujete, kako biste pristupili CRUD stranicama.</dd>
			<dd>Nakon uspešnog logovanja, u donjem desnom uglu je dugme za logout.</dd>
			<dd>&nbsp;</dd>
			<dt>Navigacija</dt>
			<dd>Ako niste ulogovani, u navigaciji se nalaze samo linkovi ka svim postovima i kategorijama.</dd>
			<dd>Kada se ulogujete, dobijate pristup stranicama za kreiranje kategorija i postova, kao i mogućnost update/delete po pravilima iz zadatka.</dd>
		</dl>	
		</blockquote>	
	</div>
</div>

<?php 
	include_once "templates/footer.php";
 ?>