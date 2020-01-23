<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="text" name="url">

	<input type="submit" name="submit">
	<?php
if(isset($_POST['submit']))  : ?>
       
    
      <iframe src="<?php $_POST["url"]; ?>" style="border:none;"></iframe>
      
       <?php endif; ?> 
	
</body>
</html>

<iframe src="<?php echo $idtest; ?>" style="border:none;"></iframe>


 <iframe src="<?php $_POST["url"]; ?>" style="border:none;"></iframe>