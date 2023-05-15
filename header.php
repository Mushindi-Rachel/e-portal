<?php include('config.php');
error_reporting(0);


$email = $_SESSION['email'];
$connection;
    // Select data from table table_employee
    $sql = "SELECT * FROM userss WHERE email = '$email'";

    $result = mysqli_query($connection, $sql);

?>

<!DOCTYPE html>
<html>
<head>
<title>E-School</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/form.css">
<link rel="stylesheet" type="text/css" href="css/media.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">


<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/icon.png" rel="icon">
<link href="assets/css/style.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="scripts.js"></script>
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
<script src="js/profile.js"></script>
    <style>
        body {
    font-family: "Open Sans", sans-serif;
    height: 100%;
}
body {
    background: #FFFFFF;
    height: 100%;
}
img {
    max-width: 100%;
}
ul {
    list-style: none;
    margin: 0;
    padding: 0;
}
a {
    text-decoration: none;
}
#header {
    float: left;
    width: 100%;
    background: #ffffff;
    position: relative;
}
.white-label {
    float: left;
    background: #33373B;
    max-width: 210px;
    padding: 10px;
    min-height: 44px;
    background: #279BE4;
    width: 100%;
    max-height: 44px;
}
.white-label img {
    max-height: 43px;
}
#sidebar {
    overflow: hidden;
    width: 210px;
    height: 100%;
    float: left;
    background: #2A2D33;
}
#sidebar-nav {
    width: 100%;
    height: 100%;
    padding: 0;
    background: #2A2D33;
    border-right: 1px solid #E0E0E0;
    overflow-y: scroll;
    background-attachment: fixed;
}
#sidebar-nav h2 {
    color: #60636B;
    float: left;
    width: 100%;
    font-size: 0.8em;
    font-family: "Open Sans", sans-serif;
    font-weight: 600;
    text-transform: uppercase;
    padding: 3px 0 2px 20px;
    border-top: 1px solid #4D4C4C;
    box-sizing: border-box;
    margin: 10px 0;
}
#sidebar-nav ul {
}
#sidebar-nav ul li {
}
#sidebar-nav ul li a {
    color: #C2C2C2;
    font-size: 0.95em;
    padding: 15px 20px;
    display: block;
    float: left;
    width: 100%;
    font-weight: 600;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
#sidebar-nav ul li:hover a,
#sidebar-nav ul li:hover a i,
#sidebar-nav li.active a,
#sidebar-nav li.active a i {
    color: #333;
}
#sidebar-nav ul li:hover a {
    background: #fff;
    color: #333;
}
#sidebar-nav ul li.active a {
    background: #fff;
    color: #333;


}

#sidebar-nav i {
    padding-right: 8px;
    font-size: 1.3em;
    color: #60636B;
    width: 25px;
    text-align: center;
    
}


.butn{
    color: white;
    background-color: #0ebc7f;
    font-size: 1rem;
    font-weight: bold;
    padding: 30px;
    border: none;
    width: 15%;
    padding-bottom: 50px;
    height: 10px;
}

#sidebar a.active {
    background: #fff;
    color: black;
}

@media (max-width: 768px) {
    .cd-main-header {
        position: fixed;
        height: 55px;
    }


.cd-logo {
    float: left;
    display: block;
    margin-left: 1%;
    margin-top: 0px;
    
}
  
  section{
    padding-top: 100px;
  }

  .menu li {
    margin: 20px 0;
  }

}


</style>
</head>
<body>

<header class="cd-main-header">
		<a href="profile.php" class="cd-logo"><img src="images/logoE.png" alt="Logo"></a>
					<div class=".nav-profile-name">
                        <i>
                            <?php
                        while($row = $result->fetch_object()){
                echo '<tr>'
                .'<td>'.$row->name.'</td>'.
                '</tr>';}
                ?>
                    </i>
                    </div>
                    <div class="sliding-out links">
                        <li>
                        <a href="settings.php">Edit Account</a>
                    </li>
                    </div>
						<div class="register-user">
				<a id="login" href="logout.php">Logout</a>
			</div>
			</ul>
		</nav>
	</header> <!-- .cd-main-header -->

<section id="sidebar">

<div id="sidebar-nav">
<ul>
<li ><i class="fa fa-dashboard"></i> Dashboard</li>
<main class="cd-main-content">
		<nav class="cd-side-nav">
    
			<ul class="menu"><li>
					<a href="info.php" class="nav-link"><i class="perm_identity"></i>Profile</a>
				</li>
                <ul>

<li><a href="announcements.php" class="nav-link"><i class="fa fa-list-alt"></i> Announcements</a></li>
</ul>
<ul>
<li><a href="feestructure.php" class="nav-link"><i class="fa fa-dollar"></i> Fee Structure</a></li>
<li><a href="results.php" class="nav-link"><i class="fa fa-download"></i> Results</a></li>
<li><a href="report.php" class="nav-link"><i class="fa fa-book"></i>Report</a></li>
</ul>

</ul>
        </nav>
</div>
</section>
<script>
    const links = document.querySelectorAll('.nav-link');

links.forEach(link => {
  link.addEventListener('click', function() {
    links.forEach(link => link.classList.remove('active'));
    this.classList.add('active');
    localStorage.setItem('activeLink', this.getAttribute('href'));
  });

  const activeLink = localStorage.getItem('activeLink');
  if (link.getAttribute('href') === activeLink) {
    link.classList.add('active');
  }
});
    </script>
</body>
</html>