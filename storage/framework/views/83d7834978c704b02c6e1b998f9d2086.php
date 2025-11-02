<div class="row">
        
    <?php $__empty_1 = true; $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col-md-4 mb-3">
            <div class="card">
                <?php if($produto->imagem): ?>
                    <img src="<?php echo e(asset('storage/' . $produto->imagem)); ?>" class="card-img-top" alt="<?php echo e($produto->nome); ?>">
                <?php endif; ?>

                <div class="card-body">
                    <h5 class="card-title"><?php echo e($produto->nome); ?></h5>
                    <p class="card-text"><?php echo e($produto->descricao); ?></p>
                    <h6 class="card-subtitle mb-2 text-muted">
                        R$ <?php echo e(number_format($produto->preco, 2, ',', '.')); ?>

                    </h6>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="col-12">
            <p class="text-center">Nenhum produto disponível no momento.</p>
        </div>
    <?php endif; ?>

</div><?php /**PATH /opt/lampp/htdocs/projetoweb-pizzaria/resources/views/produtos.blade.php ENDPATH**/ ?>