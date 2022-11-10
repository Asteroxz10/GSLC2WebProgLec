

<?php $__env->startSection('title', 'Lobby'); ?>

<?php $__env->startSection('content'); ?>
    
    <table style="background-color: #8D72E1">
        <tr>
            <td style="width: 85%">
                <div style="margin-left: 20px; margin-bottom: 30px ; color: aqua">
                    <h1>Heaven</h1>
                    <h2>Best Starting 6:</h2>
                </div>
                <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $pokData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pokemon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-md-4"  >
                    <div class="card" style="height: 450px ; margin-bottom: 70px; margin-right: 10px; border-radius: 30px">
                    <img src="<?php echo e($pokemon->image_url); ?>" alt="" style="width: 50% ; margin:auto ; height: 40% ">
                    <div class="card-body" style="background-color: #BCEAD5 ; border-radius: 0 0 30px 30px">
                    <table>
                        <tr>
                            <h1 class="card-title"><?php echo e($pokemon->name); ?></h1>
                            <h2 class="card-title"><?php echo e($pokemon->type); ?></h2>
                        </tr>
                        <tr>
                        <td style="width: 50%">
                            <h3>Health    : 300</h3>
                            <h3>Attack    : 385</h3>
                            <h3>Defense   : 187</h3>
                        </td>
                        <td>
                            <h3>Sp-Attack : 405</h3>
                            <h3>Sp-Defense: 164</h3>
                            <h3>Speed     : 398</h3>
                        </td>
                    </tr>
                </table>
            </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p>no pokemon</p>
            <?php endif; ?>
        </div>
            </td>
            <td style="background-color: #404258 ; color: white">
                <div style="position: absolute; top: 30px">
                    <div style="background-color: #BCEAD5">
                        <h1 style="background-color:#BCEAD5; color: black">Trainers Beat :</h1>
                    </div>
                    <h2>- Albert</h2>
                    <h2>- Steven</h2>
                    <h2>- Jack</h2>
                    <h2>- Ruffus    </h2>
                    <h2>- James</h2>
                    <h2>- Xorex</h2>
                    <h2>- Axel</h2>
                </div>
            </td>
        </tr>
    </table>        
    



   
    
   


    
    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\GSLCWebLec\code\resources\views/lobby.blade.php ENDPATH**/ ?>