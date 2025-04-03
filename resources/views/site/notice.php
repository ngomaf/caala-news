<?php

$title = $notice['title'];
require_once '../resources/views/components/header.php';
?>

            <section>
                <h2><?= $notice['title'] ?></h2>

                <?= $notice['content'] ?>

                <ul class="meta-data">
                    <li><small><pre>--</pre></small></li>
                    <li><small><pre>created at: <?= $notice['date'] ?></pre></small></li>
                    <li><small><pre>updated at: <?= $notice['date'] ?></pre></small></li>
                </ul>
            </section>


<?php require_once '../resources/views/components/footer.php'; ?>