<?php include('config.php');
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
    width: 106%;
    height: calc(100% - 95px);
    padding: 0;
    background: #2A2D33;
    border-right: 1px solid #E0E0E0;
    overflow-y: scroll;
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
#sidebar-nav li a:active{
    background: white;

}
#sidebar-nav ul li.active a i {
    background: #fff;
}
#sidebar-nav i {
    padding-right: 8px;
    font-size: 1.3em;
    color: #60636B;
    width: 25px;
    text-align: center;
    
}

</style>
</head>
<body>

<header class="cd-main-header">
		<a href="profile.php" class="cd-logo"><img src="images/logoE.png" alt="Logo"></a>
					<div class=".nav-profile-name">
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
<div class="white-label">
</div>
<div id="sidebar-nav">
<ul>
<li class="active"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
<main class="cd-main-content">
		<nav class="cd-side-nav">
			<ul><li>
					<a href="info.php"><i class="perm_identity"></i>Profile</a>
				</li>
                <ul>
<li><a href="messages.php"><i class="fas fa-comment-dots"></i> Messages</a></li>
<li><a href="announcements.php"><i class="fa fa-list-alt"></i> Announcements</a></li>
</ul>
<ul>
<li><a href="feestructure.php"><i class="fa fa-dollar"></i> Fee Structure</a></li>
<li><a href="results.php"><i class="fa fa-download"></i> Results</a></li>
<li><a href="report.php"><i class="fa fa-book"></i>Report</a></li>
</ul>

</ul>
</div>
</section>
</body>
</html>