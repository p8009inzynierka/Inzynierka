<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li>
					<a href="javascript:;" data-toggle="collapse" data-target="#demo" style="font-size:16px"><i class="fa fa-fw fa-arrows-v"></i><span class="glyphicon glyphicon-user"></span>&nbsp;Witaj, <?php echo $row['user_name']; ?>&nbsp;<span class="caret"></span><i class="fa fa-fw fa-caret-down"></i></a>
					<ul id="demo" class="collapse" style="list-style-type: none">
						<li>
							<a href="profil.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Zobacz profil</a>
						</li>
						<li>
							<a href="#"><span class="glyphicon glyphicon-cog"></span>Ustawienia</a>
						</li>
						<li>
							<a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Wyloguj</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="zarzadzanie.php">Panel Administratora</a>
				</li>
				<li>
					<a href="zarzadzanie-domenami.php">Domeny</a>
				</li>
				<li>
					<a href="aktywnosc.php">Aktywność</a>
				</li>
				<li>
					<a href="kopia-zapasowa.php">Kopia zapasowa</a>
				</li>
				<li>
					<a href="kontakt.php">Kontakt</a>
				</li>
			</ul>
		</div>