<?php $__env->startSection('container'); ?>
<h1>Carrinho</h1>
<ul>

<form action="/carrinho" method="post" class="form-pedido">
<?php echo csrf_field(); ?>

<div class="container">

<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th class="validar carrinho" colspan="3">Produtos</th>
            <th>Remover</th>
            <th>Quantidade</th>
            <input type="hidden" class="idCarrinho" nome="idCarrinho">
            <input type="hidden" class="itens" nome="carrinho_itens">
            <input type="hidden" class="codCliente" nome="codigoCliente">
            
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($produto->idProduto); ?></td>           
              <td><?php echo e($produto->nome_produto); ?></td>
              <td><?php echo e($produto->quantidade_em_estoque); ?>

              <td>
                
              </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>    
               
        <div>
         
        </div>
         
 
</form>

<?php $__env->stopSection(); ?>


  
     
        
  
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documentos\Digital House\ProjIntegradorArq1\MeSustenta\resources\views/carrinho.blade.php ENDPATH**/ ?>