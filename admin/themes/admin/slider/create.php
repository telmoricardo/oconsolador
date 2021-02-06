<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1></h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= HOME; ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= HOME; ?>/slider/index">Slider</a></li>
                <li class="breadcrumb-item active">Novo</li>
            </ol>
            </div>
        </div>
    </div>
</section>
<?php
$sliderController = new \App\Controller\SliderController();
$upload = new \App\Helper\Upload();


$resultado = "";

$btnEnviar = filter_input(INPUT_POST, 'btnEnviar', FILTER_SANITIZE_STRING);
if ($btnEnviar):

    $nomeSlider = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    //imagem esta recebendo files imagemArtigo
    $imagem = $_FILES['thumb'];
    //recebendo a imagem, nome do produto, tamanho da imagem, pasta
    $upload->Image($imagem, $nomeSlider, 2000, 'sliders');

    //setando a imagem
    $nomeImagem = $upload->getResult();
    //$slider->setSlider_thumb($nomeImagem);

    $slider = array(
        'title' => $nomeSlider,
        'link' =>  filter_input(INPUT_POST, 'link', FILTER_SANITIZE_STRING),
        'status' => filter_input(INPUT_POST, 'status', FILTER_SANITIZE_NUMBER_INT),
        'size' => filter_input(INPUT_POST, 'size', FILTER_SANITIZE_STRING),
        'thumb' => $nomeImagem
    );

   if($sliderController->Cadastrar($slider)):
       $resultado = '<div class="trigger trigger-infor">
                        <p><b class="trigger-accept-bold">Sucesso:</b> Slider Cadastrado com sucesso!</p>
                      </div>';
       $insertGoTo = HOME."/slider/index";
       header("refresh:2;url={$insertGoTo}");
   else:
       $resultado = '<div class="trigger trigger-error">
                        <p><b class="trigger-accept-bold">Error:</b> Favor preencha os campos que possuem *!</p>
                      </div>';
   endif;
endif;
?>
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
                        <h3 class="card-title">Cadastrar Slider</h3>
                    </div>

                    <form method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Titulo*:</label>
                                        <input type="text" id="title" name="title" class="form-control" placeholder="Titulo:"  />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="link">Link:</label>
                                        <input type="text" id="link" name="link" class="form-control" placeholder="Link:"  />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <label>Status*: <span id="rsStatus">&nbsp;</span></label>
                                    <select class="form-control" id="status" name="status">
                                        <option selected disabled value="">Status:</option>
                                        <option value="1">Ativo</option>
                                        <option value="2">Bloqueado</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label>Tamanho*: <span id="rsStatus">&nbsp;</span></label>
                                    <select class="form-control" id="size" name="size">
                                        <option selected disabled value="">Tamanho:</option>
                                        <option value="p">pequeno</option>
                                        <option value="g">Grande</option>
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
                            <input type="submit" class="btn btn-success" name="btnEnviar" value="Enviar">
                        </div>
                    </form>
                </div>
          </div>          
        </div>    
    </div>
</section>