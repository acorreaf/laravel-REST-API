



<?php $__env->startSection('content'); ?>
<div class="container">
    <div style="padding-top: 1.5rem;" class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header text-center">Locaciones</h3>
                <div class="card-body">
                    <?php if(!empty($locations)): ?>
                        <div class="row">
                            <div class="card-deck">
                                <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-4">
                                    <div class="card border-primary mb-3" style="max-width: 18rem;">
                                        <div style="font-size: medium;" class="card-header bg-transparent border-primary"><h4><?php echo e($location->name); ?></h4></div>
                                        <div class="card-body text-primary">
                                          <h5 class="card-title">Type: <?php echo e($location->type); ?></h5>
                                          <span class="card-text">Dimension: <?php echo e($location->dimension); ?></span><br/>
                                          <span class="card-text">URL: <?php echo e($location->url); ?></span><br/>
                                        </div>
                                        <div class="card-footer bg-transparent border-primary">Created <small class="text-muted"><?php echo e($location->created); ?></small></div>
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-test\resources\views/restapi/locations.blade.php ENDPATH**/ ?>