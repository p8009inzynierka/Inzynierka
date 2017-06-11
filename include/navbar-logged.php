<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<ul class="nav navbar-right top-nav">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Witaj <?php echo $row['user_name']; ?>!<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li>
						<a href="#"><i class="fa fa-fw fa-user"></i> Profil</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-fw fa-envelope"></i> Wiadomości</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-fw fa-gear"></i> Ustawienia</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Wyloguj</a>
					</li>
				</ul>
			</li>
		</ul>
	</nav>