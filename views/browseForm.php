<div class="panel-body">

  <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
    <div class="form-group">
      <label>Tabel name</label>
      <select name="table" class="form-control">
        <option value="gatunki">Gatunki</option>
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
      <label>Typ</label><br>
      <label class="checkbox-inline"><input type="checkbox" name="type1" value="Drzewo" checked>Drzewo</label>
      <label class="checkbox-inline"><input type="checkbox" name="type2" value="Bylina">Bylina</label>
      <label class="checkbox-inline"><input type="checkbox" name="type3" value="Kwiat">Kwiat</label>
    </div>

     <div class="form-group" >
      <label>Strefa</label>
      <select name="strefa" class="form-control">
        <option value="">Wszystkie</option>
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
        <option value="">Wszystkie</option>
        <option value="Słoneczna">Słoneczna</option>
        <option value="Słoneczna-Półcień">Słoneczna-Półcień</option>
        <option value="Półcień-Cień">Półcień-Cień</option>
        <option value="Cień">Cień</option>
      </select>
    </div>

    <div class="form-group">
      <label>Rozmiar [<i>m</i>]</label>
      <input type="range" name="size" id="ageInputId" value="24" min="0" max="100" class="form-control" oninput="ageOutputId.value = ageInputId.value">
      <output name="ageOutputName" id="ageOutputId">24</output>

    </div>

    <div class="form-group" >
      <label>Sortowanie</label>
      <select name="order" class="form-control">
        <option value="asc">A-Z</option>
        <option value="desc">Z-A</option>
      </select>
    </div>

    <input class="btn btn-blue" name="searchSubmit" type="submit" value="Szukaj" />
    <a class="btn btn-red" id="goBack"  href="<?php echo ROOT_PATH; ?>queries">Powrót</a>
  </form>

</div>