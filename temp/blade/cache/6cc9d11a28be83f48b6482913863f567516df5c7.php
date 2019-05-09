<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</head>
<body>
    <div class="container">
        <div id="main" class="row">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <footer class="row">
            <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </footer>
    </div>
    <?php echo $__env->make('includes.footerjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH /home/joaofds/Documentos/projetos/framework/resources/views/layouts/default.blade.php ENDPATH**/ ?>