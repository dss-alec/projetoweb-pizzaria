<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    
</head>

<body>
    <div class="container" style="max-width: 1050px; margin-top: 6px;">
        <div class="card p-4 shadow-sm">
            <h2 class="text-center mb-3">Edite os dados de um produto</h2>

            
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <strong>Opa!</strong> Algo deu errado:
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            
            
            <form action="<?php echo e(route('admin.produtos.atualizar', $produto->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>          
                <?php echo method_field('PUT'); ?> 
                
                <div class="mb-3">
                    <label for="nome" class="form-label">Novo nome do produto:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo e($produto->nome); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label">Nova descrição do produto:</label>
                    <textarea class="form-control" id="descricao" name="descricao" rows="3"><?php echo e($produto->descricao); ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="preco" class="form-label">Novo preço R$:</label>
                    <input type="number" class="form-control" id="preco" name="preco" value="<?php echo e($produto->preco); ?>" step="0.01" min="0" required>
                </div>

                

                <button type="submit" class="btn w-100" style="background-color: #9c1919; color: white; border: none;">
                    Salvar Alterações
                </button>
            </form>
            
        </div>
    </div>
</body>
</html><?php /**PATH /opt/lampp/htdocs/projetoweb-pizzaria/resources/views/admin/produtos/editar.blade.php ENDPATH**/ ?>