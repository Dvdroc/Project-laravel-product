<?php $__env->startSection('content'); ?>
<h2 class="text-xl mb-4">Edit Produk</h2>
<form action="<?php echo e(route('produks.update',$produk->id)); ?>" method="POST" class="space-y-4">
    <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
    <input type="text" name="nama_produk" value="<?php echo e($produk->nama_produk); ?>" class="border p-2 w-full">
    <input type="number" name="harga_produk" value="<?php echo e($produk->harga_produk); ?>" class="border p-2 w-full">
    <input type="number" name="stock_produk" value="<?php echo e($produk->stock_produk); ?>" class="border p-2 w-full">
    <select name="kategori_id" class="border p-2 w-full">
        <?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($kategori->id); ?>" <?php echo e($produk->kategori_id == $kategori->id ? 'selected' : ''); ?>>
            <?php echo e($kategori->nama_kategori); ?>

        </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <button class="bg-yellow-500 text-white px-4 py-2 rounded">Update</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\framework\produk-kategori\resources\views/produk/edit.blade.php ENDPATH**/ ?>