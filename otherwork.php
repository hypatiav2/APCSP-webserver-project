<html style="background-color:black">
  <div style="display:block;margin:auto">
      <style>
        div.gallery {
          margin: 5px;
          border: 1px solid #ccc;
          float: left;
          width: 500px;
        }

        div.gallery:hover {
          border: 1px solid #777;
        }

        div.gallery img {
          width: 100%;
          height: auto;
        }

        div.desc {
          padding: 15px;
          text-align: center;
        }
        </style>
        <?php       
        $dirname = "gallery/";
        $images = glob($dirname."*.png");
        foreach($images as $image) {
          echo "<div class='gallery'><img src='".$image."'/></div>";
        }     
      ?>
  </div>
</html>