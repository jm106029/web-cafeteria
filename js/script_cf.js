function valida(formulario){
	if (formulario.usuario.value.trim().length==0){
		alert("FALTA POR CAPTURAR EL USUARIO");
		formulario.usuario.focus();
		return false;
	}
	if (formulario.psw.value.trim().length==0){
		alert("FALTA POR CAPTURAR LA CONTRASEÑA");
		formulario.psw.focus();
		return false;
	}
}