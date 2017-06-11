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
<html lang="pl">

	<?php
	include 'include/header.php';
	?>

<body>

    <?php
	include 'include/navbar-logged.php';
	?>

    <div class="container">

        <div class="row">
		
			<div class="col-ls-2">
				<div class="signin-form">
					<div class="container">
						<div class="alert alert-success">
							<button class='close' data-dismiss='alert'>&times;</button>
							<strong>Sukces!</strong> Pomyślnie zalogowano.
						</div>
					</div>
				</div>
			</div>
		
            <div class="col-ls-10">
			
                <h2>Sprawdź dostępność domeny</h2>
				
				<div class="form-signin">
				
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Podaj domenę" id="domain"/><form action="...">
                            <select id="suffix">
                                <option>chartowo.pl</option>
                                <option>winogrady.eu</option>
                            </select>
                        </form>
					</div>
					
					<hr />
					
					<span id="domain-info"></span>
					
					<div class="form-group">
						<br>
						<button type="submit" class="btn btn-default" name="btn-login" id="sprawdz" >
							<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sprawdź &nbsp;
						</button> 
					</div> 
					
				</div>
				
            </div>
			
        </div>

        <!-- Footer -->
		
        <?php
		include 'include/footer.php';
		?>

    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- Domain checker -->
	<script type="text/javascript" src="js/check-domain.js"></script>
	
	<!-- Other -->
	<script type="text/javascript" src="js/validation.min.js"></script>
	<script type="text/javascript" src="js/logowanie.js"></script>

</body>
</html>