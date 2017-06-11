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
						<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><img src="img/menu-toggle.png"></img>
						</a>
					</div>
					<div class="col-lg-8">
						<h1 style="text-align: center ">Aktywność</h1>
					</div>
					<div class="col-lg-2">
					</div>
					<div class="col-lg-12">
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
									<a href="#" class="list-group-item">
										<span class="badge">2 dni temu</span>
										<i class="glyphicon glyphicon-euro"></i> Odnotowano płatność
									</a>
									<a href="#" class="list-group-item">
										<span class="badge">2 dni temu</span>
										<i class="glyphicon glyphicon-plus"></i> Kupiono domenę
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12" style="text-align: center ">
						<a href="#"><i class="glyphicon glyphicon-arrow-left">&nbsp;&nbsp;&nbsp;&nbsp;</i></a>
						<a href="#"><i class="glyphicon glyphicon-arrow-right"></i></a>
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