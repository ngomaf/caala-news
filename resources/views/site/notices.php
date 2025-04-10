<?php

$title = 'Notícias';
$titleH1 = $title;
$descriptionPage = 'Tudo o que acontence na Caála e no mundo, você encontra aqui.';
$cssPage = "<link rel='stylesheet' href='/assets/css/default.css'><link rel='stylesheet' href='/assets/css/notice.css'>";
require_once '../resources/views/components/header.php';
?>
            <section class="notice">
                <!-- recent -->
                <h2><span>Notícia Recentes</span></h2>
                <form action="" method="post">
                    <input type="text" name="search-notice" id="search-notice" placeholder="Pesquisar notícias...">
                    <button type="submit">Pesquisar</button>
                </form>

                <div>
                    <?php foreach($datas as $value): ?>
                    <article>
                        <figure><a href="/notice/<?php echo $value['slug'] ?>"><img src="/assets/image/notice/<?php echo $value['fk_image']['image'] ?>" alt="<?php echo $value['fk_image']['alternative_text'] ?>"></a></figure>

                        <p><?php echo $this->procDate($value['date']) ?> | <a href="/notice/category/<?php echo $value['fk_category']['slug'] ?>"><?php echo $value['fk_category']['name'] ?></a></p>

                        <h1><a href="/notice/<?php echo $value['slug'] ?>"><?php echo $value['title'] ?></a></h1>
                    </article>
                    <?php endforeach ?>
                </div>
            </section>
            <section class="notice">
                <h2><span>Notícias </span>Mais vistas</h2>
                <div>
                    <?php foreach($moreViews as $value): ?>
                    <article>
                        <figure><a href="/notice/<?php echo $value['slug'] ?>"><img src="/assets/image/notice/<?php echo $value['fk_image']['image'] ?>" alt="<?php echo $value['fk_image']['alternative_text'] ?>"></a></figure>

                        <p><?php echo $this->procDate($value['date']) ?> | <a href="/notice/category/<?php echo $value['fk_category']['slug'] ?>"><?php echo $value['fk_category']['name'] ?></a></p>

                        <h1><a href="/notice/<?php echo $value['slug'] ?>"><?php echo $value['title'] ?></a></h1>

                        <p><span><?php echo $this->procNum($value['views']) ?></span> views</p>
                    </article>
                    <?php endforeach ?>
                </div>
            </section>

<?php require_once '../resources/views/components/footer.php'; ?>