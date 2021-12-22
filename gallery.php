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
                           

            <form id="myform" action="gallery.php" method="post" enctype="multipart/form-data" style="float:right;margin:0;padding:0;position:relative;right:8%;top:160px;width:100px">
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
    $files = scandir('gallery', SCANDIR_SORT_DESCENDING);
    $newest_file = $files[0];
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if file already exists
    $target_file = $target_dir . strval(intval(substr($newest_file, 0, 1))+1) . substr(basename($_FILES["fileToUpload"]["name"]),1);

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
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

  <section>
  <iframe onload='javascript:(function(o){o.style.height=o.contentWindow.document.body.scrollHeight+"px";}(this));' style="height:200px;width:100%;border:none;overflow:hidden;" width="100%" src="otherwork.php" title="description"></iframe>
  </section>

  <!--- Scripts -->
        <script src="assets/script.js"></script>
        <script src="assets/canvas.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/p5.js"></script>
	</body>
</html>