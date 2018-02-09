<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); ?>
<?php element( 'header2' ); ?>

   
<body class="is-article-visible" style="background-color:#7dfb64">
		<article class = "mind2" style="background-color: #616060;">
        <?php
        if($_SESSION["user_name"]) {
        ?>
			 <div class="dropdown6"> <div class="dropbtn6" style="font-family:Times New Roman"><img id="ico" src="assets/icon/b_usrlist.png" title="Setting" />Hi!!!!<?php echo $_SESSION["user_name"] ; ?></div style="color:mediumblue;">
                          <div class="dropdown-content6">
                    <a href="?page=edit_user"><img id="ico" src="assets/icon/setting.png" title="Setting" />Setting</a>
                    <a href="?action=logout"><img id="ico" src="assets/icon/logout.png" title="Logout" /> Sign Out</a>
                             <?php
                        }
                        ?>

                            </div>
                            </div>

                     	<h1 class = "account">WELCOME TO YOUR ACCOUNT!!!</h1>
                     	<h3 style="text-align:center;font-family:Times New Roman;"> Thank for subscribing our app!!!</h3>
                        

<?php

if(isset($_POST['Submit'])){
    // code for check server side validation
    if(empty($_SESSION['my_captcha'] ) || strcasecmp($_SESSION['my_captcha'], $_POST['t1']) != 0){  
        $msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.     
    }else{// Captcha verification is Correct. Final Code Execute here!      
        $msg="<span style='color:green'>The Validation code has been matched.</span>";
    header( "Location: " . SITE_URL . "/?page=download" );  
    }
}   
?>
<h3 style="font-family:Times New Roman;text-align:center">Please Enter the Confirmation Code to continue download!!!!</h3>



<script type="text/javascript">
function reload()
{
img = document.getElementById("capt");
img.src="pages/captcha-image-adv.php?rand_number=" + Math.random();
}

</script>

</head>
<body >

<form action="" method="post">


<?php if(isset($msg)){?>
    <tr>
      <div style="text-align:center;border:1px solid white;border-radius:4px;width:350px;height:30px;background-color:white;position:absolute;left:145px; "><?php echo $msg;?></div>
    </tr>
<?php } ?>


<div style="position:relative; left:120px;top:50px;"><img src="pages/captcha-image-adv.php" id="capt" style="margin-left:25%">
<img style = "position:relative;bottom:40px;width:100px" src = "assets/images/reload.png" onClick="reload();" value="Reload image" required></div><br><br>
<input type="text" name="t1"  id="t1" required style="width:40%;margin-left:31%"><br>

<input type="submit" value ="submit" name="Submit" onclick="return validate();" style="margin-left:47%"></form>
            
		</article>
		</body>

<?php element( 'footer' ); ?>