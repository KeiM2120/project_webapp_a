<h2>sample</h2>

<table border="1">
    <tr>
        <th>フルーツ名</th>
    </tr>
    <?php $__currentLoopData = $fruit_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fruit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($fruit["name"]); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>


<p>合計: <?php echo e($total); ?></p><?php /**PATH /var/www/html/resources/views/sample.blade.php ENDPATH**/ ?>