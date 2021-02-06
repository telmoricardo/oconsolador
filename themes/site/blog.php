<?php
$postController = new \App\Controller\PostController();
$helper = new \App\Helper\Helper();

$category = 2;
$ative = 1;

//máximo de links na paginação
$maxlinks = 4;
$pagina = (isset($_GET['pagina'])) ? ($_GET['pagina']) : 1;
//quantidade de publicação por páginas
$maximo = 6;
$inicio = (($maximo * $pagina) - $maximo);


$lista = $postController->allStatusCategory($ative, $category, $inicio, $maximo);
?>
<main class="main-blog">
    <!-- BLOG -->
    <section class="section-blog">
        <div class="bax-header">
            <h1>BLOG</h1>
        </div>
        <!-- ARTICLE BLOG -->
        <article class="article-blog">
            <div class="bx-post">
                <?php
                if($lista == null):
                    echo "Não existem posts no momento";
                else:
                foreach ($lista as $post):
                    ?>
                    <!-- POST -->
                    <div class="post">
                        <div class="thumb-post">
                            <a href="<?= HOME; ?>/artigo/<?= $post->url; ?>">
                                <img src="./upload/<?= $post->thumb; ?>" alt="" srcset="">
                            </a>
                        </div>
                        <div class="description">
                            <div class="day">
                                <?php
                                $data = $helper->converteData($post->data);
                                $d = explode("/", $data);
                                ?>
                                <h3><?= $d[0] ?><br>
                                    <p><?= $helper->pegarMes($d[1]); ?></p>
                                </h3>
                            </div>
                            <div class="description-post">
                                <h2><a href="<?= HOME; ?>/artigo/<?= $post->url; ?>"><?= $post->title; ?></a></h2>
                                <p>
                                    <?= $helper->limitarTexto($post->resume, 50);
                                    ?>
                                </p>
                            </div>

                        </div>
                    </div>
                    <!-- END POST -->
                    <?php
                    endforeach;
                endif;
                ?> 
            </div>


            <div class="bx-pagination-template">

                <?php
                //paginação de resultados
                $total = $postController->countPostsStatus(1);
                $total_paginas = ceil($total / $maximo);
                if ($total > $maximo):
                    echo '<div class="paginator">';
                    echo '<ul class="pagination2">';
                    echo '<li><a href="blog&pagina=1">Primeira Página</a></li>';
                    for ($i = $pagina - $maxlinks; $i <= $pagina - 1; $i++):
                        if ($i >= 1):
                            echo '<li><a class="page-link" href="blog&pagina=' . $i . '">' . $i . '</a><li>';
                        endif;
                    endfor;
                    echo '<li class="active"><a href="blog&pagina=' . $pagina . '">' . $pagina . '</a></li>';
                    for ($i = $pagina + 1; $i <= $pagina + $maxlinks; $i++):
                        if ($i <= $total_paginas):
                            echo '<li><a  href="blog&pagina=' . $i . '">' . $i . '</a></li>';
                        endif;
                    endfor;
                    echo '<li ><a  href="blog&pagina=' . $total_paginas . '"">Última Página</a></li>';
                    echo '</ul>';
                    echo '</div>';
                endif;
                ?>
            </div>

<!--                <div class="pagination-template">
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
                </div>-->
<!--            </div>-->

        </article>
        <!-- END ARTICLE BLOG -->
    </section>
    <!-- END BLOG -->
</main>
