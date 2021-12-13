<?php
    $search = $_REQUEST['term'];
    if ($search == "") {
    } else {
        header("Location: search.php?term=$search");
        exit();
    }
?>
<html>
	<head>
		<title>The Gallery - CSP Project</title>
		<meta charset="UTF-8 (Without BOM)" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/main.css" />
	</head>



	<body class="homepage is-preload">
		<div id="page-wrapper">
			<!-- Header -->
				<div id="header" style="str">
          <div style="background-color:rgba(0,0,0,0.6);width:100%;position:absolute;top:0px;height:100%">
					<!-- Inner -->
						<div class="inner" style="margin:auto;top:200px;width:80%;height:fit-content;">
							<header>
                  <h1><a href="index.html" id="logo">The Gallery</a></h1>
                  <hr />
                  <div class="row">
                      <form class="col s12" method="POST" action="" accept-charset="utf-8">
                          <div class="row">
                              <div class="input-field col s6" style="100px">
                                  <input placeholder="enter an art style, era, or artist" id="search" type="text" name="term" style="width:400px;display:block;margin:auto"/>
                                  <input style="margin-top:20px" type="submit" value="Search"></input>
                              </div>
                          </div>
                      </form>
                      <p style="color:white;padding-top:20px"></p>
                  </div>
							</header>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="gallery.php">Gallery</a></li>
								<li><a href="search.php">Search Art</a></li>
							</ul>
						</nav>
        </div>
		</div>
  </body>
</html>
