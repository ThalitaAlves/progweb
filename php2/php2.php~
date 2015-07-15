<html>
<head><meta charset='UTF-8'></head>
<body>
<?php 
  $conexao = @mysql_connect("localhost", "root", "senha", 3306);
  if(!$conexao) die ("<p>Codigo de Erro " . mysqli_connect_errno(). ": " . mysqli_connect_error()) . "</p>";

  $banco = @mysql_select_db("PHP",$conexao);
  if(!$banco) die("<p>Banco de Dados não disponível.</p>");
  
  
  if($_GET["sexo"]==2){$sexo="Feminino";} else{$sexo= "Masculino";}
  $sql = "INSERT INTO form VALUES('".$_GET["nome"]."','".$sexo."','".$_GET["com"]."');";
 
  echo "<p>Banco de dados aberto com sucesso!</p>";
 	
	mysql_query($sql,$conexao);
 	$result = mysql_query ("Select * from form;",$conexao);
	$row = mysql_fetch_row($result);
     echo "<table><thead><tr align='left'><th>Nome</th><th>Sexo</th><th>Comentário</th></tr>
</thead><tbody>";
  do {
		echo "<tr><td>{$row[0]}</td>";
		echo "<td>{$row[1]}</td>";
		echo "<td>{$row[2]}</td></tr>";
		
		$row = mysql_fetch_row($result);
	} while ($row);
	echo "<tbody></table>";
	mysql_close($conexao);
        echo "Banco de dados fechado com sucesso!"
  
?>
</body>
</html>
