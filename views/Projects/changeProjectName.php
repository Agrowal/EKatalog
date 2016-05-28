<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Edytuj projekt</h1>
					</div>
				</div>
			</div>
</div>

<div class="section">
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Zmień nazwę projektu: <?php echo $_SESSION['active_projectName'] ?></h3>
      </div>
      <div class="panel-body">

        <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
          <div class="form-group">
            <label>Nowa nazwa projektu</label>
            <input type="text" name="projectNewName" class="form-control" placeholder="Podaj nową nazwę swojego projektu"></input>
          </div>
          <input class="btn btn-blue" name="submit" type="submit" value="Zmień" />
          <a class="btn btn-red"  href="<?php echo ROOT_PATH; ?>projects/edit">Anuluj</a>
        </form>

      </div>
    </div>
  </div>
</div>