<?php
session_start();
require_once("conexion/Coneccion.php");
/*texto sin imagenes*/

if(empty($_FILES["foto"]["name"])and empty($_FILES["foto2"]["name"])and empty($_FILES["foto3"]["name"])and empty($_FILES["foto4"]["name"]))
        {
						           
           $sql="update descripcion set link1='".$_POST["linka1"]."',link2='".$_POST["linka2"]."',link3='".$_POST["linka3"]."',link4='".$_POST["linka4"]."',date='".$_POST["datehost"]."',user='".$_SESSION['admin']."',host='".$_SERVER['REMOTE_ADDR']."' where idd=".$_POST["idd"]." ";
	$res=@mysql_query($sql,Coneccion::con());
	header("Location: home.php?m=3");
        }else
		{
			
						/*FOTO1*/
			$foto=$_FILES["foto"]["name"];
			$temp=$_FILES["foto"]["tmp_name"];
			$tamano=$_FILES["foto"]["size"];
			$tipo=$_FILES["foto"]["type"];
			/*foto2*/
			$foto2=$_FILES["foto2"]["name"];
			$temp2=$_FILES["foto2"]["tmp_name"];
			$tamano2=$_FILES["foto2"]["size"];
			$tipo2=$_FILES["foto2"]["type"];
			
			
			/*foto3*/
			$foto3=$_FILES["foto3"]["name"];
			$temp3=$_FILES["foto3"]["tmp_name"];
			$tamano3=$_FILES["foto3"]["size"];
			$tipo3=$_FILES["foto3"]["type"];
			
			/*foto4*/
			$foto4=$_FILES["foto4"]["name"];
			$temp4=$_FILES["foto4"]["tmp_name"];
			$tamano4=$_FILES["foto4"]["size"];
			$tipo4=$_FILES["foto4"]["type"];
			//echo"1".$foto1."2".$foto2."3".$foto3;
				//print_r($_POST);
				//print_r($_FILES);
		$nombre_foto=$foto;
		$nombre_foto2=$foto2;
		$nombre_foto3=$foto3;
		$nombre_foto4=$foto4;
		copy($temp,"upload/$nombre_foto");
		copy($temp2,"upload/$nombre_foto2");
		copy($temp3,"upload/$nombre_foto3");
		copy($temp4,"upload/$nombre_foto4");
		
		$sql="update descripcion set image1='$nombre_foto',link1='".$_POST["linka1"]."',image2='$nombre_foto2',link2='".$_POST["linka2"]."',image3='$nombre_foto3',link3='".$_POST["linka3"]."',image4='$nombre_foto4',link4='".$_POST["linka4"]."',date='".$_POST["datehost"]."',user='".$_SESSION['admin']."',host='".$_SERVER['REMOTE_ADDR']."' where idd=".$_POST["idd"]." ";
	$res=@mysql_query($sql,Coneccion::con());
	header("Location: home.php?m=3");	
	}	
/************************imagen1****************************************/
if(!empty($_FILES["foto"]["name"])and empty($_FILES["foto2"]["name"])and empty($_FILES["foto3"]["name"])and empty($_FILES["foto4"]["name"]))
        {
			$image1=$_POST["image1"];
			$image2=$_POST["image2"];
			$image3=$_POST["image3"];
			$image4=$_POST["image"];
							/*FOTO1*/
			$foto=$_FILES["foto"]["name"];
			$temp=$_FILES["foto"]["tmp_name"];
			$tamano=$_FILES["foto"]["size"];
			$tipo=$_FILES["foto"]["type"];
			/*foto2*/
			
		$nombre_foto=$foto;
		
		copy($temp,"upload/$nombre_foto");
		
		$sql="update descripcion set image1='$nombre_foto',link1='".$_POST["linka1"]."',image2='$image2',link2='".$_POST["linka2"]."',image3='$image3',link3='".$_POST["linka3"]."',image4='$image4',link4='".$_POST["linka4"]."',date='".$_POST["datehost"]."',user='".$_SESSION['admin']."',host='".$_SERVER['REMOTE_ADDR']."' where idd=".$_POST["idd"]." ";
				
	$res=@mysql_query($sql,Coneccion::con());
	header("Location: home.php?m=3");	
	}
