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
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuários</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php include 'partials/navbar.php'; ?>
 
    <div class="container">
        <h1>Lista de Usuários</h1>
        <table class="tabela">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Cargo</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= $usuario['id'] ?></td>
                    <td><?= htmlspecialchars($usuario['nome']) ?></td>
                    <td><?= htmlspecialchars($usuario['email']) ?></td>
                    <td><?= htmlspecialchars($usuario['cargo']) ?></td>
                    <td><a href="editar-usuario.php?id=<?= $usuario['id'] ?>" class="btn-editar">Editar</a></td>
                    <td><a href="excluir-usuario.php?id=<?= $usuario['id'] ?>" class="btn-excluir" onclick="return confirm('Deseja realmente excluir este usuário?');">Excluir</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <p class="link-repo">
            Link do Repositório:
<a href="https://github.com/seu-usuario/seu-repositorio" target="_blank">GitHub - Projeto</a>
        </p>
    </div>
</body>
</html>
 

 