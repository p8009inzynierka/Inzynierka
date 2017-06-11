<!DOCTYPE html>
<html lang="pl">

	<?php
	
	include 'include/header.php';
	
	?>

<body>

    <?php
	
	include 'include/navbar.php';
	
	?>

    <div class="container">

        <div class="row">
		
            <div class="col-md-6">
			
                <h2>Sprawdź dostępność domeny</h2>
				
				<div class="form-signin">
				
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Podaj domenę" id="domain"/><form action="...">
                            <select id="suffix">
								<option>eu.pl</option>
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
			
            <div class="col-md-6">
			
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