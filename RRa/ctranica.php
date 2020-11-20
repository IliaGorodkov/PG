<link rel="stylesheet" href="style.css">
<link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<h2>Страница 2</h2>
<?php
require_once("db.php");
$mysqli = mysqli_connect($db_host,$db_user,$db_password,$db_base);


$link = mysqli_connect($db_host,$db_user,$db_password,$db_base);


$query = mysqli_query($link, "SELECT * FROM $db_table  LIMIT 6,8");
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

?>
<a href="" title="Вернуться наверх" class="topbutton"></a>
<a href="index.php">На предыдущую страницу>></a>