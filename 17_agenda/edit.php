<?php 
include_once('templates/header.php');
?>

    <div class="container">
    <?php include_once('templates/backbtn.html'); ?>
        <h1 id="main-title">Editar Contato</h1>
        <form id="create-form" action="./config/process.php" method="post">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $contact['id'] ?>">
            <div class="form-group">
                <label for="name">Nome do contato:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required
                value="<?= $contact['name'] ?>">
            </div>
            <div class="form-group">
                <label for="phone">Telefone do contato:</label>
                <input type="tel" class="form-control" id="phone" name="phone" pattern="\([0-9]{2}\)[0-9]{5}-[0-9]{4}" placeholder="(99)99999-9999" required value="<?= $contact['phone'] ?>">
            </div>
            <div class="form-group">
                <label for="observations">Observações:</label>
                <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira as observações" rows="3"><?= $contact['observations'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>

<?php
include_once('templates/footer.php');

?>