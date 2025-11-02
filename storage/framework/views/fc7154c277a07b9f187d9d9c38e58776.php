<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagens enviadas</title>
</head>
<body>
    <h1>Lista de Mensagens</h1>

    <ul>
        <?php $__currentLoopData = $mensagens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mensagem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <strong><?php echo e($mensagem->nome); ?></strong> — <?php echo e($mensagem->mensagem); ?>

            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html><?php /**PATH /opt/lampp/htdocs/projetoweb-pizzaria/resources/views/visualizar-mensagens.blade.php ENDPATH**/ ?>