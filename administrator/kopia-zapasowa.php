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
					<div class="col-lg-1">
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><img src="img/menu-toggle.png"></img></a>
                    </div>
					<div class="col-md-6">
						<h2>Sprawdź dostępność domeny</h2>
						<div class="form-signin">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Podaj domenę" id="domain" />
							</div>
							<hr />
							<span id="domain-info"></span>
							<div class="form-group">
								<br>
								<button type="submit" class="btn btn-default" name="btn-login" id="sprawdz">
									<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sprawdź &nbsp;
								</button>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<h2>Logowanie</h2>
						<div class="signin-form">
							<form class="form-signin" method="post" id="login-form">
								<div id="error"></div>
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Adres e-mail" name="user_email" id="user_email" />
									<span id="check-e"></span>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Hasło" name="password" id="password" />
								</div>
								<hr />
								<div class="form-group">
									<button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
										<span class="glyphicon glyphicon-log-in"></span> &nbsp; Zaloguj &nbsp;
									</button>
								</div>
							</form>
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