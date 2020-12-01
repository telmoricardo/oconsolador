<?php

use App\Helper\Helper;
$postController = new \App\Controller\PostController();
$helper = new Helper();

/** Pegando o cod que esta vindo através da url del * */
$id = filter_input(INPUT_GET, "del", FILTER_SANITIZE_NUMBER_INT);
if ($id):
    $post = $postController->find("id", $id);

    $capa = "../upload/" .$post->thumb;
    if (file_exists($capa) && !is_dir($capa)):
        unlink($capa);
        if ($postController->Excluir("id", $id)):
            echo '<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
                alert ("Slider removido com sucesso!")
                </SCRIPT>';
            $insertGoTo = HOME . "/post/index";
            header("refresh:2;url={$insertGoTo}");
        else:
            echo '<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
                alert ("Error ao remover o usuario!")
            </SCRIPT>';
            $insertGoTo = HOME . "/post/index";
            header("refresh:2;url={$insertGoTo}");
        endif;
    endif;


endif;
//máximo de links na paginação
$maxlinks = 4;
$pagina = (isset($_GET['pagina'])) ? ($_GET['pagina']) : 1;
//quantidade de publicação por páginas
$maximo = 10;
$inicio = (($maximo * $pagina) - $maximo);
//listar
$lista = $postController->allPosts($inicio, $maximo);
?>
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Posts</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= HOME; ?>">Home</a></li>
            <li class="breadcrumb-item active">Post</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-2">
                            <a href="<?= HOME; ?>/post/create" class="btn btn-block btn-success btn-sm"><i class="fas fa-save"></i> Adicionar Post</a>
                        </div>
                        <div class="col-10">
                            <div class="card-tools float-sm-right">
                                <div class="input-group input-group-sm" style="width: 300px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Procure">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                         </div>
                        </div>
                    </div>
                </div>                
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <?php
                            if ($lista == null):
                                echo '<div style="width: 96%; margin: 0 2%; margin-top: 10px;" class="trigger trigger-error">Não possui registros no momento</div>';
                            else:
                        ?>
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Thumb</th>
                            <th>Tituto</th>
                            <th>Categoria</th>
                            <th>Status</th>
                            <th>Data</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($lista as $post):
                        ?>
                        <tr>
                            <td><?= $post->id ?></td>
                            <td><img src="./../../upload/<?= $post->thumb ?>" width="60" alt=""></td>
                            <td><?= $post->title ?></td>
                            <td><?= $post->titleCategory?></td>
                            <td><?= ($post->status) == 1 ? 'Ativo' : 'Bloqueado' ?></td>
                            <td><?= $helper->converteDataHora($post->data)?></td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="<?= HOME; ?>/post/update&id=<?= $post->id; ?>" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                    <a href="<?= HOME; ?>/post/index&del=<?= $post->id; ?>" onclick="return confirm('Deseja realmente excluir <?= $post->title; ?>');" title="Excluir" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <?php
                            endforeach;
                        ?>                   
                        </tbody>
                            <?php
                                endif;
                            ?>
                    </table>
                </div>
                <?php
                //paginação de resultados
                $total = $postController->countPosts();
                $total_paginas = ceil($total / $maximo);
                if ($total > $maximo):
                    echo '<div class="card-footer clearfix">';
                    echo '<ul class="pagination pagination-sm m-0 float-right">';
                    echo '<li class="page-item"><a class="page-link" href="index&pagina=1">Primeira Página</a></li>';
                    for ($i = $pagina - $maxlinks; $i <= $pagina - 1; $i++):
                        if ($i >= 1):
                            echo '<li class="page-item"><a class="page-link" href="index&pagina=' . $i . '">' . $i . '</a><li>';
                        endif;
                    endfor;
                    echo '<li class="active"><a class="page-link" href="index&pagina=' . $pagina . '">' . $pagina . '</a></li>';
                    for ($i = $pagina + 1; $i <= $pagina + $maxlinks; $i++):
                        if ($i <= $total_paginas):
                            echo '<li class="page-item"><a class="page-link" href="index&pagina=' . $i . '">' . $i . '</a></li>';
                        endif;
                    endfor;
                    echo '<li class="page-item"><a  class="page-link" href="index&pagina=' . $total_paginas . '"">Última Página</a></li>';
                    echo '</ul>';
                    echo '</div>';
                endif;
                ?>
            </div>

        </div>
    </div>    
</section>