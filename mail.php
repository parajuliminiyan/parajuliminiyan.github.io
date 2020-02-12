<?php 
if(isset($_POST['Submit'])){
$to = "parajuliminiyan@gmail.com";
$name = $_POST['name'];
$subject = $_POST['subject'];
$txt = $name . $_POST['message'];
$headers = "From: ". $_POST['email'];
mail($to,$subject,$txt,$headers);
header('Location: ' . $_SERVER['HTTP_REFERER'])
}
?>
