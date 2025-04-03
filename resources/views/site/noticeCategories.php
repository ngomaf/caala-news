<?php

$title = 'Categorias | Notícias';
$titleH1 = 'Categorias';
$descriptionPage = 'Categorias de notícias da Caála news.';
require_once '../resources/views/components/header.php';
?>
            <section class="notice">
                <div>
                    <?php foreach($categories as $value): ?>
                    <article>
                        <figure><a href="/notice/category/<?= $value[1] ?>"><img src="/assets/image/notice/notice_escada_em_espiral.jpg" alt="Escada em espiral"></a></figure>
                        <p>Categoria</p>
                        <h1><a href="/notice/category/<?= $value[1] ?>"><?= $value[0] ?> <span>(<?= $value[2] ?>)</span></a></h1>
                    </article>
                    <?php endforeach ?>
                </div>
            </section>

<?php require_once '../resources/views/components/footer.php'; ?>