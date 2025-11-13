<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="container my-5">
    <div class="text-center p-4 bg-light rounded shadow-sm">
        <h2>Olá, seja bem-vindo à Pizzaria Delícia </h2>
        <p class="text-muted">
            Aqui você pode gerenciar os produtos, visualizar mensagens dos clientes e manter tudo organizado no painel administrativo.
        </p>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /opt/lampp/htdocs/projetoweb-pizzaria/resources/views/dashboard.blade.php ENDPATH**/ ?>