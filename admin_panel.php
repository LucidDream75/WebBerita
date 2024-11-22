<?php
require 'connection.php';
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $desk = $_POST["deskripsi"];
  if($_FILES["image"]["error"] == 4){
    echo
    "<script> alert('Image Does Not Exist'); </script>"
    ;
  }
  else{
    $fileName = $_FILES["image"]["name"];
    $fileDesk = $_FILES["image"]["deskripsi"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    else if($fileSize > 1000000){
      echo
      "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'img/' . $newImageName);
      $query = "INSERT INTO tb_upload VALUES('', '$name', '$newImageName', '$desk')";
      mysqli_query($conn, $query);
      echo
      "
      <script>
        alert('Successfully Added');
        document.location.href = 'main.php';
      </script>
      ";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin_panel.css">
  </head>
  <body>
    <form method="post" enctype="multipart/form-data">
      <label for="name">Judul : </label>
      <input type="text" name="name" id="name" required value="">
      
      <label for="deskripsi">Deskripsi : </label>
      <input type="text" name="deskripsi" id="deskripsi" required value="">
      
      <label for="image">Tambah Gambar : </label>
      <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value=""> 
      
      <button type="submit" name="submit">Submit</button>
    </form>
    <div class="links">
      <a href="main.php">Berita</a>
      <a href="index.php">Edit Berita</a>
    </div>
  </body>
</html>