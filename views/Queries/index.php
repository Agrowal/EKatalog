<div class="section section-breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Indeks</h1>
          </div>
        </div>
      </div>
</div>


<div class="section">
	<div class="container text-center">
		<h2>ZAPRASZAM DO SKORZYSTANIA Z NASZEJ BAZY ROŚLIN </h2>
		<?php if(isset($_SESSION['is_logged_in'])) : ?>
		<a class="btn btn-success btn-share" id="query_button" href="<?php echo ROOT_URL; ?>queries/add">Dodaj teraz</a>
		<a class="btn btn-success btn-share" id="query_button" href="<?php echo ROOT_URL; ?>queries/browse">Szukaj teraz</a>
		<?php endif; ?>
	</div>
</div>

<hr>

<div class="container">
	<div class="section-title">
		<h1>Najnowsze pozycje</h1>
	</div>


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

</div>




<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="section-title">
				<h1>Wersja tabelaryczna</h1>
			</div>

			<div class="table-responsive">
				<?php

				echo "<br/>";

				$firstRow=$viewmodel[0];
				?>
				<table class="table">
					<tr>
					<th>Nazwa PL</th>
					<th>Nazwa LAT</th>
					<th>Typ</th>
					<th>Strefa</th>
					<th>Rozmiar [m]</th>
					<th>Ekspozycja</th>	
					<tr>

				<?php
				
				foreach ($viewmodel as $item) {

					echo "</tr>";
					
					echo "<td>$item[GatunekNazwaPL]</td>";
					echo "<td>$item[GatunekNazwaLAT]</td>";
					echo "<td>$item[GatunekTyp]</td>";
					echo "<td>$item[GatunekStrefa]</td>";
					echo "<td>$item[GatunekRozmiar]</td>";
					echo "<td>$item[GatunekEkspozycja]</td>";									
					
					echo "</tr>\n";							
					
				}

				
				echo "</table>";

				?>

				<br/><br/>

			</div> 
		</div>
	</div>
</div>