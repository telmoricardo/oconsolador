<?php
    $url = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
    $url = ($url ? $url : 'index');
    $url = explode('/', $url);
    $urlCod = $url[1];

    $catController = new CategoriaController();
    $articleController = new ArtigoController();
    $helper = new Helper();

    $cod = filter_input(INPUT_GET, 'cod', FILTER_VALIDATE_INT);
    $cat = $catController->retornaCategoria($urlCod);
    $cat->getCod();
    //LISTAGEM SUB CATEGORIA    
    $listArticle = $articleController->listarArticCat($cat->getCod(), 0, 10);    
?>
<!-- CONTENT -->
<main class="main-content-news">

<!-- SECTION LISTAGEM NEWS-->
<section class="sect-page-news">
    <h1 class="font-zero">O melhor portal de notícias</h1>
    <div class="content_">
        <article class="artc-news">

            <!-- LIST NEWS -->
            <div class="list-news">

            <?php
                if($listArticle == NULL):
            ?>                    

                    <div class="alert alert-danger" role="alert">
                    <h2>No momento não existe categoria de artigo.</h2>
                    </div>

            <?php
                else:
                    foreach ($listArticle as $article):                        
            ?>        

                <!-- NEWS -->
                <div class="card md-12 w-100">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="<?= HOME; ?>/upload/<?= $article->getThumb(); ?>" class="card-img w-100" alt="<?= $article->getTitulo(); ?>" title="<?= $article->getTitulo(); ?>"/>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title"><?= $helper->limitarTexto($article->getTitulo(), 30); ?></h5>
                                <p class="card-text">
                                    <?= html_entity_decode($helper->words($article->getBreve_descricao(), 10)); ?>
                                </p>
                                <p class="card-text"><small class="text-muted"><?= $helper->converteData($article->getData()); ?></small></p>
                                <a href="<?= HOME; ?>/artigo/<?= $article->getUrl() ?>" class="btn btn-read-more-news">
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
        </article>
    </div>
    <div class="clear"></div>
</section>
<!-- END SECTION LISTAGEM NEWS -->
</main>
<!-- END CONTENT -->
