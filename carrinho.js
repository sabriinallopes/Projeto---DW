let carrinho = document.querySelector('.carrinhoCompras');

var imgProd, nomeProd, precoProd, carrinhoItens, carrinhoLoja;

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready);
} else {
    ready();
}

//INICIO BOTÃO REMOVER
function ready() {
    //remove itens
    var removeitens = document.getElementsByClassName('remove')
    console.log(removeitens)
    for (var i = 0; i < removeitens.length; i++) {
        var botaoRemove = removeitens[i];
        botaoRemove.addEventListener('click', removeitens);
    }
    //ALTERAÇÃO DE QUANTIDADE
    var quantity = document.getElementsByClassName('quantidade')
    for (i = 0; i < quantity.length; i++) {
        var input = quantity[i];
        input.addEventListener('change', mudaQtda);
    }

    //ADICIONANDO AO CARRINHO
    var addCarrinho = document.getElementsByClassName('card-btn')
    for (var i = 0; i < addCarrinho.length; i++) {
        var botaoAdd = addCarrinho[i];
        botaoAdd.addEventListener('click', addProdutos);
    }

    //FINALIZAR COMPRA

}

function removeitens(event) {
    var botaoRemover = event.target;
    botaoRemove.parentElement.remove();
    totalCompra();
}
//FIM BOTÃO REMOVER

//INICIO ALTERAÇÃO DE QUANTIDADE
function mudaQtda(event) {
    var input = event.target;
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1;
    }
    totalCompra();
}
//FIM ALTERAÇÃO DE QUANTIDADE

//INICIO ADICIONAR ITEMS
function addProdutos(event) {
    var botaoAdicionar = event.target;
    var itensLoja = botaoAdicionar.parentElement;
    nomeProd = itensLoja.getElementsByClassName('product-brand')[0]?.innerText;
    precoProd = itensLoja.getElementsByClassName('price')[0]?.innerText;
    imgProd = itensLoja.getElementsByClassName('product-image')[0]?.src;
    addProdutosCarrinho(nomeProd, precoProd, imgProd);
    totalCompra();
}

function addProdutosCarrinho(nomeProd, precoProd, imgProd) {
    carrinhoLoja = document.createElement('div');
    carrinhoLoja.classList.add('product-card');
    carrinhoItens = document.getElementsByClassName('product-container');
    var nomeItensCarrinho = document.getElementsByClassName('product-brand');
    for (var i = 0; i < nomeItensCarrinho.length; i++) {
        alert("Produto adicionado ao carrinho");
        return;
    }

}
var carrinhoTem = `<img src="${imgProd}" class="product-thumb"
alt="${nomeProd}">
<button class="card-btn">Adicionar ao carrinho</button>
</div>
<div class="product-info">
<span class="price">${precoProd}</span>`

/*carrinhoItens = carrinhoTem.innerHTML;
carrinhoLoja.append('carrinhoItens');*/
carrinhoItens.getElementsByClassName('remove')[0].addEventListener("click", removeitens);
carrinhoItens.getElementsByClassName('quantidade')[0].addEventListener("change", mudaQtda);
//FIM ADICIONAR ITENS

//INICIO TOTAL COMPRA
function totalCompra() {
    var itens = document.getElementsByClassName('product-container')[0];
    var itensDetalhes = itens.getElementsByClassName('product-card');
    var total = 0;
    for (var i = 0; i < itensDetalhes.length; i++) {
        var detalhesItens = itensDetalhes[i];
        var precoItens = detalhesItens.getElementsByClassName('price')[0];
        var quatidadeItens = detalhesItens.getElementsByClassName('quantidade')[0];
        var qtda = quatidadeItens.value;
        var preco = parseFloat(precoItens.innerText.replace("R$", ""));
        total = total + (preco * qtda);
        Math.round(total * 100) / 100;

        document.getElementsByClassName('totalPreco')[0].innerText = "R$" + total;
    }

}
//FIM TOTAL COMPRA


