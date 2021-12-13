<!DOCTYPE HTML>
<html>
	<head>
		<title>The Gallery - CSP Project</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
    <?php
    $search = $_GET['term'];
    $search = str_replace(' ', '_', $search);
    $data = "";
    $data = file_get_contents('https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro&explaintext&redirects=1&titles='.$search);
    $pos = strpos($data, 'pageid');
    $endpos = strpos($data, ',"ns');
    if ($pos === false) {
        echo '';
    } else {
        $id = substr($data, $pos+8,$endpos-$pos-8);
    }
    $data = json_decode($data,true)
  ?>


	<body class="left-sidebar is-preload">
    <style>
      p {
        color:white;
        margin:20px;
        padding-right:5%;
        font-size:18px;
      }
      nav {
        background-color:rgba(0,0,0,0.7);
      }
    </style>
		<div id="page-wrapper" style="background-color:black">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.php" id="logo">Discover</a></h1>
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

			<!-- Main -->
				<div class="wrapper style1" style="overflow:hidden;margin-top:50px;margin-bottom:0px;">
          <?php 
          $link = 'https://www.metmuseum.org/art/collection/search#!?perPage=20&searchField=All&sortBy=Relevance&showOnly=withImage&q='.$search;
          echo "<iframe style='min-width:50%;max-width:3000px;height:200vh;margin:20px;margin-top:-550px;display:block;padding-left:5%;float:left' src=$link></iframe>"; ?>

          <p><?php echo $data["query"]["pages"][$id]["extract"]?></p>
          


        </div>

			<script src="assets/js/main.js"></script>

	</body>
</html>