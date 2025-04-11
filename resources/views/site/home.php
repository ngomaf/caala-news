<?php

$title = 'Home';
$titleH1 = 'Caála news';
$descriptionPage = 'Tudo o que acontence na Caála e no mundo, você encontra aqui.';

$cssPage = "<link rel='stylesheet' href='/assets/css/home.min.css'>";
$jsPage = "</script><script src='/assets/js/home.min.js'></script>";
require_once '../resources/views/components/header.php';
?>
            <section class="notice">
                <!-- recent -->
                <h2><span>Notícia </span>Recentes</h2>
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

            <section class="contact-us">
                <form action="" method="post">
                    <h2>Contacte-nos</h2>
                    <input type="email" name="email" id="email" placeholder="Seu e-mail"><br>
                    <textarea name="message" id="message" placeholder="Deixe aqui a sua mensagem..."></textarea><br>
                    <button type="reset">Limpar</button>
                    <button type="submit">Enviar</button>
                </form>
                <ul>
                    <li>
                        <h3>Telefone</h3>
                        <p>+244 222 222</p>
                    </li>
                    <li>
                        <h3>E-mail</h3>
                        <p>info@caalanews.ao</p>
                    </li>
                    <li>
                        <h3>Endereço</h3>
                        <p>Av. da indempendência/Caála/Huambo/Angola</p>
                    </li>
                </ul>
            </section>
            <!-- 
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
             -->

<?php require_once '../resources/views/components/footer.php'; ?>