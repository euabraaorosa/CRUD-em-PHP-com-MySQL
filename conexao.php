<?php

try {
	
	// Faz a conexao com o bando de dados
	$conectar = new PDO("mysql:host=localhost;port=3306;dbname=pdo;", "root", "");
	
} catch (PDOException $e) {
	
	// Em caso de erro de conexão com o banco de dados, exibe a mensagem
	echo 'Falha ao conectar com o banco de dados: ' , $e->getMessage();

}