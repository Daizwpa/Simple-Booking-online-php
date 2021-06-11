<?php 

function upload_image($File, $rediraction){
    $target_dir = "./../Storage/";
    $key = array_key_first($File);
    $target_file = $target_dir . basename($File["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($File["fileToUpload"]["tmp_name"]);
      if($check !== false) {
        $uploadOk = 1;
      } else {
        
        echo "<script>alert('File is not an image.'); window.location='".$rediraction."'</script>";
        
        $uploadOk = 0;
      }
    }
    
    // Check if file already exists
    /*if (file_exists($target_file)) {
      echo "<script>alert('Sorry, file already exists.'); window.location='".$rediraction."'</script>";

      $uploadOk = 0;
    }*/
    
    // Check file size
   /* if ($File["fileToUpload"]["size"] > 500000) {
      echo "<script>alert('Sorry, your file is too large.'); window.location='".$rediraction."'</script>";
      $uploadOk = 0;
    }*/
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "ico"
    && $imageFileType != "gif" ) {
      echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.'); window.location='".$rediraction."'</script>";
      $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "<script>alert('Sorry, your file was not uploaded'); window.location='".$rediraction."'</script>";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($File["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". htmlspecialchars( basename( $File["fileToUpload"]["name"])). " has been uploaded.";
        return $target_file;
      } else {
        echo "<script>alert('Sorry, there was an error uploading your file.!'); window.location='".$rediraction."'</script>";

      }
    }
    return "./../Storage/Not_upload_Company.jpg";
}
?>