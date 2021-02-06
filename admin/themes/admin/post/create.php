<?php
$postController = new \App\Controller\PostController();
$categoryController = new \App\Controller\CategoryController();
$upload = new \App\Helper\Upload();
$helper = new \App\Helper\Helper();

$listaCategory = $categoryController->all();

$resultado = "";
$categoriaTitle = '';

$btnEnviar = filter_input(INPUT_POST, 'btnEnviar', FILTER_SANITIZE_STRING);
if ($btnEnviar):

    $titlePost = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    //imagem esta recebendo files imagemArtigo
    $imagem = $_FILES['thumb'];
    //recebendo a imagem, nome do produto, tamanho da imagem, pasta
    $upload->Image($imagem, $titlePost, 2000, 'posts');
    //setando a imagem
    $nomeImage = $upload->getResult();
    //conversão para url amigavel
    $url = $helper->Name($titlePost);
    $registration = date("Y-m-d H:i:s");
    $post = array(
        'author' => filter_input(INPUT_POST, 'author', FILTER_SANITIZE_STRING),
        'resume' => filter_input(INPUT_POST, 'resume', FILTER_SANITIZE_STRING),
        'category' => filter_input(INPUT_POST, 'category', FILTER_SANITIZE_NUMBER_INT),
        'title' => $titlePost,
        'url' =>  $url,
        'description' =>  filter_input(INPUT_POST, 'description', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
        'status' => filter_input(INPUT_POST, 'status', FILTER_SANITIZE_NUMBER_INT),
        'thumb' => $nomeImage,
        'data' => $registration
    );

    if($postController->Cadastrar($post)):
        $resultado = '<div class="trigger trigger-infor">
                         <p><b class="trigger-accept-bold">Sucesso:</b> Post Cadastrado com sucesso!</p>
                       </div>';
        $insertGoTo = HOME."/post/index";
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
                <li class="breadcrumb-item"><a href="<?= HOME; ?>/Post/index">Slider</a></li>
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
                        <h3 class="card-title">Cadastrar Post</h3>
                    </div>

                    <form method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="title">Titulo*:</label>
                                        <input type="text" id="title" name="title" class="form-control" placeholder="Titulo:"  />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="author">Autor*:</label>
                                        <input type="text" id="author" name="author" class="form-control" placeholder="Autor:"  />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title">Breve Descrição*:</label>
                                        <input type="text" id="resume" name="resume" class="form-control" placeholder="Breve descrição:"  />
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
                                    <label>Categoria*: </label>
                                    <select class="form-control" id="category" name="category">
                                        <?php
                                            if ($listaCategory != null):
                                                foreach ($listaCategory as $category):
                                                    echo "<option ";
                                                    if ($categoriaTitle == $category->id):
                                                        echo "selected=\"selected\" ";
                                                    endif;
                                                    echo "value=\"{$category->id}\"> &raquo; {$category->title} </option>";
                                                endforeach;
                                            endif;
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

                            <div class="row">
                                <div class="col-md-12">
                                    <label>Descrição*: <span id="rsStatus">&nbsp;</span></label>
                                    <textarea rows="3" name="description" class="form-control"></textarea>
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