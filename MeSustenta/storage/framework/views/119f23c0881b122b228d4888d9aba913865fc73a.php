<?php $__env->startSection('container'); ?>
<section>
<div class="container-fluid">
    <div class="row">
        <div col-6>
            <h2>Categorias</h2>
                <ul>
                   <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="/categoria/<?php echo e($categoria->idCategoria); ?>"><?php echo e($categoria->tipo_categoria); ?></a><li>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   <li><a href="/categoria">Todos os produtos</a></li>
                </ul>
        </div>
        <div col-6>
            <h3>Nomes</h3>

            <div class="card-deck">
                <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">
                        <img src="img/cestapequena.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title"><?php echo e($produto->nome_produto); ?></h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
 </div>














<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documentos\Digital House\ProjIntegradorArq1\MeSustenta\resources\views/categoria.blade.php ENDPATH**/ ?>