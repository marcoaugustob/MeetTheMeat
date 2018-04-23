<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Meet The Meat</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css"/>
</head>
<body>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
      <div class="container">
      <body> 
      <h1>Bem vindo ao Meet The Meat!</h1>
        <p>Projeto acedemico que avalia a qualidade das carnes e fornecedores.</p>
          <button class="btn btn-primary btn-lg">Novo Review <? echo anchor('review/reviewCreate', 'Novo Review') ?></li>
          <li>Lista de Reviews<? echo anchor('review/listReviews', 'Lista de Reviews') ?></li>
        </ul>
</body>
      </div>
    </div>
    <div class="container">

     
      <hr>

      <footer>
        <p style="text-align: center;">&copy; <?php
                                              echo date("Y");
                                              ?> Marco e Lucas, Inc.</p>
      </footer>
    </div> 
</div>

</body>
</html>

