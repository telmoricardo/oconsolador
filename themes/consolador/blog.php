<main class="main-blog">
    <!-- BLOG -->
    <section class="section-blog">
        <div class="bax-header">
            <h1>TODAS DO <small>BLOG</small></h1>
        </div>
        <!-- ARTICLE BLOG -->
        <article class="article-blog">
            <div class="bx-post">
                <?php
                for ($i = 0; $i <= 5; $i++):
                    ?>
                    <!-- POST -->
                    <div class="post">
                        <div class="thumb-post">
                            <a href="<?= HOME; ?>/artigo">
                                <img src="<?= INCLUDE_PATH; ?>/assets/image/2.jpg" alt="" srcset="">
                            </a>
                        </div>
                        <div class="description">
                            <div class="day">
                                <h3>29<br>
                                    <p>Jun</p>
                                </h3>
                            </div>
                            <div class="description-post">
                                <h2><a href="<?= HOME; ?>/artigo">DONATE FOR WATER</a></h2>
                                <p>
                                    Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor.
                                </p>
                            </div>

                        </div>
                    </div>
                    <!-- END POST -->
                    <?php
                endfor;
                ?> 
            </div>


            <div class="bx-pagination-template">
                <div class="pagination-template">
                    <ul>
                        <li>
                            <a href="">Início</a>
                        </li>
                        <li>
                            <a href="">1</a>
                        </li>
                        <li>
                            <a href="">2</a>
                        </li>
                        <li>
                            <a href="">3</a>
                        </li>
                        <li>
                            <a href="">4</a>
                        </li>
                        <li>
                            <a href="">5</a>
                        </li>
                        <li>
                            <a href="">Final</a>
                        </li>
                    </ul>
                </div>
            </div>

        </article>
        <!-- END ARTICLE BLOG -->
    </section>
    <!-- END BLOG -->
</main>
