<?php
session_start();
   if(isset($_POST["submit"])){
      $errors= array();
	$file=$_FILES["file2upload"]["name"];
	   $_SESSION["file"]=$file;
header("location:trial.php");
//echo $file;
//echo $file;
}
?>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="file2upload" id="file2upload" />
         <input type="submit" name="submit"/>
      </form>
      
   </body>
</html>