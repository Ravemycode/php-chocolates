<?php
// inizializzo sessione
session_start();

// includo liberie
include 'libs/db.php';
/*include 'libs/libreria.php';*/
?>
<!DOCTYPE html>
<html>
  <head>
    <title>MV chocosite</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
  </head>
  <body>
    <?php include 'include/header.php'; ?>
    <main>
      <div class="row">
        <div class="col-md-12">
          <h1>Riepilogo ordini ricevuti</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <?php
          $ordiniTotali = recuperaOrdiniTotali();
          var_dump($ordiniTotali);
          if (count($ordiniTotali) > 0) { ?>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Data</th>
                <th>Nome cliente</th>
                <th>Cognome cliente</th>
                <th>Totale</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach($ordiniTotali as $rigaOrdine) {
              ?>
              <tr>
                <th scope="row">1</th>
                <td><?=$rigaOrdine['data']?></td>
                <td><?=$rigaOrdine['nome']?></td>
                <td><?=$rigaOrdine['cognome']?></td>
                <td><?=$rigaOrdine['totale']?></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
          <?php } ?>
        </div>
      </div>
    </main>
    <?php include 'include/footer.php'; ?>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
</html>
