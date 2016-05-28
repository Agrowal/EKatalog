<div class="section section-breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Rejestracja</h1>
          </div>
        </div>
      </div>
</div>

<div class="section">
  <div class="container">

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Zarejestruj nowego użytkownika</h3>
      </div>
      <div class="panel-body">

        <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" autocomplete="off" >
          <div class="form-group">
            <label>Nazwa użytkownika</label>
            <input type="text" name="name" class="form-control" placeholder="Nazwa użytkownika"
            required data-validation-required-message="Please enter your name."/>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Proszę podać aktywny adres email."
            required data-validation-required-message="Proszę podać aktywny adres email."/>
          </div>
          <div class="form-group">
            <label>Hasło</label>
            <input type="password" name="password" class="form-control" placeholder="Hasło"
            required data-validation-required-message="Proszę podać swoje hasło."/>
          </div>
          <div class="form-group">
            <label>Sprawdzenie hasła</label>
            <input type="password" name="passwordCheck" class="form-control" placeholder="Powtórz hasło"
            required data-validation-required-message="Proszę podać swoje hasło."/>
          </div>

          <input class="btn btn-primary" name="submit" type="submit" value="Zatwierdź" />

        </form>

      </div>
    </div>

  </div>
</div>
