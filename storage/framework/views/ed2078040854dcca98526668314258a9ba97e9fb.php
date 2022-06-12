


<?php $__env->startSection('content'); ?>
<div class="container">
    <div style="padding-top: 1.5rem;" class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header text-center">Caracteres</h3>
                <div class="card-body">
                    <?php if(!empty($characters)): ?>     
                        <div class="row">
                            <div class="card-deck">
                                <?php $__currentLoopData = $characters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $character): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
                                <div class="col-md-4">
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo e($character->image); ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Name: <?php echo e($character->name); ?></h5>
                                            <p class="card-text">Species: <?php echo e($character->species); ?></p>
                                            <p class="card-text">Gender: <?php echo e($character->gender); ?></p>
                                            <p class="card-text">Status: <?php echo e($character->status); ?></p>
                                            <p class="card-text">Created <small class="text-muted"><?php echo e($character->created); ?></small></p>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-test\resources\views/restapi/characters.blade.php ENDPATH**/ ?>