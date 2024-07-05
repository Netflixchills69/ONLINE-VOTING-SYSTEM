<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php";
include "connection.php";
?>

<style>
    body{
    font-family: Arial, Helvetica, sans-serif;
    background-attachment: fixed;
    background-position: center;

    .wrapper{
    width: 420px;
    background-color: rgb(13, 77, 4);
    height: 150px;
    border: 1px solid #000000;
    border-radius: 20px;
    }
}
</style>
<body background="voteback.jpg">
<center> 
    <br>
    <br> 
<div class="wrapper">
<h1> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h1>
<?php
$username = $_SESSION['SESS_NAME'];
$query = 'SELECT status FROM voters WHERE username="'.$_SESSION['SESS_NAME'].'" AND status = "VOTED"';
if ($result = mysqli_query($con,$query)) {
if (mysqli_num_rows($result) > 0) {
$sql = mysqli_query($con, 'SELECT voted from voters WHERE username="'.$_SESSION['SESS_NAME'].'"');
$row = mysqli_fetch_assoc($sql);
        echo "You have voted for: " . " " . $row['voted'];
    } else {
        echo "You have not voted yet. Please submit your vote!";
    }
}
?>
</div>
</center>
</body>