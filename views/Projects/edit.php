<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Edytuj projekt</h1>
					</div>
				</div>
			</div>
</div>

<?php Messages::display(); ?>

<div class="section">
  <div class="container">
	<div>
	<?php
	echo '<h2>'.$viewmodel[0]['ProjectName'].'</h2>';
	?>
	<small>
	<?php
	echo $viewmodel[0]['ProjectDescription'];
	?>
	</small>
	<br>

	<a class="btn btn-blue btn-share" id="query_button" href="<?php echo ROOT_URL; ?>projects/addPosition">Dodaj nową pozycję</a>
	<a class="btn btn-blue btn-share" id="query_button" href="<?php echo ROOT_URL; ?>projects/changeProjectName">Zmień nazwę</a>
	<a class="btn btn-blue btn-share" id="query_button" href="<?php echo ROOT_URL; ?>projects/changeProjectDesc">Zmień opis</a>
	<a class="btn btn-red btn-share" id="query_button" href="<?php echo ROOT_URL; ?>projects/index">Powrót</a>

	</div>

	<br/><br/>

	<?php if(count($viewmodel,COUNT_RECURSIVE) == 4): ?>
		<div class="well">
			<h3>Brak pozycji</h3>
		</div>
	<?php else:  ?>


		<?php foreach($viewmodel as $item): ?>
			<div class="well">
				<div class="row ">
					<div class="col-md-8">
						<h2><?php echo $item['GatunekNazwaPL']; ?></h2>
						<p><i><?php echo $item['GatunekNazwaLAT']; ?></i></p>
						<hr/>
						<p>
						<b>Typ:</b> <?php echo $item['GatunekTyp']; ?>					<br/>
						<b>Strefa:</b> <?php echo $item['GatunekStrefa']; ?>			<br/>
						<b>Ekspozycja:</b> <?php echo $item['GatunekEkspozycja']; ?>	<br/>
						<b>Rozmiar:</b> <?php echo $item['GatunekRozmiar']; ?> m  		<br/>
						<?php echo $item['GatunekOpis']; ?>						<br/>
						</p>
						<form style ='margin-top: 10px;' action="<?php echo ROOT_PATH; ?>projects/deletePosition" method="post">
							<input type="hidden" value="<?php echo"$item[ProjectID]";?>" name="ProjectID">
							<input type="hidden" value="<?php echo"$item[GatunekNazwaPL]";?>" name="GatunekNazwaPL">
							<input class="btn btn-red btn-sm" name="submit" type="submit" value="Usuń" />
						</form>
					</div>		
					<div class="col-md-4">
						<small>	
						<?php if($item['GatunekIMG']!=""): ?>
							<br>											
							<img class=" img-rounded" src="<?php echo $item['GatunekIMG']; ?>" alt="*Zdjęcie rośliny*">
						<?php endif; ?>
						</small>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>
</div>
</div>