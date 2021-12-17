<!DOCTYPE HTML>
<html>
	<head>
		<title>The Gallery - CSP Project</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/main.css" />
	</head>

	<body class="left-sidebar is-preload">
		<div id="page-wrapper" style="background-color:black">

			<!-- Header -->
        <div id="header">

                <!-- Inner -->
                    <div class="inner">
                        <header>
                            <h1><a href="index.php" id="logo">Gallery</a></h1>
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
            <form id="myform" action="gallery.php" method="post" enctype="multipart/form-data" style="float:right;margin:0;padding:0;position:relative;right:55px;top:200px">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload to Gallery" name="submit" style="height:60px;text-align:center;padding:1px;text-wrap:wrap;width:130px">
            </form>

            <div id="newcanvas" style="width:60%;margin:auto;display:block">
              
            </div>




            <style>
              button, input {
                width: 100px;
                height: 40px;
                padding:2px;
                font-size:16px;
              }
            </style>
        </div>
    </div>


<?php
$target_dir = "gallery/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  }
}
?>
    
    <!--- Scripts -->
        <script src="assets/script.js"></script>
        <script src="assets/canvas.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/p5.js"></script>
	</body>
</html>