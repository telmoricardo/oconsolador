<?php
$url = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$url = explode('/', $url);
$slug = $url[1];
$postController = new \App\Controller\PostController();
$helper  = new \App\Helper\Helper();

$dados = $postController->find("url", $slug);
if($dados != null):
    $title = $dados->title;
    $author = $dados->author;
    $statusS = $dados->status;
    $description = $dados->description;
    $idCategory = $dados->category;
    $data = $dados->data;
    $image = $dados->thumb;
endif;
?>
<main class="main-artic container_">
    <div class="box-article-full">
        <!--SEARCH-->
        <div class="bx-search-top">
            <article class="search-top">
                <!--<article class="search-aside">-->
                <form class="form-search-aside" method="post" action="">
                    <input type="search" name="search" class="search-aside" placeholder="Pesquise...">
                    <button type="submit" class="btnSearch">
                        <i class="icon-search-artcle">
                            <img src="data:image/svg+xml;base64,
                                 PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNTExLjk5OSA1MTEuOTk5IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTEuOTk5IDUxMS45OTk7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiI+PGc+PGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNTA4Ljg3NCw0NzguNzA4TDM2MC4xNDIsMzI5Ljk3NmMyOC4yMS0zNC44MjcsNDUuMTkxLTc5LjEwMyw0NS4xOTEtMTI3LjMwOWMwLTExMS43NS05MC45MTctMjAyLjY2Ny0yMDIuNjY3LTIwMi42NjcgICAgUzAsOTAuOTE3LDAsMjAyLjY2N3M5MC45MTcsMjAyLjY2NywyMDIuNjY3LDIwMi42NjdjNDguMjA2LDAsOTIuNDgyLTE2Ljk4MiwxMjcuMzA5LTQ1LjE5MWwxNDguNzMyLDE0OC43MzIgICAgYzQuMTY3LDQuMTY1LDEwLjkxOSw0LjE2NSwxNS4wODYsMGwxNS4wODEtMTUuMDgyQzUxMy4wNCw0ODkuNjI3LDUxMy4wNCw0ODIuODczLDUwOC44NzQsNDc4LjcwOHogTTIwMi42NjcsMzYyLjY2NyAgICBjLTg4LjIyOSwwLTE2MC03MS43NzEtMTYwLTE2MHM3MS43NzEtMTYwLDE2MC0xNjBzMTYwLDcxLjc3MSwxNjAsMTYwUzI5MC44OTYsMzYyLjY2NywyMDIuNjY3LDM2Mi42Njd6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiMwMDAwMDAiPjwvcGF0aD4KCTwvZz4KPC9nPjwvZz4gPC9zdmc+" />
                        </i>
                    </button>
                </form>
            </article>
            <!--END SEARCH-->
        </div>
        <!--END SEARCH-->
        <section class="sec-artic">
            <h1 class="font-zero">Artigo Consolador | consolador.org.br</h1>
            <article class="art-artic">
                <h2><?= strtoupper($title) ?></h2>
                <p><strong>Por:</strong> <?= $author?> as <span> <?= $helper->converteData($data); ?></span></p>
                <div class="thumb-artic">
                    <img src="<?= HOME; ?>/upload/<?= $image; ?>" alt="" srcset="">
                    <!--<span>fitOne</span>-->
                    <div class="desc-artc">
                        <?= html_entity_decode($description);?>
                    </div>
                    <!--LIKE FACEBOOK-->
                    <div class="bx-like-face">
                        <div class="like-face">
                            <div class="fb-like" data-href="<?= HOME;?>/artigo/<?= $slug; ?>" data-width="" data-layout="button" data-action="like" data-size="small" data-share="true"></div>
                        </div>
                    </div>
                    <!--END LIKE FACEBOOK-->
                </div>
            </article>
            <!--END ARTICLE URL-->
            <article class="art-sugestion">
                <h1 class="">Publicações Sugeridas</h1>

                <?php
                for ($i = 0; $i <= 7; $i++):
                    ?>
                    <!--SUGESTION-->
                    <div class="sugestion">
                        <a href="" class="thumb-sugestion">
                            <div class="thumb_"
                                 style=" max-width: 168px;
                                     width: 100%;
                                     height: 116px;
                                     background: url(<?= INCLUDE_PATH; ?>/assets/image/2.jpg) #dedede;
                                     background-size: cover;
                                     background-repeat: no-repeat;
                                     background-position: center;
                                     ">
                            </div>
                        </a>
                        <div class="desc-sugestion">
                            <h2>
                                <a href="">
                                    DONATE FOR WATER...
                                </a>
                            </h2>
                            <p>
                                09/04/2020
                            </p>
                        </div>
                    </div>
                    <!--END ARTICLE SUGESTION-->
                <?php
                endfor;
                ?>
            </article>


        </section>
        <!--END SECTION SUGESTION-->
        <div class="clear"></div>
    </div>
</main>