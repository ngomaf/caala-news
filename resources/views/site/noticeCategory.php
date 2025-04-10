<?php

$title = ucfirst($category[0]) . ' - Categoria - Notícias';
$titleH1 = '<small>'. ucfirst($category[0]) .'</small>';
$descriptionPage = $category[2] . ' noctícias da categoria ' . $category[0];
$cssPage = "<link rel='stylesheet' href='/assets/css/notice.min.css'>";
require_once '../resources/views/components/header.php';
?>
            <section class="notice">
                <div>
                    <article>
                        <figure><a href="/notice/seedback-sandwitch"><img src="/assets/image/notice/notice_escada_em_espiral.jpg" alt="Escada em espiral"></a></figure>

                        <p>13/03/2024 | <a href="/notice/category/sociedade">Sociedade</a>, <a href="/notice/category/cultura">Cultura</a></p>

                        <h1><a href="/notice/seedback-sandwitch">Feedback sandwitch: como fazer crítica de forma assertiva?</a></h1>
                    </article>
                    <article>
                        <figure><a href="/notice/seedback-sandwitch"><img src="/assets/image/notice/notice_escada_em_espiral.jpg" alt="Escada em espiral"></a></figure>

                        <p>13/03/2024 | <a href="/notice/category/sociedade">Sociedade</a>, <a href="/notice/category/cultura">Cultura</a></p>

                        <h1><a href="/notice/seedback-sandwitch">Feedback sandwitch: como fazer crítica de forma assertiva?</a></h1>
                    </article>
                    <article>
                        <figure><a href="/notice/seedback-sandwitch"><img src="/assets/image/notice/notice_escada_em_espiral.jpg" alt="Escada em espiral"></a></figure>

                        <p>13/03/2024 | <a href="/notice/category/sociedade">Sociedade</a>, <a href="/notice/category/cultura">Cultura</a></p>

                        <h1><a href="/notice/seedback-sandwitch">Feedback sandwitch: como fazer crítica de forma assertiva?</a></h1>
                    </article>
                </div>
            </section>
            <section class="notice cat">
                <h2>Todas as categorias</h2>
                <div>
                    <?php foreach($categories as $value): ?>
                    <article><a href="/notice/category/<?= $value[1] ?>">
                        <h1><?= $value[0] ?></h1>
                        <p><?= $value[2] ?> notícias</p>
                    </a></article>
                    <?php endforeach ?>
                </div>
            </section>

<?php require_once '../resources/views/components/footer.php'; ?>