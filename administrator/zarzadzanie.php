<?php
session_start();

if(!isset($_SESSION['user_session']))
{
	header("Location: index.php");
}

include_once 'dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pl-PL">
<?php
include 'include/header.php';
?>

<body>

    <div id="wrapper">
        <?php
		include 'include/menu.php';
		?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2">
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><img src="img/menu-toggle.png"></img></a>
                    </div>
                    <div class="col-lg-8">
                        <h1 style="text-align: center ">Panel Administratora</h1>
                    </div>
                    <div class="col-lg-2">

                    </div>
                    <div class="col-lg-4">

						
                        <div style="width:100%;">
							<canvas id="canvas" width="100%" height="100%"></canvas>
						</div>

                    </div>
                    <div class="col-lg-4">

                        <canvas id="chart-area" style="display: block; " width="100%" height="100%">
                        </canvas>

                        <script src="js/pie.js"></script>

                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="glyphicon glyphicon-time"></i> Ostatnie zdarzenia</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <span class="badge">teraz</span>
                                        <i class="glyphicon glyphicon-euro"></i> Odnotowano płatność
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">2 minuty temu</span>
                                        <i class="glyphicon glyphicon-plus"></i> Kupiono domenę
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">23 minuty temu</span>
                                        <i class="glyphicon glyphicon-user"></i> Dodano nowego użytkownika
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">46 minuty temu</span>
                                        <i class="glyphicon glyphicon-plus"></i> Kupiono domenę
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1 godzina temu</span>
                                        <i class="glyphicon glyphicon-ok"></i> Wykonano automatyczny backup
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">2 godziny temu</span>
                                        <i class="glyphicon glyphicon-user"></i> Dodano nowego użytkownika
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">wczoraj</span>
                                        <i class="glyphicon glyphicon-minus"></i> Usunięto domenę
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">wczoraj</span>
                                        <i class="glyphicon glyphicon-remove"></i> Domena nieopłacona
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">Pokaż całą aktywność <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <!-- Default panel contents -->
                            <div class="panel-heading" style="text-align: center">Ostatnio zarejestrowane domeny</div>

                            <!-- Table -->
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Lp.</td><td>Domena</td><td>Użytkownik</td><td>Adres e-mail</td>
                                </tr>
                                <tr>
                                    <td>1</td><td>sad.chartowo.pl</td><td>maniek123</td><td>maniek123@o2.pl</td>
                                </tr>
                                <tr>
                                    <td>2</td><td>remonty.eu.pl</td><td>domdlaciebie</td><td>domdlaciebie@wp.pl</td>
                                </tr>
                                <tr>
                                    <td>3</td><td>rtv.suchylas.pl</td><td>rtveuroagd</td><td>rtveuroagd@rtv.pl</td>
                                </tr>
                                <tr>
                                    <td>4</td><td>blank</td><td>blank</td><td>blank</td>
                                </tr>
                                <tr>
                                    <td>5</td><td>blank</td><td>blank</td><td>blank</td>
                                </tr>
                                <tr>
                                    <td>6</td><td>blank</td><td>blank</td><td>blank</td>
                                </tr>
                                <tr>
                                    <td>7</td><td>blank</td><td>blank</td><td>blank</td>
                                </tr>
                                <tr>
                                    <td>8</td><td>blank</td><td>blank</td><td>blank</td>
                                </tr>
                                <tr>
                                    <td>9</td><td>blank</td><td>blank</td><td>blank</td>
                                </tr>
                                <tr>
                                    <td>10</td><td>blank</td><td>blank</td><td>blank</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>
</html>