<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div><?php echo e($message); ?></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    <?php if(Session::has('message')): ?>
        <div><?php echo e(Session::get('message')); ?></div>    
    <?php endif; ?>

    <form method="POST" action="http://localhost:8000/me">
        <?php echo csrf_field(); ?>
        <label>名前: </label><input name="name" type="text" value="<?php echo e($user->name); ?>" />
        <label>メールアドレス: </label><input name="email" type="email" value="<?php echo e($user->email); ?>" />
        <button type="submit">変更</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/livehorsekind18/MJAC2/resources/views/users/edit.blade.php ENDPATH**/ ?>