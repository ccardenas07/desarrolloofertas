function valida_correo(correo) {
		  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(correo)){
			
		   return (true)
		  } else {
		   
		   return (false);
		  }
		 }

function limpiar_logueo()
{
	document.form.reset();
	document.form.user.focus();
}
function validar_logueo()
{
	var form=document.form;
	if (form.usuario.value==0)
	{
		document.getElementById("error").innerHTML="<font color='red'>Ingrese su Login</font>";
		form.usuario.value="";
		form.usuario.focus();
		return false;
	}
	if (form.pass.value==0)
	{
		document.getElementById("error").innerHTML="<font color='red'>Ingrese su Password</font>";
		form.pass.value="";
		form.pass.focus();
		return false;
	}
	
	form.pass.value=calcMD5(form.pass.value);
	form.submit();
	
}

function valida_registro()
{
	var form=document.form;	
	
	if (form.nombre.value==0) {
	document.getElementById("error").innerHTML="<font color='red'>El campo nombre es requerido</font>";
	form.nombre.value="";
	form.nombre.focus();
	return false;
	}
	
	if (form.email.value==0)
	{
		//alert("Ingrese su Celular");
		document.getElementById("error").innerHTML="<font color='red'>El campo Email es requerido</font>";
		form.email.value="";
		form.email.focus();
		return false;
	}
	if (valida_correo(form.email.value)==false)
	{
		//alert("Ingrese su Email");
		document.getElementById("error").innerHTML="<font color='red'>El campo Email está incorrecto</font>";		
		form.email.value="";
		form.email.focus();
		return false;
	}
	
	
	if (form.usuario.value==0)
	{
		//alert("Ingrese su Nombre");
		document.getElementById("error").innerHTML="<font color='red'>El campo Usuario es requerido</font>";
		form.usuario.value="";
		form.usuario.focus();
		return false;
	}
	
	
		
	if (form.pass.value==0)
	{
		document.getElementById("error").innerHTML="<font color='red'>El campo  Password es requerido</font>";
		//alert("Ingrese su Apellido");
		form.pass.value="";
		form.pass.focus();
		return false;
	}
	if (form.rpassw.value==0)
	{
		//alert("Ingrese su Celular");
		document.getElementById("error").innerHTML="<font color='red'>El campo repita paswword es requerido</font>";
		form.rpassw.value="";
		form.rpassw.focus();
		return false;
	}
	if (form.pass.value != form.rpassw.value)
	{
		document.getElementById("error").innerHTML="<font color='red'>Los password ingresados no coinciden</font>";
		form.rpassw.value="";
		form.rpassw.value="";
		form.rpassw.focus();
		return false;
	}
	form.pass.value=calcMD5(form.pass.value);
		
	form.submit();
}
/***********************************/
function valida_ediusu()
{
	var form=document.form;	
	
	if (form.nombre.value==0) {
	document.getElementById("error").innerHTML="<font color='red'>El campo nombre es requerido</font>";
	form.nombre.value="";
	form.nombre.focus();
	return false;
	}
	
	if (form.correo.value==0)
	{
		//alert("Ingrese su Celular");
		document.getElementById("error").innerHTML="<font color='red'>El campo Email es requerido</font>";
		form.correo.value="";
		form.correo.focus();
		return false;
	}
	if (valida_correo(form.correo.value)==false)
	{
		//alert("Ingrese su Email");
		document.getElementById("error").innerHTML="<font color='red'>El campo Email está incorrecto</font>";		
		form.correo.value="";
		form.correo.focus();
		return false;
	}
	
	
	if (form.usuario.value==0)
	{
		//alert("Ingrese su Nombre");
		document.getElementById("error").innerHTML="<font color='red'>El campo Usuario es requerido</font>";
		form.usuario.value="";
		form.usuario.focus();
		return false;
	}
	
	
		
	if (form.pass.value==0)
	{
		document.getElementById("error").innerHTML="<font color='red'>El campo  Password es requerido</font>";
		//alert("Ingrese su Apellido");
		form.pass.value="";
		form.pass.focus();
		return false;
	}
	if (form.passr.value==0)
	{
		//alert("Ingrese su Celular");
		document.getElementById("error").innerHTML="<font color='red'>El campo repita paswword es requerido</font>";
		form.passr.value="";
		form.passr.focus();
		return false;
	}
	if (form.pass.value != form.passr.value)
	{
		document.getElementById("error").innerHTML="<font color='red'>Los password ingresados no coinciden</font>";
		form.passr.value="";
		form.passr.value="";
		form.passr.focus();
		return false;
	}
	form.pass.value=calcMD5(form.pass.value);
		
	form.submit();
}
/***********************************/
function valida_descripcion()
{
	var form=document.form;	
	
	
	form.submit();
}