/********************************imagen2**************************************************/		
if(empty($_FILES["foto"]["name"])and !empty($_FILES["foto2"]["name"])and empty($_FILES["foto3"]["name"])and empty($_FILES["foto4"]["name"]))
        {
			$image1=$_POST["image1"];
			$image2=$_POST["image2"];
			$image3=$_POST["image3"];
			$image4=$_POST["image4"];
							/*FOTO2*/
			$foto2=$_FILES["foto2"]["name"];
			$temp2=$_FILES["foto2"]["tmp_name"];
			$tamano2=$_FILES["foto2"]["size"];
			$tipo2=$_FILES["foto2"]["type"];
			/*foto2*/
			
		$nombre_foto2=$foto2;
		
		copy($temp2,"upload/$nombre_foto2");
		
		$sql="update descripcion set image1='$image1',link1='".$_POST["linka1"]."',image2='$nombre_foto2',link2='".$_POST["linka2"]."',image3='$image3',link3='".$_POST["linka3"]."',image4='$image4',link4='".$_POST["linka4"]."',date='".$_POST["datehost"]."',user='".$_SESSION['admin']."',host='".$_SERVER['REMOTE_ADDR']."' where idd=".$_POST["idd"]." ";
		
		
	$res=@mysql_query($sql,Coneccion::con());
	header("Location: home.php?m=3");	
	}	
	/********************************imagen3**************************************************************************/
	if(empty($_FILES["foto"]["name"])and empty($_FILES["foto2"]["name"])and !empty($_FILES["foto3"]["name"])and empty($_FILES["foto4"]["name"]))
        {
			$image1=$_POST["image1"];
			$image2=$_POST["image2"];
			$image3=$_POST["image3"];
			$image4=$_POST["image4"];
							/*FOTO1*/
			$foto3=$_FILES["foto3"]["name"];
			$temp3=$_FILES["foto3"]["tmp_name"];
			$tamano3=$_FILES["foto3"]["size"];
			$tipo3=$_FILES["foto3"]["type"];
			/*foto2*/
			
		$nombre_foto3=$foto3;
		
		copy($temp3,"upload/$nombre_foto3");
		
		
		$sql="update descripcion set image1='$image1',link1='".$_POST["linka1"]."',image2='$image2',link2='".$_POST["linka2"]."',image3='$nombre_foto3',link3='".$_POST["linka3"]."',image4='$image4',link4='".$_POST["linka4"]."',date='".$_POST["datehost"]."',user='".$_SESSION['admin']."',host='".$_SERVER['REMOTE_ADDR']."' where idd=".$_POST["idd"]." ";
		
		
	$res=@mysql_query($sql,Coneccion::con());
	header("Location: home.php?m=3");	
	}
	/********************************imagen4**************************************************************************/
	if(empty($_FILES["foto"]["name"])and empty($_FILES["foto2"]["name"])and empty($_FILES["foto3"]["name"])and !empty($_FILES["foto4"]["name"]))
        {
			$image1=$_POST["image1"];
			$image2=$_POST["image2"];
			$image3=$_POST["image3"];
			$image4=$_POST["image4"];
							/*FOTO1*/
			$foto4=$_FILES["foto4"]["name"];
			$temp4=$_FILES["foto4"]["tmp_name"];
			$tamano4=$_FILES["foto4"]["size"];
			$tipo4=$_FILES["foto4"]["type"];
			/*foto2*/
			
		$nombre_foto4=$foto4;
		
		copy($temp3,"upload/$nombre_foto4");
		
		
		$sql="update descripcion set image1='$image1',link1='".$_POST["linka1"]."',image2='$image2',link2='".$_POST["linka2"]."',image3='$image3',link3='".$_POST["linka3"]."',image4='$nombre_foto4',link4='".$_POST["linka4"]."',date='".$_POST["datehost"]."',user='".$_SESSION['admin']."',host='".$_SERVER['REMOTE_ADDR']."' where idd=".$_POST["idd"]." ";
		
		
	$res=@mysql_query($sql,Coneccion::con());
	header("Location: home.php?m=3");	
	}		
	/************************************************imagen 1 -2******************************************************************/
	
	if(!empty($_FILES["foto"]["name"])and !empty($_FILES["foto2"]["name"])and empty($_FILES["foto3"]["name"])and empty($_FILES["foto4"]["name"]))
        {
			$image1=$_POST["image1"];
			$image2=$_POST["image2"];
			$image3=$_POST["image3"];
			$image4=$_POST["image4"];
							/*FOTO1*/
			$foto=$_FILES["foto"]["name"];
			$temp=$_FILES["foto"]["tmp_name"];
			$tamano=$_FILES["foto"]["size"];
			$tipo=$_FILES["foto"]["type"];
							/*FOTO2*/
			$foto2=$_FILES["foto2"]["name"];
			$temp2=$_FILES["foto2"]["tmp_name"];
			$tamano2=$_FILES["foto2"]["size"];
			$tipo2=$_FILES["foto2"]["type"];
			
			
		$nombre_foto=$foto;
		$nombre_foto2=$foto2;
		
		copy($temp,"upload/$nombre_foto");
		copy($temp2,"upload/$nombre_foto2");
		
		
		$sql="update descripcion set image1='$nombre_foto',link1='".$_POST["linka1"]."',image2='$nombre_foto2',link2='".$_POST["linka2"]."',image3='$image3',link3='".$_POST["linka3"]."',image4='$image4',link4='".$_POST["linka4"]."',date='".$_POST["datehost"]."',user='".$_SESSION['admin']."',host='".$_SERVER['REMOTE_ADDR']."' where idd=".$_POST["idd"]." ";
		
		
	$res=@mysql_query($sql,Coneccion::con());
	header("Location: home.php?m=3");	
	}	
	/************************imagen1-3 ********************************************/
	if(!empty($_FILES["foto"]["name"])and empty($_FILES["foto2"]["name"])and !empty($_FILES["foto3"]["name"])and empty($_FILES["foto4"]["name"]))
        {
			$image1=$_POST["image1"];
			$image2=$_POST["image2"];
			$image3=$_POST["image3"];
			$image4=$_POST["image4"];
							/*FOTO1*/
			$foto=$_FILES["foto"]["name"];
			$temp=$_FILES["foto"]["tmp_name"];
			$tamano=$_FILES["foto"]["size"];
			$tipo=$_FILES["foto"]["type"];
							/*FOTO3*/
			$foto3=$_FILES["foto3"]["name"];
			$temp3=$_FILES["foto3"]["tmp_name"];
			$tamano3=$_FILES["foto3"]["size"];
			$tipo3=$_FILES["foto3"]["type"];
			
			
		$nombre_foto=$foto;
		$nombre_foto3=$foto3;
		
		copy($temp,"upload/$nombre_foto");
		copy($temp3,"upload/$nombre_foto3");
		$sql="update descripcion set image1='$nombre_foto',link1='".$_POST["linka1"]."',image2='$image2',link2='".$_POST["linka2"]."',image3='$nombre_foto3',link3='".$_POST["linka3"]."',image4='$image4',link4='".$_POST["linka4"]."',date='".$_POST["datehost"]."',user='".$_SESSION['admin']."',host='".$_SERVER['REMOTE_ADDR']."' where idd=".$_POST["idd"]." ";
	$res=@mysql_query($sql,Coneccion::con());
	header("Location: home.php?m=3");	
	}
	/************************imagen1-4 ********************************************/
	if(!empty($_FILES["foto"]["name"])and empty($_FILES["foto2"]["name"])and empty($_FILES["foto3"]["name"])and !empty($_FILES["foto4"]["name"]))
        {
			$image1=$_POST["image1"];
			$image2=$_POST["image2"];
			$image3=$_POST["image3"];
			$image4=$_POST["image4"];
							/*FOTO1*/
			$foto=$_FILES["foto"]["name"];
			$temp=$_FILES["foto"]["tmp_name"];
			$tamano=$_FILES["foto"]["size"];
			$tipo=$_FILES["foto"]["type"];
							/*FOTO4*/
			$foto4=$_FILES["foto4"]["name"];
			$temp4=$_FILES["foto4"]["tmp_name"];
			$tamano4=$_FILES["foto4"]["size"];
			$tipo4=$_FILES["foto4"]["type"];
			
			
		$nombre_foto=$foto;
		$nombre_foto4=$foto4;
		
		copy($temp,"upload/$nombre_foto");
		copy($temp4,"upload/$nombre_foto4");
		
		$sql="update descripcion set image1='$nombre_foto',link1='".$_POST["linka1"]."',image2='$image2',link2='".$_POST["linka2"]."',image3='$image3',link3='".$_POST["linka3"]."',image4='$nombre_foto4',link4='".$_POST["linka4"]."',date='".$_POST["datehost"]."',user='".$_SESSION['admin']."',host='".$_SERVER['REMOTE_ADDR']."' where idd=".$_POST["idd"]." ";
	$res=@mysql_query($sql,Coneccion::con());
	header("Location: home.php?m=3");	
	}		
	/************************imagen 2-3***************************************/
	if(empty($_FILES["foto"]["name"])and !empty($_FILES["foto2"]["name"])and !empty($_FILES["foto3"]["name"])and empty($_FILES["foto4"]["name"]))
        {
			$image1=$_POST["image1"];
			$image2=$_POST["image2"];
			$image3=$_POST["image3"];
			$image4=$_POST["image4"];
							/*FOTO2*/
			$foto2=$_FILES["foto2"]["name"];
			$temp2=$_FILES["foto2"]["tmp_name"];
			$tamano2=$_FILES["foto2"]["size"];
			$tipo2=$_FILES["foto2"]["type"];
							/*FOTO3*/
			$foto3=$_FILES["foto3"]["name"];
			$temp3=$_FILES["foto3"]["tmp_name"];
			$tamano3=$_FILES["foto3"]["size"];
			$tipo3=$_FILES["foto3"]["type"];
			
			
		$nombre_foto2=$foto2;
		$nombre_foto3=$foto3;
		
		copy($temp2,"upload/$nombre_foto2");
		copy($temp3,"upload/$nombre_foto3");
		
		$sql="update descripcion set image1='$image1',link1='".$_POST["linka1"]."',image2='$nombre_foto2',link2='".$_POST["linka2"]."',image3='$nombre_foto3',link3='".$_POST["linka3"]."',image4='$image4',link4='".$_POST["linka4"]."',date='".$_POST["datehost"]."',user='".$_SESSION['admin']."',host='".$_SERVER['REMOTE_ADDR']."' where idd=".$_POST["idd"]." ";
		
		$res=@mysql_query($sql,Coneccion::con());
	header("Location: home.php?m=3");	
	}	
	/************************imagen 2-4***************************************/
	if(empty($_FILES["foto"]["name"])and !empty($_FILES["foto2"]["name"])and empty($_FILES["foto3"]["name"])and !empty($_FILES["foto4"]["name"]))
        {
			$image1=$_POST["image1"];
			$image2=$_POST["image2"];
			$image3=$_POST["image3"];
			$image4=$_POST["image4"];
							/*FOTO2*/
			$foto2=$_FILES["foto2"]["name"];
			$temp2=$_FILES["foto2"]["tmp_name"];
			$tamano2=$_FILES["foto2"]["size"];
			$tipo2=$_FILES["foto2"]["type"];
							/*FOTO4*/
			$foto4=$_FILES["foto4"]["name"];
			$temp4=$_FILES["foto4"]["tmp_name"];
			$tamano4=$_FILES["foto4"]["size"];
			$tipo4=$_FILES["foto4"]["type"];
			
			
		$nombre_foto2=$foto2;
		$nombre_foto4=$foto4;
		
		copy($temp2,"upload/$nombre_foto2");
		copy($temp4,"upload/$nombre_foto4");
		
		$sql="update descripcion set image1='$image1',link1='".$_POST["linka1"]."',image2='$nombre_foto2',link2='".$_POST["linka2"]."',image3='$image3',link3='".$_POST["linka3"]."',image4='$nombre_foto4',link4='".$_POST["linka4"]."',date='".$_POST["datehost"]."',user='".$_SESSION['admin']."',host='".$_SERVER['REMOTE_ADDR']."' where idd=".$_POST["idd"]." ";
		
		
	$res=@mysql_query($sql,Coneccion::con());
	header("Location: home.php?m=3");	
	}	
	/************************imagen 3-4***************************************/
	if(empty($_FILES["foto"]["name"])and empty($_FILES["foto2"]["name"])and !empty($_FILES["foto3"]["name"])and !empty($_FILES["foto4"]["name"]))
        {
			$image1=$_POST["image1"];
			$image2=$_POST["image2"];
			$image3=$_POST["image3"];
			$image4=$_POST["image4"];
							/*FOTO3*/
			$foto3=$_FILES["foto3"]["name"];
			$temp3=$_FILES["foto3"]["tmp_name"];
			$tamano3=$_FILES["foto3"]["size"];
			$tipo3=$_FILES["foto3"]["type"];
							/*FOTO4*/
			$foto4=$_FILES["foto4"]["name"];
			$temp4=$_FILES["foto4"]["tmp_name"];
			$tamano4=$_FILES["foto4"]["size"];
			$tipo4=$_FILES["foto4"]["type"];
			
			
		$nombre_foto3=$foto3;
		$nombre_foto4=$foto4;
		
		copy($temp3,"upload/$nombre_foto3");
		copy($temp4,"upload/$nombre_foto4");
		
		$sql="update descripcion set image1='$image1',link1='".$_POST["linka1"]."',image2='$image2',link2='".$_POST["linka2"]."',image3='$nombre_foto3',link3='".$_POST["linka3"]."',image4='$nombre_foto4',link4='".$_POST["linka4"]."',date='".$_POST["datehost"]."',user='".$_SESSION['admin']."',host='".$_SERVER['REMOTE_ADDR']."' where idd=".$_POST["idd"]." ";
	$res=@mysql_query($sql,Coneccion::con());
	header("Location: home.php?m=3");	
	}	
?>


