<?php
$host = 'localhost';
$db = 'atividade_anajulia'; // Tente em minúsculas
$user = 'postgres';
$pass = '123456'; // <-- Coloque sua senha do pgAdmin aqui
$port = '5432'; // Porta padrão do Postgres

try {
    // String de conexão (DSN)
    $dsn = "pgsql:host=$host;port=$port;dbname=$db";
    
    // Cria a conexão via PDO
    $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    if ($pdo) {
        echo "Conectado ao banco **$db** com sucesso!";
    }
} catch (PDOException $e) {
    // Exibe o erro caso a conexão falhe
    die("Erro ao conectar: " . $e->getMessage());
}