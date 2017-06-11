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
		
            <div class="col-md-4">
                <div class="signin-form">
					<form class="form-signin" method="post" id="register-form">
					  
						<h2 class="form-signin-heading">Rejestracja</h2><hr />
						
						<div id="error"></div>
						
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Nazwa użytkownika" name="user_name" id="user_name" />
						</div>
						
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Adres e-mail" name="user_email" id="user_email" />
							<span id="check-e"></span>
						</div>
						
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Hasło" name="password" id="password" />
						</div>
						
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Potwierdź hasło" name="cpassword" id="cpassword" />
						</div>
						
						<hr />
						
						<div class="form-group">
							<button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
								<span class="glyphicon glyphicon-log-in"></span> &nbsp; Zarejestruj
							</button> 
						</div>  
					  
					</form>
				</div>
            </div>
			
			<div class="col-md-8">
                <img id="image-domain" class="img-responsive img-rounded" src="img/rejestracja.png" alt="">
            </div>
			
        </div>

        <!-- Footer -->
		
        <?php
		
		include 'include/footer.php';
		
		?>

    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
	
	<!-- Other -->
	<script type="text/javascript" src="js/validation.min.js"></script>
	<script type="text/javascript" src="js/rejestracja.js"></script>
	
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>