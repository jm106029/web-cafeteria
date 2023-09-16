var ban=0;
function Buscador(){
	var xmlhttp=false;
	try {
		xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e){
		try {
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E){
			xmlhttp=false;
		}
	}
	if (!xmlhttp && typeof XMLHttpRequest!='undefined'){
		xmlhttp=new XMLHttpRequest();
	}
	return xmlhttp;
}

function Procesar(id,opr,div){
	et=Etiqueta(div);
	ajax=Buscador();
	ajax.open("GET","proceso_admin.php?id="+id+"&opr="+opr);
	ajax.onreadystatechange=function(){
		et.innerHTML=ajax.responseText;
		window.scrollTo(0,c.offsetTop);
	}
	ajax.send(null);
}

function Etiqueta(div){
	switch (div){
	   case 1:
          et=document.getElementById('etiqueta1');
          break;
	   case 2:
          et=document.getElementById('etiqueta2');
          break;
	   case 3:
          et=document.getElementById('etiqueta3');
          break;
	   case 4:
          et=document.getElementById('etiqueta4');
          break;
	   case 5:
          et=document.getElementById('etiqueta5');
          break;
	   case 6:
          et=document.getElementById('etiqueta6');
          break;
	   case 7:
          et=document.getElementById('etiqueta7');
          break;
	}
	return et;
}