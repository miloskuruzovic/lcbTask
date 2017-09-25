<nav class="navbar navbar-default navbar-fixed-bottom">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="">Lcb Task</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="Article/all">Svi Postovi</a></li>
			<li><a href="Category/all">Kategorije</a></li>
			<?php if (isset($_SESSION['user_id'])): ?>
			<li><a href="Article/create">Dodaj Post</a></li>
			<li><a href="Category/create">Dodaj Kategoriju</a></li>	
			<?php endif ?>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a><?= (isset($_SESSION['login_msg']))?$_SESSION['login_msg']:"" ?></a></li>
			<?php if (isset($_SESSION['user_id'])): ?>
				<li><a><?= $_SESSION['username'] ?></a></li>
				<li><a href="User/logout"><span class="glyphicon glyphicon-log-out"></span> Izloguj se</a></li>
			<?php else: ?>
				<li><a href="#" data-toggle="modal" data-target="#loginModal">
	      		<span class="glyphicon glyphicon-log-in"></span>
	      		Uloguj se</a></li>
	      		<li><a href="#" data-toggle="modal" data-target="#registerModal">
				<span class="glyphicon glyphicon-user"></span>
				Registruj se</a></li>
			<?php endif ?>
      		
		</ul>
	</div>
</nav>

<!-- login modal -->
<div id="loginModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Uloguj se!</h4>
		</div>
		<div class="modal-body">
			<form method="POST" action="User/login">
			<div class="form">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input id="username" type="text" class="form-control" name="username" placeholder="Username" required >
						</div>
						<br>
						<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input id="password" type="password" class="form-control" name="password" placeholder="Password" required >
						</div>
				</div>
				<hr>
				<div class="input-group">
					<input class='btn btn-default' type="submit" name="submit" value="Uloguj se" />
				</div>
			</div>
			</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		</div>
		</div>
	</div>
</div>
<!-- register modal -->
<div id="registerModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Registruj se!</h4>
		</div>
		<div class="modal-body">
			<form method="POST" action="User/register">
			<div class="form">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input id="username" type="text" class="form-control" name="username" placeholder="Username" required >
						</div>
						<br>
						<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input id="password" type="password" class="form-control" name="password" placeholder="Password" required >
						</div>
				</div>
				<hr>
				<div class="input-group">
					<input class='btn btn-default' type="submit" name="submit" value="Registruj se" />
				</div>
			</div>
			</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		</div>
		</div>
	</div>
</div>