
<div class="container">
    <h2>Fale Conosco</h2>


    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Opa!</strong> Verifique os campos abaixo:
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('fale-conosco.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label for="nome" class="form-label">Seu Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo e(old('nome')); ?>" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Seu Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo e(old('email')); ?>" required>
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Seu Telefone:</label>
            <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo e(old('telefone')); ?>" required>
        </div>

        <div class="mb-3">
            <label for="mensagem" class="form-label">Sua Mensagem:</label>
            <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required><?php echo e(old('mensagem')); ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
    </form>

</div><?php /**PATH /opt/lampp/htdocs/projetoweb-pizzaria/resources/views/fale-conosco.blade.php ENDPATH**/ ?>