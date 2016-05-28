<div class="section section-breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Utwórz nowy projekt</h1>
          </div>
        </div>
      </div>
</div>

<?php Messages::display(); ?>

<div class="section">
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Nowy projekt!</h3>
      </div>
      <div class="panel-body">

        <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
          <div class="form-group">
            <label>Nazwa projektu</label>
            <input type="text" name="projectName" class="form-control" placeholder="Podaj nazwę swojego projektu"></input>
          </div>
          <div class="form-group">
            <label>Opis</label>
            <textarea type="text" name="projectDesc" class="form-control" placeholder="Podaj krótki opis swojego projektu"></textarea>
          </div>
          <input class="btn btn-blue" name="submit" type="submit" value="Utwórz" />
          <a class="btn btn-red"  href="<?php echo ROOT_PATH; ?>projects/index">Anuluj</a>
        </form>

      </div>
    </div>
  </div>
</div>
