<?php
session_start();
require_once'Coneccion.php';
class Trabajo
{
	private $cons;
	private $nombre;
	private $usuario;
	public function __construct()
	{
		$this->cons=array();
		$this->nombre=array();
		$this->usuario=array();
	}
	/*FUNCION SQL PARA INGRESAR USUARIOS*/
public function insertusuario()
{
	$query="select email,user from usuarios where email='".$_POST["email"]."'or user='".$_POST["usuario"]."'";
		$resp=mysql_query($query,Coneccion::con());
		if (mysql_num_rows($resp)==0)
		{
	$user=$_POST["usuario"];
	$pass=$_POST["pass"];
	$passe=md5($_POST["pass"]);
		$sql="insert into usuarios values(null,'$user','$pass','$passe','".$_POST["nombre"]."','".$_POST["email"]."')";
		mysql_query($sql,Coneccion::con());
		header("Location: login.php?m=1");	
		/*echo "<script type='text/javascript'>
			alert(' datos ingresados ');
			window.location='ingreso.php';
			</script>";*/
			}else
		{
			header("Location: ingreso.php?m=2");
		}
		
}
public function logeo()
{
	$user=$_POST["usuario"];
	$pass=$_POST["pass"];
	$passe=md5($_POST["pass"]);
	$sql="select idu,user,pass,pass_v from usuarios
		  where
		  user='$user'
		  and
		  pass='$pass'
		  and
		  pass_v='$passe'
		  ";
	$res=mysql_query($sql,Coneccion::con());
	if (mysql_num_rows($res)==0)
		{
			echo "<script type='text/javascript'>
			alert('Los datos ingresados no existen en la base de datos');
			window.location='login.php';
			</script>";
		}else
		{
			//echo "si existen";
			if ($reg=mysql_fetch_array($res))
			{
				$_SESSION["admin"]=$reg["user"];
				header("Location: home.php");
			}
		}	  
}
/*conulta para recuperar los datos de la tabla de descripcion*/
public function consulta()
{
	/*$sql="select idd,texto,idc,idu from descripcion";*/
	$sql = "SELECT idd,image1,link1,image2,link2,image3,link3,image4,link4,DATE_FORMAT(date, '%d/%m/%y')as fechas,user,host FROM descripcion  order by idd desc" ;
	$res=mysql_query($sql,Coneccion::con());
	while($reg=mysql_fetch_assoc($res))
	{
		$this->cons[]=$reg;
	}
	return $this->cons;
}
/*ordenacion unica**/
public function consultauni()
{
	/*$sql="select idd,texto,idc,idu from descripcion";*/
	$sql = "SELECT idd,idc,texto1, DATE_FORMAT(fecha1,'%d/%m/%y')as fecha1,texto2,DATE_FORMAT(fecha2, '%d/%m/%y')as fecha2,texto3,DATE_FORMAT(fecha3, '%d/%m/%y')as fecha3,texto4,DATE_FORMAT(fecha4, '%d/%m/%y')as fecha4,imagen1,imagen2,imagen3,fechas,DATE_FORMAT(fechas, '%d/%m/%y')as fechas,usuario FROM descripcion order by idd desc " ;
	/*order by idd desc*/
	$res=mysql_query($sql,Coneccion::con());
	while($reg=mysql_fetch_assoc($res))
	{
		$this->cons[]=$reg;
	}
	return $this->cons;
}

/**********************/
/*conulta para recuperar los datos de la tabla de descripcion por id de usuario*/
//CONVERT (nvarchar(10), Fecha, 103) 
public function consultaid($idd)
{
	$sql = "SELECT idd,image1,link1,image2,link2,image3,link3,image4,link4,DATE_FORMAT(date, '%d/%m/%y')as fechas,user,host FROM descripcion  WHERE idd=$idd ";
	$res=mysql_query($sql,Coneccion::con());
	while($reg=mysql_fetch_assoc($res))
	{
		$this->cons[]=$reg;
	}
	return $this->cons;
}

public function consultausuario()
{
	$sql="select idu,user,name,email from usuarios";
	$res=mysql_query($sql,Coneccion::con());
	while($reg=mysql_fetch_assoc($res))
	{
		$this->usuario[]=$reg;
	}
	return $this->usuario;
}
public function consultausuarioid($idu)
{
	$sql="select idu,user,name,email from usuarios where idu=$idu";
	$res=mysql_query($sql,Coneccion::con());
	while($reg=mysql_fetch_assoc($res))
	{
		$this->usuario[]=$reg;
	}
	return $this->usuario;
}
public function editar_usuario()
	{
		$idu=$_POST["idu"];
		$nombre=$_POST["nombre"];
		$pass=$_POST["pass"];
		$passe=md5($_POST["pass"]);
		$sql="update usuarios set  user='".$_POST["usuario"]."',pass='$pass', pass_v='$passe',name='$nombre',email='".$_POST["correo"]."' where  idu=$idu" ;
		mysql_query($sql,Coneccion::con());
		header("Location: consultausuid.php?m=1");	
	}
public function saluda_al_usuario($id_usuario)
	{
		$sql="select user from usuarios where idu=$id_usuario";
		$res=mysql_query($sql,Conectar::con());
		while ($reg=mysql_fetch_assoc($res))
		{
			$this->nombre[]=$reg;
		}
			return $this->nombre;
	}
	public function borrarusuario($idu)
	{
		$sql="delete from usuarios where idu=$idu";
		$res=mysql_query($sql,Coneccion::con());
		header("Location: ingreso.php?m=3");
	}
	public function borrardato($idd)
	{
		$query="select imagen1,imagen2,imagen3 from descripcion where idd=$idd";
		$re=mysql_query($query,Coneccion::con());
		if($reg=mysql_fetch_array($re))
		{
			unlink("upload/".$reg["imagen1"]);
			unlink("upload/".$reg["imagen2"]);
			unlink("upload/".$reg["imagen3"]);
		}
		$sql="delete from descripcion where idd=$idd ";
		$res=@mysql_query($sql,Coneccion::con());
		header("Location: home.php?m=2");
		
		
	}
	
	

}//fin clase
?>