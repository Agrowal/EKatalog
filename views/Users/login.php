<div class="section section-breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Login</h1>
          </div>
        </div>
      </div>
</div>

<div class="section">
  <div class="container">
  
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Logowanie</h3>
      </div>
      <div class="panel-body">

        <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control"/>
          </div>

          <div class="form-group">
            <label>Hasło</label>
            <input type="password" name="password" class="form-control"/>
          </div>

          <input class="btn btn-primary" name="submit" type="submit" value="Zaloguj" />

        </form>

      </div>
    </div>

  </div>
</div>