<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Recebe os dados do formulário
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$telefone = $_POST["telefone"];
	$sabor = $_POST["sabor"];
	$recheio = $_POST["recheio"];
        $quantidade = $_POST["quantidade"];
	$mensagem = $_POST["mensagem"];
        $data = $_POST["data"];
        $rua = $_POST["rua"];
        $n�mero = $_POST["n�mero"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $cep = $_POST["cep"];
        $complemento = $_POST["complemento"];

	// Processa os dados recebidos
	// Aqui você pode fazer o que quiser com as informações recebidas, como salvá-las em um banco de dados, enviar um email, etc.

	// Exemplo de exibição dos dados recebidos
	echo "Nome: $nome <br>";
	echo "Email: $email <br>";
	echo "Telefone: $telefone <br>";
	echo "Sabor de brownie: $sabor <br>";
	echo "Recheio adicional: $recheio <br>";
        echo "Quantidade de brownies: $quantidade <br>";
	echo "Mensagem: $mensagem <br>";
        echo "Data: $data <br>";
        echo "Rua: $rua <br>";
        echo "N�mero: $n�mero <br>";
        echo "Bairro: $bairro <br>";
        echo "Cidade: $cidade <br>";
        echo "CEP: $cep <br>";
        echo "Complemento: $complemento <br>";

} else {
	// Se a requisição não for POST, redireciona para a página do formulário
	header("Location: form.html");
	exit();
}
?>