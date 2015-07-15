<meta charset="UTF-8"/>
 Seu nome é <?php echo $_GET["nome"];?>.<br>
  <?php 
  if($_GET["sexo"]==2){echo "Sexo feminino";}
  else{echo "Sexo masculino";}?><br>
 Seu comentário foi: <?php echo $_GET["com"];?>
