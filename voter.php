<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<link rel="stylesheet" href="voterstyle.css">


<body background="voteback.jpg">
    <br>
<center><h1> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h1></center>
<center>
<div class="wrapper">
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<center><h2>YOUR VOTE </h2> <BR>
<input type="radio" class="radio1" name="lan" value="BJP"> BJP<BR>
<input type="radio" name="lan" class="radio1" value="INDIA ALLIANCE">INDIA ALLIANCE<BR>
<!-- <input type="radio" name="lan" value="AAP">   AAP<BR> -->
<input type="radio" name="lan" class="radio1" value="NOTA">  NOTA<BR>
<!-- <input type="radio" name="lan" value="NIRDLIY">  NIRDLIY<BR> -->
</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" class="btn" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>
</div>  
</center>  
</body>