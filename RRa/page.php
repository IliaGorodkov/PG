<?php
require_once("db.php");
if($mysqli == false){
	echo "Error!";
	echo mysqli_connect_errno();
	exit();
}
$page = $_GET['id'];
$query = mysqli_query($mysqli, "SELECT * FROM $db_table WHERE id='$page' ");
?>
<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<meta charset="utf-8">
<title>Новости</title>

</head>
<style>
	.art{border: 1px solid #787777;
	width: 1100px;
    position:absolute; top:30px; margin:0 0 0 130px;
    padding: 25px
}
</style>

<body align="justify">

<?php 
$article = mysqli_fetch_assoc($query); 
    echo '<div class="art">';
    
	echo '<h3>'.$article['title'].'</h3>'.' <a href=page.php?id='.$article['id'].'>'.'</a>';
    echo '<hr>';
    echo $article['annuonce'];
    echo $article['content'];
    echo '<hr>';
    echo '<a href="index.php"><h5>Все новости>></h5></a>';
    echo '</div>';
    echo '<div class="table">';
?>
</body>



</html>


