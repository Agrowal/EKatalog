<div class="section section-breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Dodaj nowy rekord</h1>
          </div>
        </div>
      </div>
</div>


<div class="section">
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Wpisz nową pozycję!</h3>
      </div>
      <div class="panel-body">

        <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nazwa tabeli</label>
            <select name="table" class="form-control">
              <option value="gatunki">Gatunki</option>>
            </select>
          </div>
          <div class="form-group">
            <label>Nazwa rośliny (<i>PL</i>)</label>
            <input type="text" name="namePL" class="form-control"></input>
          </div>
          <div class="form-group">
            <label>Nazwa rośliny (<i>Lat.</i>)</label>
            <input type="text" name="nameLAT" class="form-control"></input>
          </div>
          <div class="form-group" >
            <label>Typ</label>
            <select name="type" class="form-control">
              <option value="Drzewo">Drzewo</option>
              <option value="Bylina">Bylina</option>
              <option value="Kwiat">Kwiat</option>
            </select>
          </div>

          <div class="form-group" >
            <label>Strefa</label>
            <select name="strefa" class="form-control">
              <option value="4a">4a</option>
              <option value="4b">4b</option>
              <option value="4c">4c</option>
              <option value="5a">5a</option>
              <option value="5b">5b</option>
              <option value="5c">5c</option>
              <option value="6a">6a</option>
              <option value="6b">6b</option>
              <option value="6c">6c</option>
            </select>
          </div>

          <div class="form-group" >
            <label>Ekspozycja</label>
            <select name="ekspozycja" class="form-control">
              <option value="Słoneczna">Słoneczna</option>
              <option value="Słoneczna-Półcień">Słoneczna-Półcień</option>
              <option value="Półcień-Cień">Półcień-Cień</option>
              <option value="Cień">Cień</option>
            </select>
          </div>

          <div class="form-group">
            <label>Rozmiar [<i>m</i>]</label>
            <input type="number" name="size" min="0" max="100" step="1" class="form-control"></input>
          </div>

          <div class="form-group">
            <label>Opis</label>
            <textarea  name="des" class="form-control"></textarea>
          </div>

          <div class="form-group">
            <label>Obraz</label>
            <input type="file" name="fileToUpload" id="fileToUpload">
          </div>

          <input class="btn btn-blue" name="submit" type="submit" value="Zatwierdź" />
          <a class="btn btn-red"  href="<?php echo ROOT_PATH; ?>queries">Anuluj</a>
        </form>

      </div>
    </div>
  </div>
</div>
