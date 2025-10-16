<?php $__env->startSection('content'); ?>
<h2 class="text-xl mb-4">Tambah Kategori</h2>

<form action="<?php echo e(route('kategoris.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="mb-4">
        <label>Nama Kategori:</label>
        <input type="text" name="nama_kategori" class="border p-2 w-full" required>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\framework\produk-kategori\resources\views/kategori/create.blade.php ENDPATH**/ ?>