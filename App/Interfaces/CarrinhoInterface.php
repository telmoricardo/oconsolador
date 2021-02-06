<?php

namespace App\Interfaces;
use App\Controller\ProductController;

interface CarrinhoInterface{

    public function adicionarAoCarrinho($id);
    public function removerDoCarrinho($id);
    public function pegarProdutosDoCarrinho();
    public function atualizarQuantidade($id, $qtd);
    public function totalDoPedido(ProductController $produtoController);
    public function limparCarrinho();

}
