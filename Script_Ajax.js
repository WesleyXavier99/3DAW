function mostraInfo(str){

	//verificando se tem algo escrito
	if (str.length>0) {

		//criando o objeto para fazer a requisição
		var xmlhttp = new XMLHttpRequest();

		xmlhttp.onreadystatechange = function(){
			if (this.readyState == 4 && this.status == 200) {

				document.getElementById('resposta').value =  this.responseText;
			}
		}

		//concluindo a requisição
		xmlhttp.open("GET","Resposta_Ajax.php?estado="+str,true);
		xmlhttp.send();
	}else{
		document.getElementById('resposta').value = "";
	}

}