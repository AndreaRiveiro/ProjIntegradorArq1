<?php $__env->startSection('container'); ?>

<h1>Cadastro de Produto no Catálogo</h1>

<form action="/cadastroProduto" method="post">
<?php echo csrf_field(); ?>

<section class="container">

<div class="card cadastro-conteudo col-md-8">
        <div class="form-group" >
        
            <div>
                <label>Nome do Produto</label>
                <input type="text" class="form-control casds" name="nomeProduto">
                <label>Tipo do Produto</label>
                <input type="text" class="form-control casds" name="tipoProduto">
            </div>
            <div>
                <label>Código do Produto</label>
                <input type="number" class="form-control casds" name="codigoProduto">
                <label>Categoria</label>
                <input type="text" class="form-control casds" name="codigoCategoria">
            </div>   
            <div>
                <label>Quantidade em Estoque</label>
                <input type="number" class="form-control casds" name="quantidadeEstoque">
                <label>Estoque Máximo</label>
                <input type="number" class="form-control casds" name="estoqueMaximo">
            </div>
            <div>
                <label>Descrição do Produto</label>
                <input type="text" class="form-control casds" name="descricao">
            </div>
            <div>
                <label>Nome do Fornecedor</label>
                <input type="text" class="form-control casds" name="codigoFornecedor">
                <label>Nome da Loja</label>
                <input type="text" class="form-control casds" name="nomeloja">
            </div>
            <div>
                <label>Preço de Venda</label>
                <input type="number" class="form-control casds" name="precoVenda">
            </div>
            <div>
                <label>Status do Produto</label>
                <input type="text" class="form-control casds" name="statusProduto">
            </div>
            <div>
                <label>Imagem do Produto</label>
                <input type='file' class="form-control casds" name="imagens" id="imagens" value='Escolher arquivo'/>
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <input type="hidden" name="imagens" value="">
            </div>


        </div>

        <button type="submit">Cadastrar Produto</button>

</form>


       

        


<?php if(isset($resultado)): ?>

    <?php if($resultado): ?>
    
        <h1>Cadastro Concluido!</h1>
    <?php else: ?>
        <h1>Erro ao tentar cadastrar!</h1>
    <?php endif; ?>    

<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documentos\Digital House\ProjIntegradorArq1\MeSustenta\resources\views/cadastroProduto.blade.php ENDPATH**/ ?>