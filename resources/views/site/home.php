<?php

echo "<pre>";
var_dump($notices);
echo "</pre>";
die;

$title = 'Home';
$titleH1 = 'Caála news';
$descriptionPage = 'Tudo o que acontence na Caála e no mundo, você encontra aqui.';
require_once '../resources/views/components/header.php';
?>
            <section class="notice">
                <!-- recent -->
                <h2><span>Notícia </span>Recentes</h2>
                <div>
                    <?php foreach($notices as $value): ?>
                    <article>
                        <figure><a href="/notice/<?php echo $value['slug'] ?>"><img src="/assets/image/notice/notice_escada_em_espiral.jpg" alt="Escada em espiral"></a></figure>

                        <p><?php echo $value['date'] ?> | <a href="/notice/category/<?php echo $value['fk_category'] ?>">Sociedade</a>, <a href="/notice/category/cultura">Cultura</a></p>

                        <h1><a href="/notice/<?php echo $value['slug'] ?>"><?php echo $value['title'] ?></a></h1>
                    </article>
                    <?php endforeach ?>
                </div>
            </section>
            <section class="notice">
                <h2><span>Notícias </span>Mais vistas</h2>
                <div>
                    <article>
                        <figure><a href="/notice/seedback-sandwitch"><img src="/assets/image/notice/notice_escada_em_espiral.jpg" alt="Escada em espiral"></a></figure>

                        <p>13/03/2024 | <a href="/notice/category/sociedade">Sociedade</a>, <a href="/notice/category/cultura">Cultura</a></p>

                        <h1><a href="/notice/seedback-sandwitch">Feedback sandwitch: como fazer crítica de forma assertiva?</a></h1>

                        <p><span>2.342</span> views</p>
                    </article>
                    <article>
                        <figure><a href="/notice/seedback-sandwitch"><img src="/assets/image/notice/notice_escada_em_espiral.jpg" alt="Escada em espiral"></a></figure>

                        <p>13/03/2024 | <a href="/notice/category/sociedade">Sociedade</a>, <a href="/notice/category/cultura">Cultura</a></p>

                        <h1><a href="/notice/seedback-sandwitch">Feedback sandwitch: como fazer crítica de forma assertiva?</a></h1>

                        <p><span>2.342</span> views</p>
                    </article>
                    <article>
                        <figure><a href="/notice/seedback-sandwitch"><img src="/assets/image/notice/notice_escada_em_espiral.jpg" alt="Escada em espiral"></a></figure>

                        <p>13/03/2024 | <a href="/notice/category/sociedade">Sociedade</a>, <a href="/notice/category/cultura">Cultura</a></p>

                        <h1><a href="/notice/seedback-sandwitch">Feedback sandwitch: como fazer crítica de forma assertiva?</a></h1>

                        <p><span>2.342</span> views</p>
                    </article>
                    <article>
                        <figure><a href="/notice/seedback-sandwitch"><img src="/assets/image/notice/notice_escada_em_espiral.jpg" alt="Escada em espiral"></a></figure>

                        <p>13/03/2024 | <a href="/notice/category/sociedade">Sociedade</a>, <a href="/notice/category/cultura">Cultura</a></p>

                        <h1><a href="/notice/seedback-sandwitch">Feedback sandwitch: como fazer crítica de forma assertiva?</a></h1>

                        <p><span>2.342</span> views</p>
                    </article>
                </div>
            </section>
            <section class="angola-city">
                <h2>Cidades de Angola</h2>

                <ul>
                    <li>
                        <img src="/assets/image/city/notice_reitoria_edif.jpg" alt="Cidade da caala">
                        <h1>Caála</h1>
                        <div>
                            <h1>Caála</h1>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, unde at? Tenetur fugit, minus delectus velit quam sequi commodi similique earum magni impedit consequuntur, consectetur sit eos qui blanditiis porro voluptatum.
                            </p>
                        </div>
                    </li>
                    <li>
                        <img src="/assets/image/city/notice_reitoria_edif.jpg" alt="Cidade da caala">
                        <h1>Caála</h1>
                        <div>
                            <h1>Caála</h1>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, unde at? Tenetur fugit, minus delectus velit quam sequi commodi similique earum magni impedit consequuntur, consectetur sit eos qui blanditiis porro voluptatum.
                            </p>
                        </div>
                    </li>
                    <li>
                        <img src="/assets/image/city/notice_reitoria_edif.jpg" alt="Cidade da caala">
                        <h1>Caála</h1>
                        <div>
                            <h1>Caála</h1>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, unde at? Tenetur fugit, minus delectus velit quam sequi commodi similique earum magni impedit consequuntur, consectetur sit eos qui blanditiis porro voluptatum.
                            </p>
                        </div>
                    </li>
                    <li>
                        <img src="/assets/image/city/notice_reitoria_edif.jpg" alt="Cidade da caala">
                        <h1>Caála</h1>
                        <div>
                            <h1>Caála</h1>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, unde at? Tenetur fugit, minus delectus velit quam sequi commodi similique earum magni impedit consequuntur, consectetur sit eos qui blanditiis porro voluptatum.
                            </p>
                        </div>
                    </li>
                </ul>
            </section>

<?php require_once '../resources/views/components/footer.php'; ?>