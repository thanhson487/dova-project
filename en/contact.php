<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	

<?php 

// $dbc=mysqli_connect('localhost','root','','dov54078_test');
$dbc=mysqli_connect('localhost','dov54_test','Zt52@k8p','dov54078_test');
if(!$dbc){
echo "kết nối không thành công";
}
else{
mysqli_set_charset($dbc,'utf8');
}
$name = $email = $phone = $enquiry = "";
if(isset($_POST['contact']))
{
	$error=array();
	if(empty($_POST['name']))
	{
		$error[]='name';
	}
	else
	{
		$name=$_POST['name'];
	}
	if(empty($_POST['email']))
	{
		$error[]='email';
	}
	else
	{
		$email=$_POST['email'];
	}
	if(empty($_POST['phone']))
	{
		$error[]='phone';
	}
	else
	{
		$phone=$_POST['phone'];
	}
	if(empty($_POST['enquiry']))
	{
		$error[]='enquiry';
	}
	else
	{
		$enquiry=$_POST['enquiry'];
	}
	if (empty($error)) {
		$sql  = "INSERT INTO contact (name, email, phone, enquiry) VALUES ('$name', '$email', '$phone', '$enquiry')";
		mysqli_query($dbc,$sql);
		 $message = "Submit request successfully.<br> We will contact you soon";
		$type = "success";
		?>
		<script language="javascript" type="text/javascript">
     		$(window).load(function() {
     		$('#contact').show();
  			});
		</script>
		<?php 
	}
	else{
		$message = "";
		$type = "fail";
		
	} 
}
mysqli_close($dbc);


?>

<?php
if (! empty($message)) {
	require_once "index.php";
?>
	<script>
		$(function() { $("HTML, BODY").animate({ scrollTop: 9999 }, 1000); }); 
	</script>
<?php	
	}
	else{  require_once "index.php";
?>
		<script> $(function() { $("HTML, BODY").animate({ scrollTop: 9999 }, 1000); }); 
		</script>
<?php
}
?>

</body>
</html>

