<form action="<?php echo e(route('invite')); ?>" method="post">
    <?php echo e(csrf_field()); ?>

    <input type="email" name="email" />
    <button type="submit">Send invite</button>
</form>
