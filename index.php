<?php
error_reporting(-1);
ini_set('display_errors',1);
header('Content-Type: text/html; charset=utf-8');
$page = (isset($_GET['page']) ? $_GET['page'] : 'main');?>

<!DOCTYPE html>
<html lang="ru">
  <head>
     <meta charset="utf-8">
     <title>My Blog</title>
     <link rel="stylesheet" href="main.css">
	 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,300,100&subset=cyrillic,latin">
  </head>
  <body>
     <header class="primary-header container group">
         <h1 class="logo">
           <a href="index.html">My<br>Blog</a>
         </h1>        
		 <h3><br><br><br></h3>
		 <nav class="nav primary-nav">
           <a href="index.php?page=main">Главная</a>
           <a href="index.php?page=Riga">Небольшая статья о Риге</a>
           <a href="index.php?page=about">Обо мне</a> 
		   <a href="index.php?page=contacts">Мои контакты</a> 
         </nav>
     </header>

     <section>
     	 <?php include basename($page).'.php'; ?>
	 </section>

        <footer class="primary-footer container group">
        <small>&copy; Roman Permyakov</small>
		
		<nav class="nav">
           <a href="index.php?page=main">Главная</a>
           <a href="index.php?page=Riga">Небольшая статья о Риге</a>
           <a href="index.php?page=about">Обо мне</a> 
		   <a href="index.php?page=contacts">Мои контакты</a> 
        </nav>
		 
     </footer>
  </body>
</html>