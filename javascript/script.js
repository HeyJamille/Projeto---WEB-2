// Validação do cadastro
function cadastro() {
	nome = document.getElementById('nome').value;
	email = document.getElementById('email').value;
	senha = document.getElementById('senha').value;
	
	if(nome != "" && email != "" && senha != "") {
		location.href = "./PHP/login.php";
	}

	if(nome == "" && email == "" && senha == "")
		alert('Digite as informações necessárias para poder finalizar seu cadastro!')
	else if(nome == "") 
		alert('Digite seu nome!') 
	else if(email == "") 
		alert('Digite sua e-mail!')
	else if(senha == "") 
		alert('Digite sua senha!')
}

// Validação do login
function login() {
	email = document.getElementById('email').value;
	senha = document.getElementById('senha').value;
	
	if(email != "" && senha != "") {
		location.href = "./PHP/login.php";
	}

	if(email == "" && senha == "") {
		alert('Digite as informações necessárias para poder logar-se!')
	}
	else if(email == "") 
		alert('Digite sua e-mail!')
	else if(senha == "") 
		alert('Digite sua senha!')
}

// Validação dos motoristas
function motoristas() {
	ID = document.getElementById('ID').value;
	
	if(ID != "") {
		location.href = "./PHP/motoristas.php";
	}
	if(ID == "")  {
		alert('Digite seu ID!')
	}
}

// Validação do cad_motoristas
function cad_motoristas() {
	nome = document.getElementById('nome').value;
	ID = document.getElementById('ID').value;
	CPF = document.getElementById('CPF').value;
	
	if(nome != "" && ID != "" && CPF != "") {
		location.href = "./PHP/login.php";
	}

	if(nome == "" && ID == "" && CPF == "")
		alert('Digite as informações necessárias para poder finalizar seu cadastro!')
	else if(nome == "") 
		alert('Digite seu nome!') 
	else if(ID == "") 
		alert('Digite seu ID!')
	else if(CPF == "") 
		alert('Digite seu CPF!')
}

// Validação dos veículos
function veiculos() {
	ID = document.getElementById('ID').value;
	
	if(ID != "") {
		location.href = "./PHP/login.php";
	}

	if(ID == "")
		alert('Digite seu ID!')
}

// Validação do cadastro de veículos
function cad_veiculos() {
	ID = document.getElementById('ID').value;
	ano = document.getElementById('ano').value;
	modelo = document.getElementById('modelo').value;
	placa = document.getElementById('placa').value;
	ID_garagem = document.getElementById('ID_garagem').value;
	
	if(ID != "" && ano != "" && modelo != "" && placa != "" && ID_garagem != "") {
		location.href = "./PHP/cad_veiculos.php";
	}

	if(ID == "" && ano == "" && modelo == "" && placa == "" && ID_garagem == "")
		alert('Digite as informações necessárias para poder finalizar seu cadastro!')
	else if(ID == "") 
		alert('Digite seu ID!') 
	else if(ano == "") 
		alert('Digite seu ano!')
	else if(modelo == "") 
		alert('Digite seu modelo!')
	else if(placa == "") 
		alert('Digite sua placa!')
	else if(ID_garagem == "") 
		alert('Digite seu ID_garagem!')
}

// Validação das viagens
function viagens() {
	ID = document.getElementById('ID').value;
	
	if(ID != "") {
		location.href = "./PHP/viagens.php";
	}

	if(ID == "") {
		alert('Digite seu ID!')
	}
}

// Validação do cadastro de viagens
function cad_viagens() {
	ID = document.getElementById('ID').value;
	km_inicial = document.getElementById('km_inicial').value;
	km_final = document.getElementById('km_final').value;
	data_saida = document.getElementById('data_saida').value;
	ID_carro = document.getElementById('ID_carro').value;
	ID_motorista = document.getElementById('ID_motorista').value;
	data_entrada = document.getElementById('data_entrada').value;
	
	if(ID != "" && km_inicial != "" && km_final != "" && data_saida != "" && ID_carro != "" && ID_motorista != "" && data_entrada != "") {
		location.href = "./PHP/cad_viagens.php";
	}

	if(ID == "" && km_inicial == "" && km_final == "" && data_saida == "" && ID_carro == "" && ID_motorista == "" && data_entrada == "")
		alert('Digite as informações necessárias para poder finalizar seu cadastro!')
	else if(ID == "") 
		alert('Digite seu ID!') 
	else if(km_inicial == "") 
		alert('Digite seu km inicial!')
	else if(km_final == "") 
		alert('Digite seu km final!')
	else if(data_saida == "") 
		alert('Digite sua data de saida!')
	else if(ID_carro == "") 
		alert('Digite o ID do carro!')
	else if(ID_motorista == "") 
		alert('Digite o ID do motorista!')
	else if(data_entrada == "") 
		alert('Digite sua data de entrada!')
}

// Validação das garagens
function garagem() {
	ID = document.getElementById('ID').value;
	
	if(ID != "") {
		location.href = "./PHP/garagem.php";
	}

	if(ID == "") {
		alert('Digite seu ID!')
	}
}

// Validação do cadastro de garagens
function cad_garagem() {
	ID = document.getElementById('ID').value;
	descricao = document.getElementById('descricao').value;
	
	if(ID != "" && descricao != "") {
		location.href = "./PHP/cad_garagem.php";
	}

	if(ID == "" && descricao == "") {
		alert('Digite as informações necessárias para poder finalizar seu cadastro!')
	}
	else if(ID == "") 
		alert('Digite seu ID!')
	else if(descricao == "") 
		alert('Digite sua descricao!')
}