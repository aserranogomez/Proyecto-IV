<HTML>
<HEAD>
<TITLE>Borrar2.php</TITLE>
</HEAD>
<BODY>
 <?php
    session_start();
    include('acceso_db.php');
	
	
	$reg = mysql_query("SELECT * FROM enlacesUsuarios");
	
	if($re= mysql_fetch_array($reg))
	{
		mysql_query("DELETE FROM enlacesUsuarios WHERE url ='$_POST[url]'");
		echo "<script type='text/javascript'>  window.location='panel_admin.php';</script>";
	}
	else{
	echo "Error, <a href='javascript:history.back();'>Reintentar</a>";
	}
		
mysql_close();
?>

<h1><div align="center">Registro Borrado</div></h1>
<div align="center"><a href="panel_admin.php">Visualizar el contenido de la base</a></div>

</BODY>
</HTML>
