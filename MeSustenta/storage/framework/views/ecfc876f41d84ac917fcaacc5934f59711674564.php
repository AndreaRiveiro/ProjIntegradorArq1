<?php $__env->startSection('container'); ?>
<h1>Editar Produtos</h1>

<form action="/produto/editar/<?php echo e($produto->idProduto); ?>" method="post" >
<?php echo csrf_field(); ?>

            <div>
                <input type="text" name="idProduto" value="<?php echo e($produto->idProduto); ?>"hidden>
                <label>Nome do Produto</label>
                <input type="text" class="form-control casds" name="nomeProduto" value="<?php echo e($produto->nomeProduto); ?>">
                <label>Tipo do Produto</label>
                <input type="text" class="form-control casds" name="tipoProduto" value="<?php echo e($produto->tipoProduto); ?>">
            </div>
            <div>
                <label>Código do Produto</label>
                <input type="number" class="form-control casds" name="codigoProduto" value="<?php echo e($produto->codigoProduto); ?>">
                <label>Código Categoria</label>
                <input type="number" class="form-control casds" name="codigoCategoria" value="<?php echo e($produto->codigoCategoria); ?>">
            </div>
            
            
            <div>
                <label>Quantidade em Estoque</label>
                <input type="number" class="form-control casds" name="quantidadeEstoque" value="<?php echo e($produto->quantidadeEstoque); ?>">
                <label>Estoque Máximo</label>
                <input type="number" class="form-control casds" name="estoqueMaximo" value="<?php echo e($produto->estoqueMaximo); ?>">
            </div>
            <div>
                <label>Descrição do Produto</label>
                <input type="text" class="form-control casds" name="descricao" value="<?php echo e($produto->descricao); ?>">
            </div>
            <div>
                <label>Departamento</label>
                <input type="text" class="form-control casds" name="departamento" value="<?php echo e($produto->departamento); ?>">
                <label>Código do Fornecedor</label>
                <input type="number" class="form-control casds" name="codigoFornecedor" value="<?php echo e($produto->codigoFornecedor); ?>">
                <label>Nome da Loja</label>
                <input type="text" class="form-control casds" name="nomeloja" value="<?php echo e($produto->nomeLoja); ?>">
            </div>
            <div>
                <label>Preço de Venda</label>
                <input type="number" class="form-control casds" name="precoVenda" value="<?php echo e($produto->precoVenda); ?>">
            </div>
            <div>
                <label>Status do Produto</label>
                <input type="text" class="form-control casds" name="statusProduto" value="<?php echo e($produto->statusProduto); ?>">
            </div>


        </div>


    <button type="submit">Editar Produto</button>

</form>

<?php if(isset($resultado)): ?>
    <?php if($resultado): ?>
        <h1>Edição Concluida!</h1>
    <?php else: ?>
        <h1>Erro ao tentar editar!</h1>
    <?php endif; ?>    

<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documentos\Digital House\ProjIntegradorArq1\MeSustenta\resources\views/editarProduto.blade.php ENDPATH**/ ?>