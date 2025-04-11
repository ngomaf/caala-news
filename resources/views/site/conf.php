<?php

$title = 'Minificar CSS e JS';
$cssPage = "<link rel='stylesheet' href='/assets/css/conf.min.css'>";
require_once '../resources/views/components/header.php';
?>

        <section>
            <?php echo ($msg != '')? "<a href='/conf'><small>x</small></a>": "<h1>Minificar CSS e JS</h1>" ?>
            <br>
            <?php echo $msg ?? null ?>

            <div>
                <form action="/conf/default" method="post">
                    <p>Minificar <strong>CSS</strong> do arquivo <strong>Default</strong></p>
                    <button type="submit">Minificar</button>
                </form>
                <form action="/conf/defaultJS" method="post">
                    <p>Minificar <strong>JS</strong> do arquivo <strong>Default</strong></p>
                    <button type="submit">Minificar</button>
                </form>
            </div>

            <div>
                <form action="/conf/conf" method="post">
                    <p>Minificar <strong>CSS</strong> do arquivo <strong>Conf</strong></p>
                    <button type="submit">Minificar</button>
                </form>
                <form action="/conf/confJS" method="post">
                    <p>Minificar <strong>JS</strong> do arquivo <strong>Conf</strong></p>
                    <button type="submit">Minificar</button>
                </form>
            </div>

            <div>
                <form action="/conf/home" method="post">
                    <p>Minificar <strong>CSS</strong> da página <strong>Home</strong></p>
                    <button type="submit">Minificar</button>
                </form>
                <form action="/conf/homeJS" method="post">
                    <p>Minificar <strong>JS</strong> da página <strong>Home</strong></p>
                    <button type="submit">Minificar</button>
                </form>
            </div>

            <div>
                <form action="/conf/notice" method="post">
                    <p>Minificar <strong>CSS</strong> da página <strong>Notice</strong></p>
                    <button type="submit">Minificar</button>
                </form>
                <form action="/conf/noticeJS" method="post">
                    <p>Minificar <strong>JS</strong> da página <strong>Notice</strong></p>
                    <button type="submit">Minificar</button>
                </form>
            </div>

            <div>
                <form action="/conf/error" method="post">
                    <p>Minificar <strong>CSS</strong> da página <strong>Error</strong></p>
                    <button type="submit">Minificar</button>
                </form>
                <form action="/conf/errorJS" method="post">
                    <p>Minificar <strong>JS</strong> da página <strong>Error</strong></p>
                    <button type="submit">Minificar</button>
                </form>
            </div>
        </section>
            

<?php require_once '../resources/views/components/footer.php'; ?>