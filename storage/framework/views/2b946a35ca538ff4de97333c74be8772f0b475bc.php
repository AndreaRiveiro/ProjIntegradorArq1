<!DOCTYPE html>
<html lang="br-pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
        <title>Document</title>
    </head>
    <body>
        <header>
            <div>
                <img src="img/logofinal1.png" alt="Logo MeSustenta">
            </div>
            <div>
                <a href="#">Fale Conosco</a>
            </div>
        </header>
        <div class="container d-flex justify-content-between row">
            <h1>Carrinho de Compras</h1>
            <button type="submit" class="btn btn-outline-info">Fechar Pedido</button>
        </div>  
        <div id="cabecalho" class="container">
            <div>
                <h4>Produto</h4>
            </div>
            <div>
                <h4>Preço</h4>
            </div>
            <div>
                <h4>Quantidade</h4>
            </div>
            <div>
                <h4>Total</h4>
            </div>
            <div>
                <p>Remover</p>
            </div>
        </div>
        <section id="produto" class="container">
            <div id="descProduto">
                <div id="imgProduto">
                    <img src="img/LaLoba/bolsaBordada.png" alt="bolsa">
                </div>
                <div>
                    <p>Descrição do Produto</p>
                    <p>Vendido por:</p>
                    <input type="checkbox" name=checPresente checked>
                    <Label>Este item é para presente</Label>
                </div>
            </div>
            <div>
                    <p>R$ 0,00</p>
            </div>   
            <div>
                <i class="icon icon-minus-sign"></i>
                <select name="quantProduto" id="quantProduto">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
            </div>      
            <div>
                <p>R$ 0,00</p>
            </div>    
            <div>
                <a href="#">
                    <span class="glyphicon glyphicon-remove"></span>
                </a>
            </div>
        </section>
        <div id="cupomDesconto">
            <a href="#">
                Adicionar cupom de desconto
            </a>
        </div>
        <div id="abreDesconto">
            <fieldset disabled="disabled">
                <p>Cupom Desconto</p>
                

            </fieldset>
        </div>

        <div>
            <button type="submit" class="btn btn-outline-info">Fechar Pedido</button>
        </div>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html><?php /**PATH C:\Users\tomeshi\Documents\Andrea\PFS2\ProjetoIntegrador\Camila\ProjIntegradorArq1\ProjIntegradorArq1\MeSustenta\resources\views/carrinho.blade.php ENDPATH**/ ?>