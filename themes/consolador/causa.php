<main class="main-cause">
    <!--SECTION CAUSE-->
    <section class="section-cause">
        <div class="header-cause">
            <h1>Nossa Causa</h1>
        </div>        
        <!--ARTICLE CAUSE-->
        <article class="article-cause">
            <!--CAUSE-->
            <div class="cause">
                <div class="thumb-cause">
                    <img src="<?= INCLUDE_PATH; ?>/assets/image/cases3.jpg" alt="">
                </div>
                <div class="desc-cause">
                    <h2>DONATE FOR WATER</h2>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                </div>

                <!--LIKE FACEBOOK-->
                <div class="bx-like-face">
                    <div class="like-face">
                        <div class="fb-like" data-href="http://localhost/projetos/consolador/causa" data-width="" data-layout="button" data-action="like" data-size="small" data-share="true"></div>
                    </div>
                </div>
                <!--END LIKE FACEBOOK-->
            </div>
            <!--END CAUSE-->
        </article>
        <!--END ARTICLE CAUSE-->
        <!--ARTICLE SEE MORE-->
        <article class="article-see-more">
            <div class="header-see-more">
                <h2>Veja Mais</h2>
            </div>
            <!--BOX SEE MORE-->
            <div class="bx-see-more">
                <?php
                for ($i = 0; $i <= 5; $i++):
                    ?>
                    <!--SEE MORE-->
                    <div class="see-more">
                        <div class="thumb-see-more">
                            <a href="">
                                <img src="<?= INCLUDE_PATH; ?>/assets/image/cases3.jpg" alt="">
                            </a>
                        </div>
                        <div class="desc-see-more">
                            <h2><a href="">DONATE FOR WATER</a></h2>
                            <p>Lorem Ipsum has... </p>
                        </div>
                    </div>
                    <!--END SEE MORE-->
                    <?php
                endfor;
                ?>
            </div>
            <!--END BOX SEE MORE-->
        </article>
        <!--END SEE MORE-->
    </section>
    <!--END SECTION CAUSE-->
</main>