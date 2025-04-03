<?php

$title = 'Erro ' . $error;
require_once '../resources/views/components/header.php';
?>

            <section class="error">
                <h2>Erro <?= $error ?></h2>

                <p>Lamentamos, não foi possível encontrar a página requisitada.</p>

                <p>
                    Sinta-se avontade em usar o menu, para explorar a excelentes alternativas que temos para ti...
                </p>

                <ul>
                    <li><small><pre>--</pre></small></li>
                    <li><small><pre>error number: <?= $error ?></pre></small></li>
                    <li><small><pre>error message: <?= $message ?></pre></small></li>
                </ul>
            </section>


<?php require_once '../resources/views/components/footer.php'; ?>