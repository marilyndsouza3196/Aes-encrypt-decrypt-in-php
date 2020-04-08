<?php
session_start();
   if(isset($_POST["submit"])){
      $errors= array();
	$file=$_FILES["file2upload"]["name"];
	   $_SESSION["filedec"]=$file;
header("location:trial2.php");
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