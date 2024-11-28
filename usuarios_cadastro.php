<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>CRUD de Usuários</title>
</head>
<body style="background-color: #f4f7fc;">
    <!-- Insere o JavaScript -->
    <script src="java/main.js"></script>

    <div class="container mt-4">
        <h2 class="text-center text-dark mb-4">Cadastro de Usuários</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="" style="background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <input type="hidden" id="id" name="id" value="<?php echo $userToEdit['id'] ?? ''; ?>">

                    <div class="form-group">
                        <label for="nome" class="text-dark">Nome:</label>
                        <input type="text" id="nome" name="nome" class="form-control" value="<?php echo $userToEdit['nome'] ?? ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="telefone" class="text-dark">Telefone:</label>
                        <input type="text" id="telefone" name="telefone" class="form-control" value="<?php echo $userToEdit['telefone'] ?? ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="text-dark">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" value="<?php echo $userToEdit['email'] ?? ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="senha" class="text-dark">Senha:</label>
                        <input type="password" id="senha" name="senha" class="form-control" required>
                    </div>

                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-success" name="save">Salvar</button>
                        <button type="submit" class="btn btn-primary" name="update">Atualizar</button>
                        <button type="button" class="btn btn-secondary" onclick="clearForm()">Novo</button>
                    </div>
                </form>
            </div>
        </div>

        <h2 class="mt-5 text-center text-dark">Usuários Cadastrados</h2>

        <div class="table-responsive">
            <table class="table table-striped table-bordered my-4" style="background-color: #ffffff; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <thead style="background-color: #f0f4f7;">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo $user['id']; ?></td>
                            <td><?php echo $user['nome']; ?></td>
                            <td><?php echo $user['telefone']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td>
                                <a href="?edit=<?php echo $user['id']; ?>" class="btn btn-info btn-sm">Editar</a>
                                <a href="?delete=<?php echo $user['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?');" class="btn btn-danger btn-sm">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

   <?php
   include 'footer2.php';
   ?>
</body>
</html>
