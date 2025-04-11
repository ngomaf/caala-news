<?php

$title = $notice['title'];
$cssPage = "<link rel='stylesheet' href='/assets/css/notice.min.css'>";
require_once '../resources/views/components/header.php';
?>

            <section class="single">
                <h2><?= $notice['title'] ?></h2>

                <p class="date-cat">Publicado aos: <?= $this->procDate($notice['date']) ?> | categoria: <a href="/notice/category/<?php echo $notice['fk_category']['slug'] ?>"><?php echo $notice['fk_category']['name'] ?></a></p>

                <figure>
                    <img src="/assets/image/notice/<?php echo $notice['fk_image']['image'] ?>" alt="<?php echo $notice['fk_image']['alternative_text'] ?>">
                    <figcaption><?php echo $notice['fk_image']['alternative_text'] ?></figcaption>
                </figure>

                <div class="content">
                    
                    <?= $notice['content'] ?>

                </div>


                <ul class="meta-data">
                    <li><small><pre>--</pre></small></li>
                    <li><small><pre>created at: <?= $this->procDate($notice['date']) ?></pre></small></li>
                    <li><small><pre>updated at: <?= $this->procDate($notice['date']) ?></pre></small></li>
                </ul>
            </section>


<?php require_once '../resources/views/components/footer.php'; ?>