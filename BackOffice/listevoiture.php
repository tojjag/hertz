<?php require_once('controller/ctrl-login-int.php') ?>
<?php require_once('controller/ctrl-list-voiture.php'); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Seartz
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="ajoutvoiture.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Ajout Voiture</p>
                    </a>
                </li> 
				 <li class="active">
                    <a href="listevoiture.php">
                        <i class="pe-7s-car"></i>
                        <p>Liste Voitures</p>
                    </a>
                </li>
              
				<li>
                    <a href="ajoutagence.php">
                        <i class="pe-7s-culture"></i>
                        <p>Liste et Ajout Agence</p>
                    </a>
                </li>	
				
				<li>
                    <a href="listelocations.php">
                        <i class="pe-7s-date"></i>
                        <p>Liste des locations</p>
                    </a>
                </li>
               
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Table List</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="controller/ctrl-disconnect.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Liste des Voitures disponibles</h4>
                                <p class="category"></p>
                            </div>
							
							
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Nom</th>
                                    	<th>Prix Unitaire</th>
                                    	<th>Catégorie</th>
                                    	<th>Sous-Catégorie</th>
                                    	<th>Date de l'ajout</th>
                                    	<th>Nombre de Place</th>
                                    	<th>Kilometre</th>
                                    	
                                    </thead>
                                    <tbody>
									<?php for($i=0;$i<count($voitures);$i++){ ?>
                                        <tr>                                        	
                                        	<td><?php echo $voitures[$i]["ID"] ?></td>
                                        	<td><?php echo $voitures[$i]["nom"] ?></td>
                                        	<td><?php echo $voitures[$i]["pu"] ?></td>
                                        	<td><?php echo $voitures[$i]["idCategorie"] ?></td>
                                        	<td><?php echo $voitures[$i]["idSousCategorie"] ?></td>
                                        	<td><?php echo $voitures[$i]["datyAjout"] ?></td>
                                        	<td><?php echo $voitures[$i]["place"] ?></td>
                                        	<td><?php echo $voitures[$i]["kilometre"] ?></td>                                        	
                                        	<td> <a href="delete.php"><i class="pe-7s-trash"></i></a></td>                                        	
                                        	<td> <a href="update.php"><i class="pe-7s-refresh"></i></a></td>                                      	
                                        </tr>
									<?php } ?>
                                    </tbody>
                                </table>

                            </div>
							
							
							
							
                        </div>
                    </div>




                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>
