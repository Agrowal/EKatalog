<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Twoje projekty</h1>
					</div>
				</div>
			</div>
</div>

<?php Messages::display(); ?>

<div class="section">
  <div class="container">
	<div class="text-center">
	<?php

	if(!$viewmodel): ?>
		<h2>Utwórz nowy projekt </h2>

		<a class="btn btn-blue btn-share" id="query_button" href="<?php echo ROOT_URL; ?>projects/add">Utwórz teraz</a>
		<a class="btn btn-red btn-share" id="query_button" href="<?php echo ROOT_URL; ?>">Powrót</a>

	<?php else:?>

		<div class="well">
			<h3>Zapisane projekty użytkownika <?php echo $_SESSION['user_data']['name']; ?></h3>
			<a class="btn btn-blue btn-share" id="query_button" href="<?php echo ROOT_URL; ?>projects/add">Utwórz nowy projekt</a>
			<a class="btn btn-red btn-share" id="query_button" href="<?php echo ROOT_URL; ?>">Powrót</a>
		</div>

		<?php
		foreach($viewmodel as $row): ?>
			<div class="well text-left ">
				<h4><?php echo"$row[ProjectName]";?></h4>

				
				<form style ='display:inline-block;' action="<?php echo ROOT_PATH; ?>projects/edit" method="post">
					<input type="hidden" name="projectID" value="<?php echo"$row[ProjectID]";?>" >
					<input type="hidden" name="projectName" value="<?php echo"$row[ProjectName]";?>" >
					<input class="btn btn-success" name="submit" type="submit" value="Zarządzaj" />
				</form>
				

				
				<form style ='display:inline-block;' action="<?php echo ROOT_PATH; ?>projects/deleteProject" method="post">
					<input type="hidden" name="projectID" value="<?php echo"$row[ProjectID]";?>" >
					<input type="hidden" name="projectName" value="<?php echo"$row[ProjectName]";?>" >
					<input class="btn btn-red" name="submit" type="submit" value="Skasuj" />
				</form>
				

			
			</div>

		<?php endforeach;?>


	<?php endif;?>

	</div>
</div>
</div>