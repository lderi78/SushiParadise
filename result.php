<?php
$errors = [];

if ($_POST){
    //var_dump($_POST);
    // Efface les espaces inutiles
    //$data =array_map('trim',$_POST);
}

//echo "Les données suivantes seront envoyées au backend:";

$cName = $_POST['customerName'];
$cSeats = $_POST['customerSeats'];
$cPhone = $_POST['customerPhone'];
$cDate = $_POST['customerDate'];
$tDate = explode("-",$cDate);
$dateFr = $tDate[2]."/".$tDate[1]."/".$tDate[0];
//var_dump($dConv);




// echo "$cName    $cSeats   $cPhone    $cDate  ";
// var_dump($cDate);

//exit();

?>

<!DOCTYPE html>

<html>
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link href="css/stylereservation.css" rel="stylesheet" type="text/css" />
   <title>Sushi Paradise - Reservation</title>
 </head>
 <body>


  <header>
      <nav>
        <h1>SUSHI PARADISE   寿司パラダイス</h1>
            <ul>
            <li><a href="./index.html">Home</a></li></li>
            <li><a href="/menu.html">Menu</a></li>
            <li><a href="/boisson.html">Boisson</a></li>
            <li><a href="./reservation.html">Reservation</a></li>
            <li><a href="/contact.html">Contact</a></li>
          </ul>
      </nav>
  </header>


  <main>
  <section class="section1" id="id1">
    <h1>A PROPOS DE VOTRE RESERVATION:</h1>
  </section>

  <section class="section2" id="id2" >
    <div>
      
<!-- CONTENU DU RAPPORT ICI  -->

<p>Cher Client,
votre reservation pour une table de <?=$cSeats?> persone(s)
a bien été prise en compte sous le nom de <?=$cName?><br/><br/>
Nous vous invitons à vous présenter le <?=$dateFr?>
 à l'acceuil du restaurant <br/> .
</p>
    </div>
  </section>

  <section class="section3" id="id3">
  <div><p>INVITEZ LE JAPON CHEZ VOUS GRACE A NOS PLATS...</p></div>
  <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget massa et justo volutpat euismod. Aliquam id tellus mi. Curabitur vel velit mauris.</p></div>
  </section>

  <footer><p> ALL RIGHT RESERVED</p></footer>

  <script src="script2.js"></script>
  </main>
 </body>
</html>

