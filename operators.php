<?php include 'footer.php' ?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Operatori</title>
 <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <style>
    * {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}
.row {margin: 0 -5px;}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
    </style>
  </head>
  <body>

<div class="row">
    <div class="column">
        <div class="card">Operator za nastavljanje nizova(.)<br>Primjer: $ime = 'PHP'<br> echo 'Ovo je ' .$ime . 'tecaj';<br><br>Rezultat: <?php $ime=' PHP '; echo 'Ovo je'.$ime.'Tecaj'; ?></div>
    </div>
  <div class="column">
        <div class="card">Operator automatskog povećavanja<br>Primjer: $a = 1; $a++;<br><br>Rezultat: <?php $a = 1; $a++; echo $a; ?></div>
  </div>
  <div class="column">
        <div class="card">Operator automatskog smanjivanja<br>Primjer: $a = 1; $a--;<br><br>Rezultat: <?php $a = 1; $a--; echo $a; ?></div>
  </div>
  <div class="column">
        <div class="card">Zbrajanje<br>Primjer: $a = 2; $b = 2;<br>$a + $b<br><br><?= 2+2 ?></div>
  </div>
  <div class="column">
        <div class="card">Oduzimanje<br>Primjer: $a = 2; $b = 2;<br>$a - $b<br><br><?= 2-2 ?></div>
  </div>
  <div class="column">
        <div class="card">Množenje<br>Primjer: $a = 2; $b = 2;<br>$a * $b<br><br><?= 2*2 ?></div>
  </div>
  <div class="column">
        <div class="card">Dijeljenje<br>Primjer: $a = 2; $b = 2;<br>$a / $b<br><br><?= 2/2 ?></div>
  </div>
  <div class="column">
        <div class="card">Potenciranje<br>Primjer: $a = 2; $b = 2;<br>$a ** $b<br><br><?= 2**2 ?></div>
  </div>
    <div class="column">
          <div class="card">Modul<br>Primjer: $a = 2; $b = 2;<br>$a % $b<br><br><?= 2%2 ?></div>
    </div>
    <div class="column">
        <div class="card">Jednakost<br>Primjer: $a = 2; $b = 2;<br>$a == $b<br><br><?= 2 == 2 ? "true" : "false" ?></div>
  </div>
  <div class="column">
        <div class="card">Nejednakost<br>Primjer: $a = 2; $b = 2;<br>$a == $b<br><br><?= 2 !== 2 ? "true" : "false" ?></div>
  </div>
  <div class="column">
        <div class="card">Usporedba<br>Primjer: $a = 2; $b = 2;<br>$a > $b<br><br><?= 2 !== 2 ? "true" : "false" ?></div>
  </div>

</div>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>



