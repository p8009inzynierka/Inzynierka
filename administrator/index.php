<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="author" content="Mariusz Kubiak, Kamil Gołuszko, Krzysztof Miłaszewski">

    <title>Zarządzanie</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/admin.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div id="wrapper">
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
					<div class="col-lg-4"></div>
                    <div class="col-lg-4" style="border: 2px solid #000; border-radius: 5px">
                        <h2 style="text-align:center">Logowanie</h2>
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
					<div class="col-lg-4"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- Other -->
	<script type="text/javascript" src="js/validation.min.js"></script>
	<script type="text/javascript" src="js/logowanie.js"></script>

</body>
</html>