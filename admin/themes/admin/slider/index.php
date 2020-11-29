<?php
 use App\Controller\UserController;
 use App\Helper\Helper;

 $sliderController = new \App\Controller\SliderController();

/** Pegando o cod que esta vindo através da url del * */
$deletar = filter_input(INPUT_GET, "del", FILTER_SANITIZE_NUMBER_INT);
if ($deletar):

    if ($userController->Excluir("id", $deletar)):
        echo '<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
                alert ("Usuário removido com sucesso!")
                </SCRIPT>';
        $insertGoTo = HOME . "/user/index";
        header("refresh:2;url={$insertGoTo}");
    else:
        echo '<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
                alert ("Error ao remover o usuario!")
            </SCRIPT>';
        $insertGoTo = HOME . "/user/index";
        header("refresh:2;url={$insertGoTo}");
    endif;

endif;

 //máximo de links na paginação
 $maxlinks = 4;
 $pagina = (isset($_GET['pagina'])) ? ($_GET['pagina']) : 1;
 //quantidade de publicação por páginas
 $maximo = 10;
 $inicio = (($maximo * $pagina) - $maximo);

 //listar
 $lista = $sliderController->allSlider($inicio, $maximo);
?>
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Sliders</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= HOME; ?>">Home</a></li>
            <li class="breadcrumb-item active">Slider</li>
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
                            <a href="<?= HOME; ?>/slider/create" class="btn btn-block btn-success btn-sm"><i class="fas fa-save"></i> Adicionar Slider</a>
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
                            <th>Tituto</th>
                            <th>Link</th>
                            <th>Status</th>
                            <th>Tamanho</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($lista as $slider):
                        ?>
                        <tr>
                            <td><?= $slider->id ?></td>
                            <td><?= $slider->title ?></td>
                            <td><?= $slider->link ?></td>
                            <td><?= ($slider->status) == 1 ? 'Ativo' : 'Bloqueado' ?></td>
                            <td><?= ($slider->size) == 'p'? 'Pequeno' : 'Grande' ?></td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="<?= HOME; ?>/user/update&id=<?= $slider->id; ?>" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                    <a href="<?= HOME; ?>/user/index&del=<?= $slider->id; ?>" onclick="return confirm('Deseja realmente excluir <?= $slider->title; ?>');" title="Excluir" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
                $total = $sliderController->countSliders();
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