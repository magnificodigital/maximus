function validaForm () {

	//Pega os dados do formulario

	var	nome1 			=	document.formcontato.nome.value;
	var	email1	 		=	document.formcontato.email.value;
	var	telefone1 		=	document.formcontato.assunto.value;
	
	//Verifica nome
	if (nome1 == "" || nome2 == "" || nome3 == "") {
		alert ("Preencha o nome");
		return false;
	}

	//Verifica se o e-mail foi preenchido
	if (email1 == "" || email2 == "" || email3 == "") {
		alert ("Preencha o e-mail");
		return false;
	}

	//Verifica se o assunto foi preenchido
	if (telefone1 == "" || telefone2 == "" || telefone3 == "") {
		alert ("Preencha o assunto");
		return false;
	}


	//Se forem preenchidos, volta a executar
	return true;

}