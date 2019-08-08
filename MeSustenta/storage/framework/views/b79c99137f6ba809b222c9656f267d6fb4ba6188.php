<?php $__env->startSection('container'); ?>
<h1 class="prodGerais">Produtos Gerais</h1>
<ul class="row">

<?php $__currentLoopData = $todosProdutos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card-prodGerais" style="width: 18rem;">
    <img src="<?php echo e(asset('img/VivaAmazon/saboneteArgila.png')); ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php echo e($produto->nome_produto); ?> <a href="/produto/editar/<?php echo e($produto->idProduto); ?>">Editar</a></h5>
        <p class="card-text"><?php echo e($produto->descricao_pro); ?> <a href="/produto/editar/<?php echo e($produto->descricao); ?>"></a></p>
        <button class="btn btn-info right"><a href="/carrinho/exibir">Comprar</a></button>
    </div>
    <!-- <ul class="list-group list-group-flush">
        <li class="list-group-item"></li>
        <li class="list-group-item"></li>
        <li class="list-group-item"></li>
    </ul>
    <div class="card-body">
        <a href="#" class="card-link"></a>
        <a href="#" class="card-link"></a>
    </div> -->
    </div>

    

    

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documentos\Digital House\ProjIntegradorArq1\MeSustenta\resources\views/produtosGerais.blade.php ENDPATH**/ ?>