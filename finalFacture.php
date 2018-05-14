<?php
   	session_start();
    require_once('inc/model.php');
    require_once('inc/panier_model.php');

    
    if(!isset($_SESSION['username'])){
        header('Location: login.php');
    }
    date_default_timezone_set('UTC'); 
    $daty = date("Y-m-d") ;
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<title>Facture</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body class="animsition">
    <?php 
        require('header.php');
    ?>


    <div class="container">
        <h1 style="color:darksblue"><b>Devis du facturation</b></h1>
        <h2>Livre à l'agence</h2>          
        <table class="table">
            <thead>
            <tr>
                <th><b>FACTURE &Agrave;</b></th>
                <th><b>ENVOYER &Agrave;</b></th>
                <th><b>DATE</b></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>John</td>
                <td>John Doe</td>
                <td>17-02-18</td>
            </tr>
            <tr>
                <td>2 Court Square</td>
                <td>684 Levington</td>
                <td>17-02-18</td>
            </tr>
            <tr>
                <td>New york</td>
                <td>On Floor</td>
                <td>17-02-18</td>
            </tr>
            </tbody>
        </table>
    </div>
    
    <hr/>
    <div class="container">
        <h2>Facture</h2>
        <p>The .table-bordered class adds borders to a table:</p>            
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>D&Eacute;SIGNATION</th>
                <th>DATE D&Eacute;BUT</th>
                <th>DATE FIN</th>
                <th>PRIX UNITAIRE/jour(s)</th>
                <th>MONTANT HT</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>WOLKS WAGEN</td>
                <td>17-02-18</td>
                <td>20-02-18</td>
                <td>125$</td>
                <td>100$</td>
            </tr>
            <tr>
                <td>WOLKS WAGEN</td>
                <td>17-02-18</td>
                <td>20-02-18</td>
                <td>100$</td>
                <td>100$</td>
            </tr>
            <tr>
                <td>WOLKS WAGEN</td>
                <td>17-02-18</td>
                <td>20-02-18</td>
                <td>150$</td>
                <td>150$</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><b>TOTAL</b></td>
                <td>525,65$</td>
            </tr>
            </tbody>
        </table>
    </div>
  
 	<!-- Footer -->
     <?php require("footer.php"); ?>
	<!-- End Footer -->
</body>
</html>