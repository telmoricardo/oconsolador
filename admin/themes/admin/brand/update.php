<?php
$brandController = new \App\Controller\BrandController();

$upload = new \App\Helper\Upload();
$helper = new \App\Helper\Helper();

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
$resultado = "";
$nomeImage = "";

//RETORNANDO OS DADOS
$dados = $brandController->find("id", $id);
if($dados != null):
    $title = $dados->title;
    $statusS = $dados->status;
endif;

$btnEnviar = filter_input(INPUT_POST, 'btnEnviar', FILTER_SANITIZE_STRING);
if ($btnEnviar):

    $titlePost = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    //imagem esta recebendo files imagemArtigo
    $imagem = $_FILES['thumb'];

    $dadosI = $brandController->find("id", $id);
    if($imagem['name'] == null):
        $nomeImage = $dadosI->thumb;
    else:
        $capa = "../upload/" .$dadosI->thumb;
        if (file_exists($capa) && !is_dir($capa)):
            unlink($capa);
        endif;
        //recebendo a imagem, nome do produto, tamanho da imagem, pasta
        $upload->Image($imagem, $titlePost, 2000, 'posts');
        //setando a imagem
        $nomeImage = $upload->getResult();
    endif;

    //conversão para url amigavel
    $url = $helper->Name($titlePost);
    $brand = array(
        'title' => $titlePost,
        'url' =>  $url,
        'status' => filter_input(INPUT_POST, 'status', FILTER_SANITIZE_NUMBER_INT),
        'thumb' => $nomeImage,
//        'data' => $registration
    );

    if($brandController->Atualizar($brand, "id", $id)):
        $resultado = '<div class="trigger trigger-infor">
                        <p><b class="trigger-accept-bold">Sucesso:</b> Parceiro atualizado!</p>
                      </div>';
        $insertGoTo = HOME."/brand/index";
        header("refresh:2;url={$insertGoTo}");
    else:
        $resultado = '<div class="trigger trigger-error">
                        <p><b class="trigger-accept-bold">Error:</b> Favor preencha os campos que possuem *!</p>
                      </div>';
    endif;
endif;
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= HOME; ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= HOME; ?>/post/index">Post</a></li>
                    <li class="breadcrumb-item active">Novo</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?= $resultado; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Atualizar Parceiro</h3>
                    </div>

                    <form method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title">Titulo*:</label>
                                        <input type="text" id="title" name="title" class="form-control" placeholder="Titulo:"  value="<?= $title?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Status*: <span id="rsStatus">&nbsp;</span></label>
                                    <select class="form-control" id="status" name="status">
                                        <?php
                                        $status = array('1' => 'Ativo', '2' => 'Bloqueado');
                                        foreach ($status as $key => $value):
                                            $esseEhOStatus = $statusS == $key;
                                            $selecao = $esseEhOStatus ? "selected='selected'" : '';
                                            ?>
                                            <option value="<?= $key; ?>" <?= $selecao?>><?= $value ?></option>
                                        <?php
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Imagem*</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" id="thumb" name="thumb">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <input type="submit" class="btn btn-success" name="btnEnviar" value="Salvar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>