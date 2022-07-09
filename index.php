<?php
error_reporting(-1);
ini_set('display_errors',1);
header('Content-Type: text/html; charset=utf-8');
$page = (isset($_GET['page']) ? $_GET['page'] : 'main');?>

<!DOCTYPE html>
<html lang="ru">
  <head>
     <meta charset="utf-8">
     <title>My test site</title>
     <link rel="stylesheet" href="style.css">
	 
  </head>
  <body>
     <header class="primary-header container group">
         <h1 class="logo">
           <a href="index.php">my<br>site</a>
         </h1>        
		 <h3><br><br><br></h3>
		 <nav class="nav primary-nav">
		 <ul>
              <li><a href="index.php?page=main">Главная</a></li><!--
           --><li><a href="index.php?page=about">Резюме</a></li><!--
           --><li><a href="index.php?page=projects">Проекты</a></li><!--
           --><li><a href="index.php?page=contacts">Мои контакты</a></li>           
         </ul>           
         </nav>
     </header>

     <section >
     	 <?php include basename($page).'.php'; ?>
	 </section>

        <footer class="primary-footer container group">
        <small>&copy; Roman Permyakov</small>
		
		<nav class="nav">
           <ul>
              <li><a href="index.php?page=main">Главная</a></li><!--
           --><li><a href="index.php?page=about">Резюме</a></li><!--
           --><li><a href="index.php?page=projects">Проекты</a></li><!--
           --><li><a href="index.php?page=contacts">Контакты</a></li>           
           </ul>  
        </nav>
		 
     </footer>
  </body>
</html>