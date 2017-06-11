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
						<h1 style="text-align: center ">Zarządzanie domenami</h1>
					</div>
					<div class="col-lg-3">
					</div>
					<div class="col-md-6">
						<div class="form-signin">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Podaj domenę" id="domain" />
							</div>
							<hr />
							<span id="domain-info"></span>
						</div>
					</div>
					<div class="col-md-3">
					</div>
                    <div class="col-lg-12">
                    </div>
                    <div class="col-lg-3">
                    </div>
                    <div class="col-md-6">
                        <div class="form-signin">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Podaj e-mail - opcjonalnie przy dodawaniu/usuwaniu domeny" id="e-mail" />
                            </div>
                            <hr />
                            <span id="domain-info"></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                    </div>
					<div style="text-align: center" class="col-md-12">
						<div class="form-group">
							<br>
							<button type="submit" class="btn btn-default" name="btn-login" id="sprawdz">
								<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sprawdź &nbsp;</button>
							<button type="submit" class="btn btn-default" name="btn-login" id="dodajbaza">
								<span class="glyphicon glyphicon-plus"></span> &nbsp; Dodaj do bazy &nbsp;</button>
							<button type="submit" class="btn btn-default" name="btn-login" id="usunbaza">
								<span class="glyphicon glyphicon-minus"></span> &nbsp; Usuń z bazy &nbsp;</button>
							<button type="submit" class="btn btn-default" name="btn-login" id="dodajhome">
								<span class="glyphicon glyphicon-plus"></span> &nbsp; Dodaj do home.pl &nbsp;</button>
							<button type="submit" class="btn btn-default" name="btn-login" id="usunhome">
								<span class="glyphicon glyphicon-minus"></span> &nbsp; Usuń z home.pl &nbsp;</button>
						</div>
					</div>
                        <div class="col-md-12">
                            <h5>Sprawdź - służy do sprawdzania czy domena znajduje się w naszej bazie.</h5>
                            <h5>Dodaj do bazy - służy do dodania domeny do naszej bazy. Użyj tej opcji jeśli zarejestrowałeś już domenę w home.pl. Podaj adres e-mail użykownika do którego ma należeć domena oraz czas wygaśnięcia domeny. Czas wygaśnięcia domeny = 0 - domena ważna 100 lat. Status domeny - opłacona.</h5>
                            <h5>Usuń z bazy - służy do usuwania domeny z naszej bazy. Pola e-mail i data wygaśnięcia domeny nie są brane pod uwagę.</h5>
                            <h5>Dodaj do home.pl - dodaje domenę do bazy i przypisuje do wpisanego adresu e-mail. Oznacza domenę na opłaconą do daty wygaśnięcia domeny.</h5>
                            <h5>Usuń z home.pl - usuwa domenę z naszej bazy oraz z home.pl. Pola e-mail i data wygaśnięcia domeny nie są brane pod uwagę.</h5>
                        </div>
                    <div class="col-md-12">
                        <div class="panel-heading" style="text-align: center">Domeny Administratora</div>

                        <!-- Table -->
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Lp.</td><td>Domena</td><td>Data dodania domeny</td><td>Data wygaśnięcia domeny</td>
                            </tr>
                            <tr>
                                <td>1</td><td>sad.chartowo.pl</td><td>05-06-2017</td><td>01-01-2100</td>
                            </tr>
                            </tbody>
                        </table>

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