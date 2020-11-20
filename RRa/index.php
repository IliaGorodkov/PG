<!DOCTYPE html>
<html>
<head >
<link rel="stylesheet" href="style.css">
<title>
Новости
</title>
<h1 ><div align="left" >Новости</div></h1>
<hr>
</head >
<link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<body >
<?php
require_once("db.php");

$link = mysqli_connect($db_host,$db_user,$db_password,$db_base);
$rrrt = 8;// количество записей
$query = mysqli_query($link, "SELECT * FROM $db_table  LIMIT $rrrt");// LIMIT 0,10 (``)
$page = isset($_GET['page']) ? mysqli_real_escape_string($link,$_GET['page']) : 1;



if ("<a href=\"?page=$i\"> $i </a>"){
    $query = mysqli_query($link, "SELECT * FROM $db_table  LIMIT $rrrt");
    if(mysqli_num_rows($query) == 0){
        echo "There are no records!";
    }	else {
    while($article = mysqli_fetch_assoc($query)){
        echo '<div class="art">';
        echo '08.08.2020'.' '.'  <a href=page.php?id='.$article['id'].'>'.$article['title'].$article[''].'</a><br>';
        echo $article['announce'].'<br>';
        echo $article['text'].'<br>';
        echo '</div>';   
        
     }
    }
}


if ("<a href=ctranica.php>Страница 2 </a> "){
    

}

?>

<hr>
<a href="" title="Вернуться наверх" class="topbutton"></a>
<a href="ctranica.php">Страница 2 </a> 
</body>
</html>

