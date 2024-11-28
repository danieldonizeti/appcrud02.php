<?php 
include 'principal_controller.php'; 

// Pega todos os produtos para preencher os dados da tabela 
$produtos = getProdutos();
?>

<?php include 'navbar.php'; ?>

<div class="container mt-4">
    <!-- Conteúdo da página -->
    <h2 class="text-center text-dark mb-4">Olá, <?php echo htmlspecialchars($nome); ?>!</h2>

    <div class="row">
        <?php foreach ($produtos as $produto): ?>    
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg border-light rounded" style="background-color: #ffffff;">
                    <!-- Aumentar a largura da imagem e centralizar -->
                    <img src="<?php echo $produto['url_img']; ?>" class="card-img-top rounded mx-auto d-block" alt="Imagem do Produto" style="width: 200px; height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title text-center text-dark"><?php echo $produto['nome']; ?></h5>
                        <p class="card-text text-muted"><?php echo $produto['descricao']; ?></p>
                        <p class="text-center"><strong>Preço:</strong> R$ <?php echo number_format($produto['valorunitario'], 2, ',', '.'); ?></p>
                        <!-- Formulário para adicionar ao carrinho -->
                        <form method="POST" action="principal.php">
                            <input type="hidden" name="id_produto" value="<?php echo $produto['id']; ?>">
                            <!-- Botão mais neutro -->
                            <button type="submit" name="adicionar_produto" class="btn btn-success btn-block">Comprar</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'footer2principal.php'; ?>
