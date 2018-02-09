
<?Php
session_start();
?>

<?Php

if($_GET['t1'] == $_SESSION['my_captcha']){
echo "Captcha validation passed ";
}else {
echo "Captcha validation failed ";
}
unset($_SESSION['my_captcha']);

?>

