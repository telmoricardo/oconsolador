<?php

$blogController = new ArtigoController();
$helper = new Helper();



//INICIO DE PAGINACAO
if (empty($_GET['pg'])):
else:
    $pg = $_GET['pg'];
endif;
if (isset($pg)):
    $pg = $_GET['pg'];
else:
    $pg = 1;
endif;
//máximo de links na paginação
$maxlinks = 10;
$maximo = 6;
$inicio = ($pg * $maximo) - $maximo;
$listBog = $blogController->listarArtigoLimite($inicio, $maximo);
?>

<?php

$bannerControll = new SliderController();
$tipo = "n";
$bannerAbout = $bannerControll->getTypeLimit($tipo, 0, 1);
foreach ($bannerAbout as $banner):
    if ($banner != NULL):
        ?>
<!-- BANNER NEWS -->
<div class="bx-banner-news card-img text-white"
     style="
             background: url(<?= HOME; ?>/upload/<?= $banner->getSlider_thumb(); ?>) #BC7B74;
             width: 100%;
             height: 250px;
             background-position-x: left, bottom, center;
             background-repeat: no-repeat;
             background-attachment: fixed;
             background-size: cover;
			 border-radius: 0;
             ">     
        <div class="card-img-overlay text-left header-news_">
            <div class="content_">
                 <h1 class="card-title"><?= $banner->getSlider_titulo(); ?></h1>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <!-- END BANNER NEWS -->
   <?php
    endif;
endforeach;
?>
    <!-- CONTENT -->
    <main class="main-content-news">

        <!-- SECTION LISTAGEM NEWS-->
        <section class="sect-page-news">
            <h1 class="font-zero">O melhor portal de notícias</h1>
            <div class="content_">
                <article class="artc-news">
                    <div class="bx-search-news">
                        <form method="post" action="<?= HOME; ?>/single">
                            <div class="row-sbmit-search">
                                <input type="text" class="serch" name="search" placeholder="Pesquisar um assunto" />
                                <span class="icon-search-news">
                                    <img class="search-icon"
                                        src="data:image/svg+xml;base64,
PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGlkPSJDYXBhXzEiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDUxNS41NTggNTE1LjU1OCIgaGVpZ2h0PSI1MTIiIHZpZXdCb3g9IjAgMCA1MTUuNTU4IDUxNS41NTgiIHdpZHRoPSI1MTIiPjxnPjxwYXRoIGQ9Im0zNzguMzQ0IDMzMi43OGMyNS4zNy0zNC42NDUgNDAuNTQ1LTc3LjIgNDAuNTQ1LTEyMy4zMzMgMC0xMTUuNDg0LTkzLjk2MS0yMDkuNDQ1LTIwOS40NDUtMjA5LjQ0NXMtMjA5LjQ0NCA5My45NjEtMjA5LjQ0NCAyMDkuNDQ1IDkzLjk2MSAyMDkuNDQ1IDIwOS40NDUgMjA5LjQ0NWM0Ni4xMzMgMCA4OC42OTItMTUuMTc3IDEyMy4zMzctNDAuNTQ3bDEzNy4yMTIgMTM3LjIxMiA0NS41NjQtNDUuNTY0YzAtLjAwMS0xMzcuMjE0LTEzNy4yMTMtMTM3LjIxNC0xMzcuMjEzem0tMTY4Ljg5OSAyMS42NjdjLTc5Ljk1OCAwLTE0NS02NS4wNDItMTQ1LTE0NXM2NS4wNDItMTQ1IDE0NS0xNDUgMTQ1IDY1LjA0MiAxNDUgMTQ1LTY1LjA0MyAxNDUtMTQ1IDE0NXoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiIHN0eWxlPSJmaWxsOiNCQzdCNzQiPjwvcGF0aD48L2c+IDwvc3ZnPg==" />
                                </span>
                            </div>
                            <input type="submit" name="btnSearch" class="btn btn-submit-search" value="Buscar">
                        </form>
                    </div>
                    <!-- END BOX SEARCH NEWS -->

                    <!-- LIST NEWS -->
                    <div class="list-news">

                    <?php
                    if ($listBog != NULL):
                        foreach ($listBog as $list):
                        ?>

                        <!-- NEWS -->
                        <div class="card md-12 w-100">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="thumb"                            
											style="
											background: url(<?= HOME; ?>/upload/<?= $list->getThumb();?>);
											background-position: center;
											background-size: cover;
											background-repeat: no-repeat;
											width: 100%;
											height: 250px; ">
										</div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $helper->limitarTexto($list->getTitulo(), 30); ?></h5>
                                        <p class="card-text">
                                            <?= html_entity_decode($helper->Words ($list->getBreve_descricao(), 10)); ?>
                                        </p>
                                        <p class="card-text"><small class="text-muted"><?= $helper->converteData($list->getData()); ?></small></p>
                                        <a href="<?= HOME; ?>/artigo/<?= $list->getUrl(); ?>" class="btn btn-read-more-news">
                                            Leia mais
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END NEWS -->
                        <?php
                    endforeach;
                endif;
                ?>   
                       

                    </div>
                    <!-- END LIST NEWS -->

                    <!-- PAGINATION -->
                <?php
                   
                   $total = $blogController->retornaQtdArtigo();
                   $total_paginas = ceil($total / $maximo);
                   if ($total > $maximo): 
                    echo '<div class="bx-news-pagination">';
                    echo '<div class="news-pagination">';
                    echo '<nav aria-label="Page navigation example">';
                    echo '<ul class="pagination">';
                    echo '<li class="page-item">
                                        <a class="page-link" href="' . HOME . '/noticias&pg=1" aria-label="Previous">
                                            <span class="previus-news" aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>';
                                    for ($i = $pg - $maxlinks; $i <= $pg - 1; $i++):
                                        if ($i >= 1):
                                            echo '<li class="page-item"><a class="page-link" href="' . HOME . '/noticias&pg=' . $i . '">' . $i . '</a></li>';
                                        endif;
                                    endfor;       

                                    echo '<li class="page-item active"><a class="page-link" href="' . HOME . '/noticias&pg=' . $pg . '">' . $pg . '</a></li>';
                                    
                            for ($i = $pg + 1; $i <= $pg + $maxlinks; $i++):
                                if ($i <= $total_paginas):
                                   echo '<li class="page-item"><a class="page-link" href="' . HOME . '/noticias&pg=' . $i . '">' . $i . '</a></li>';
                                endif;
                            endfor;
                                    echo '<li class="page-item">
                                        <a class="page-link" href="' . HOME . '/noticias&pg=' . $total_paginas . '" aria-label="Next">
                                            <span class="previus-news" aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>';
                                echo '</ul>';
                                echo '</nav>';
                                echo'</div>';
                                echo '</div>';
                            endif;
                    ?>

                </article>
            </div>
            <div class="clear"></div>
        </section>
        <!-- END SECTION LISTAGEM NEWS -->
    </main>
    <!-- END CONTENT -->
