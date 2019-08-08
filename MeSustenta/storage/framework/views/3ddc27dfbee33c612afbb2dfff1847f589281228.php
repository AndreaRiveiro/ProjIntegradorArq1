<?php $__env->startSection('container'); ?>

<h1>Realizar Pedido</h1>

<form action="/pedido" method="post">
<?php echo csrf_field(); ?>

<section class="container">

<div class="card cadastro-conteudo col-md-8">
        <div class="form-group" >
        
            <div>
                <label>Itens</label>
                <input type="text" class="form-control casds" name="pedidoItens">
            </div>
            <div>
                <label>Valor do Frete</label>
                <input type="number" class="form-control casds" name="valorFrete">
                <label>Data de Entrega</label>
                <input type="datetime" class="form-control casds" name="dataEntrega">
            </div>
            <div>
                <label>Destinatário</label>
                <input type="text" class="form-control casds" name="nomeDestinatario">
                <label>Email</label>
                <input type="email" class="form-control casds" name="emailCliente">
                <label>Endereço de Entrega</label>
                <input type="text" class="form-control casds" name="enderecoDestinatario">
                <label>Cidade</label>
                <input type="text" class="form-control casds" name="cidadeDestino">
                <label>CEP</label>
                <input type="number" class="form-control casds" name="cepDestino">
            </div>
            

        </div>

        <button type="submit">Enviar Pedido</button>

</form>



<?php if(isset($resultado)): ?>

    <?php if($resultado): ?>
    
        <h1>Compra Concluida!</h1>
    <?php else: ?>
        <h1>Erro ao tentar comprar!</h1>
    <?php endif; ?>    

<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documentos\Digital House\ProjIntegradorArq1\MeSustenta\resources\views//pedido.blade.php ENDPATH**/ ?>