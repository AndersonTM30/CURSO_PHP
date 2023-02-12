<?php
// importando o template do header
include_once('templates/header.php');

if (isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}

?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="./img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque doloribus itaque, iusto voluptates repellat soluta laborum ipsum, quod placeat, magnam similique cumque ab! Ipsam quaerat, veniam enim consequatur quo fuga?
            Nihil ipsam quibusdam debitis quaerat dolor excepturi doloremque, velit distinctio commodi amet ab aperiam vel dolorum in quam quo, est officiis officia a harum saepe et? Debitis voluptatibus dolor hic!
            Laborum fugit cum magnam aperiam reiciendis molestias et reprehenderit. Laudantium vero enim animi voluptatum odit. Modi sit aspernatur eveniet consectetur mollitia velit nulla, provident voluptates et earum tempora at vero!
            Temporibus qui nostrum necessitatibus repellendus odit quia error repellat, quas dolores non tempore fuga! Est saepe eligendi quis culpa cupiditate, debitis architecto tempora veritatis fugit, iusto inventore provident voluptatem nisi?
            Temporibus illo modi dignissimos quia eligendi, eveniet delectus eum itaque omnis sequi explicabo. Ex tempora praesentium itaque, sequi adipisci veniam iusto debitis? Saepe neque nesciunt cumque perspiciatis inventore, tenetur libero.
        </p>
        <p class="post-content">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque doloribus itaque, iusto voluptates repellat soluta laborum ipsum, quod placeat, magnam similique cumque ab! Ipsam quaerat, veniam enim consequatur quo fuga?
            Nihil ipsam quibusdam debitis quaerat dolor excepturi doloremque, velit distinctio commodi amet ab aperiam vel dolorum in quam quo, est officiis officia a harum saepe et? Debitis voluptatibus dolor hic!
            Laborum fugit cum magnam aperiam reiciendis molestias et reprehenderit. Laudantium vero enim animi voluptatum odit. Modi sit aspernatur eveniet consectetur mollitia velit nulla, provident voluptates et earum tempora at vero!
            Temporibus qui nostrum necessitatibus repellendus odit quia error repellat, quas dolores non tempore fuga! Est saepe eligendi quis culpa cupiditate, debitis architecto tempora veritatis fugit, iusto inventore provident voluptatem nisi?
            Temporibus illo modi dignissimos quia eligendi, eveniet delectus eum itaque omnis sequi explicabo. Ex tempora praesentium itaque, sequi adipisci veniam iusto debitis? Saepe neque nesciunt cumque perspiciatis inventore, tenetur libero.
        </p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag) : ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category) : ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>
<?php
// template do footer
include_once('templates/footer.php');

?>