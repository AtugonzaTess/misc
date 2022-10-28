	<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top">
      <div class="container">
      <a class="navbar-brand" href="<?php echo ROOT_URL; ?>" style="padding-left:300px;color:black; font-size:20px;">DRUG INVENTORY MANAGEMENT SYSTEM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
			<!-- <li class="nav-item">
				<form class="form-inline" action="/action_page.php">
					<input class="form-control col-md-8 mr-sm-2" type="text" placeholder="Search"
					<button class="btn btn-success" type="submit">Search</button>
				</form>
			</li> -->
			<li class="nav-item" style="background-color:#FED000; border-radius: 10px;">
				<span class="nav-link" style="color:black">Welcome <?php echo $_SESSION['fullName']; ?></span>
            </li>
			<li class="nav-item">
				<span class="nav-link"> | </span>
            </li>
			<li class="nav-item" style="background-color:#000000; border-radius: 10px;">
				<a class="nav-link" href="model/login/logout.php" style="color:white;">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>