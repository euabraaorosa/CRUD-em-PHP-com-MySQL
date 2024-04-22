<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e2e2e2;
        }
    </style>
</head>
<body>

<?php
include_once "conexao.php";

try {
    
    // executa o script do sql
    $consulta = $conectar->query("SELECT * FROM login");
    
    echo "<a href='formCadastro.php'>Novo Cadastro</a><br>Listagem de Usuários";
    
    echo "<table><tr><th>Nome</th><th>Login</th><th>Ações</th></tr>";
    
    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            
        echo "<tr><td>{$linha['nome']}</td><td>{$linha['login']}</td><td><a href='formEditar.php?id={$linha['id']}'>Editar</a> - <a href='excluir.php?id={$linha['id']}'>Excluir</a></td></tr>";
            
    }
    
    echo "</table>";
    
    echo $consulta->rowCount() . " Registros encontrados";
    
} catch (PDOException $e) {
    
    echo $e->getMessage();
        
}
?>

</body>
</html>