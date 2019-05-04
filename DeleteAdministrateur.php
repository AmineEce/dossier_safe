<?php
$type= isset($_POST["categorie"])?$_POST["categorie"] : "";
$Nom= isset($_POST["nom"])?$_POST["nom"] : "";
$Prix= isset($_POST["prix"])?$_POST["prix"] : "";
$ID= isset($_POST["id"])?$_POST["id"] : "";


$database = "piscine";


$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);


 //si le BDD existe, faire le traitement
if ($db_found) {
if($type=="livre")
{
if($ID!="")
{
	$sql = "SELECT * FROM Livre WHERE ID LIKE '%$ID%' ";
	$result = mysqli_query($db_handle, $sql);
}

else
{	
	echo "Veuillez renseigner tous les champs";
	$result="";
	
}


if ($ID!="" And mysqli_num_rows($result) == 0)
{
	echo "Item inexistant";
}

if($ID!="" AND mysqli_num_rows($result) == 1 )
{
	$sql = "DELETE FROM Livre where ID=$ID";
	$result = mysqli_query($db_handle, $sql);
	echo "Item supprimée";

}

}



elseif($type=="musique")
{
if($ID!="")
{
	$sql = "SELECT * FROM musique WHERE ID LIKE '%$ID%' ";
	$result = mysqli_query($db_handle, $sql);
}

else
{	
	echo "Veuillez renseigner tous les champs";
	$result="";
	
}


if ($ID!="" And mysqli_num_rows($result) == 0)
{
	echo "Item inexistant";
}

if($ID!="" AND mysqli_num_rows($result) == 1 )
{
	$sql = "DELETE FROM musique where ID=$ID";
	$result = mysqli_query($db_handle, $sql);
	echo "Item supprimée";

}

}


elseif($type=="vetement")
{
if($ID!="")
{
	$sql = "SELECT * FROM vetement WHERE ID LIKE '%$ID%' ";
	$result = mysqli_query($db_handle, $sql);
}

else
{	
	echo "Veuillez renseigner tous les champs";
	$result="";
	
}


if ($ID!="" And mysqli_num_rows($result) == 0)
{
	echo "Item inexistant";
}

if($ID!="" AND mysqli_num_rows($result) == 1 )
{
	$sql = "DELETE FROM vetement where ID=$ID";
	$result = mysqli_query($db_handle, $sql);
	echo "Item supprimée";

}

}

elseif($type=="sport")
{
if($ID!="")
{
	$sql = "SELECT * FROM sport WHERE ID LIKE '%$ID%' ";
	$result = mysqli_query($db_handle, $sql);
}

else
{	
	echo "Veuillez renseigner tous les champs";
	$result="";
	
}


if ($ID!="" And mysqli_num_rows($result) == 0)
{
	echo "Item inexistant";
}

if($ID!="" AND mysqli_num_rows($result) == 1 )
{
	$sql = "DELETE FROM sport where ID=$ID";
	$result = mysqli_query($db_handle, $sql);
	echo "Item supprimée";

}

}
else
{
	echo "Veullez renseigner tous les champs";
}

}




//end if
//si le BDD n'existe pas
else {
 echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);
?>
