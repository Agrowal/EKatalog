<div class="section section-breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Wyszukiwanie</h1>
          </div>
        </div>
      </div>
</div>


<div class="section">
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Przeszukaj bazę!</h3>
      </div>
      
      <?php
      require(dirname(__FILE__)."/../browseForm.php");
      ?>

    </div>

    <div>

     <?php   $post=filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      if($post['searchSubmit']):

        // echo "<pre>";
        // print_r($_POST);
        // print_r($viewmodel);
        // echo "</pre>";

        if(!$viewmodel): echo '<div class="well"><h3>BRAK DANYCH</h3></div>';
        else:
          foreach($viewmodel as $item): ?>
            <div class="well">
              <div class="row ">
                <div class="col-md-8">
                  <h2><?php echo $item['GatunekNazwaPL']; ?></h2>
                  <p><i><?php echo $item['GatunekNazwaLAT']; ?></i></p>
                  <hr/>
                  <p>
                  <b>Typ:</b> <?php echo $item['GatunekTyp']; ?>          <br/>
                  <b>Strefa:</b> <?php echo $item['GatunekStrefa']; ?>      <br/>
                  <b>Ekspozycja:</b> <?php echo $item['GatunekEkspozycja']; ?>  <br/>
                  <b>Rozmiar:</b> <?php echo $item['GatunekRozmiar']; ?> m      <br/>
                  <?php echo $item['GatunekOpis']; ?>           <br/>
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
            <?php 
          endforeach;
        endif;
      endif; ?> 

    </div>
  </div>
</div>

