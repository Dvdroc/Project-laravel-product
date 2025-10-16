<?php $__env->startSection('content'); ?>
<h2 class="text-xl mb-4">Tambah Produk</h2>

<form action="<?php echo e(route('produks.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="mb-4">
        <label>Nama Produk:</label>
        <input type="text" name="nama_produk" class="border p-2 w-full" required>
    </div>

    <div class="mb-4">
        <label>Harga:</label>
        <input type="number" name="harga_produk" class="border p-2 w-full" required>
    </div>

    <div class="mb-4">
        <label>Stok:</label>
        <input type="number" name="stock_produk" class="border p-2 w-full" required>
    </div>

    <div class="mb-4">
        <label>Kategori:</label>
        <select name="kategori_id" class="border p-2 w-full" required>
            <option value="">-- Pilih Kategori --</option>
            <?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($kategori->id); ?>"><?php echo e($kategori->nama_kategori); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\framework\produk-kategori\resources\views/produk/create.blade.php ENDPATH**/ ?>