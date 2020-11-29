<?php

$artigoController = new ArtigoController();
$helper = new Helper();
$termo = filter_input(INPUT_POST, "search", FILTER_SANITIZE_STRING);
?>
<?php

$bannerControll = new SliderController();
$tipo = "a";
$bannerAbout = $bannerControll->getTypeLimit($tipo, 0, 1);
foreach ($bannerAbout as $banner):
    if ($banner != NULL):
        ?>
<!-- BANNER NEWS -->
<div class="bx-banner-news card text-white"
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
        <div class="card-img-overlay text-left">
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
                    

                    <!-- LIST NEWS -->
                    <div class="list-news">
                    <?php
                        $listarPesquisa = $artigoController->buscarSearch($termo);
                        if ($termo != NULL && $termo != ""):
                            foreach ($listarPesquisa as $list):
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
                                        <?= $helper->limitarTexto($list->getBreve_descricao(), 30); ?>                                        
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
                else:
                    ?>
                    <h1>Não foi possível encontrar o item de pesquisa</h1>
                    
                    <?php
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
