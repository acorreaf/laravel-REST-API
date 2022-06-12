



<?php $__env->startSection('content'); ?>
<div class="container">
    <div style="padding-top: 1.5rem;" class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header text-center">Episodios</h3>
                <div class="card-body">
                    <?php if(!empty($episodes)): ?>
                        <div class="row">
                            <div class="card-deck">
                                <?php $__currentLoopData = $episodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $episode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                                <div class="col-md-4">

                                    <div class="card border-dark mb-3" style="max-width: 18rem;">
                                        <div class="card-header">Episodio # <?php echo e($episode->id); ?></div>
                                        <div class="card-body text-dark">
                                            <h5 class="card-title"><?php echo e($episode->name); ?></h5>
                                            <span class="card-text">Air_date: <?php echo e($episode->air_date); ?></span><br/>
                                            <span class="card-text">URL: <?php echo e($episode->url); ?></span><br/>
                                            <p class="card-text">Created <small class="text-muted"><?php echo e($episode->created); ?></small></p>
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-test\resources\views/restapi/episodes.blade.php ENDPATH**/ ?>