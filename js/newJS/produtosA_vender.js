var produtos = document.querySelectorAll("#produto");
for (var i = 0; i < produtos.length; i++){
    var elemento = produtos[i].querySelector("#idContador");
    var preco = parseInt(produtos[i].querySelector("#preco_produto").textContent);
    var valortotal = produtos[i].querySelector("#valortotal");

    function valor(event) {
        var quantidade = event.target.value;
        var valor = preco * quantidade;
        console.log(valor);
        document.getElementById('valortotal').innerHTML=valor;
    }
    elemento.addEventListener('keypress', valor);
};




