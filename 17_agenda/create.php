<?php 
include_once('templates/header.php');
?>

    <div class="container">
    <?php include_once('templates/backbtn.html'); ?>
        <h1 id="main-title">Criar Contato</h1>
        <form id="create-form" action="./config/process.php" method="post">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="name">Nome do contato:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
            </div>
            <div class="form-group">
                <label for="phone">Telefone do contato:</label>
                <input type="tel" class="form-control" id="phone" name="phone" pattern="\([0-9]{2}\)[0-9]{5}-[0-9]{4}" placeholder="(99)99999-9999" required>
            </div>
            <div class="form-group">
                <label for="observations">Observações:</label>
                <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira as observações" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

<?php
include_once('templates/footer.php');

?>