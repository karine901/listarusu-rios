<?php
// Inicia a sessão
session_start();
 
// Simula o usuário logado (substitua com a lógica de login real)
if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = 'Admin'; // Alterar conforme a autenticação
}
 
// Dados simulados para exibição na tabela
$usuarios = [
    ['id' => 1, 'nome' => 'João Silva', 'email' => 'joao@example.com', 'cargo' => 'Administrador'],
    ['id' => 2, 'nome' => 'Maria Oliveira', 'email' => 'maria@example.com', 'cargo' => 'Gerente'],
    ['id' => 3, 'nome' => 'Carlos Santos', 'email' => 'carlos@example.com', 'cargo' => 'Analista'],
];
 
// Nome do usuário logado
$usuarioLogado = $_SESSION['usuario'];
?>
 
