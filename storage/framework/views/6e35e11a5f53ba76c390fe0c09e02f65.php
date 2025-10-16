<?php $__env->startSection('content'); ?>
<h2 class="text-xl mb-4">Detail Produk</h2>
<div class="bg-white p-4 rounded shadow">
    <p><strong>Nama:</strong> <?php echo e($produk->nama_produk); ?></p>
    <p><strong>Harga:</strong> <?php echo e($produk->harga_produk); ?></p>
    <p><strong>Stok:</strong> <?php echo e($produk->stock_produk); ?></p>
    <p><strong>Kategori:</strong> <?php echo e($produk->kategori->nama_kategori); ?></p>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\framework\produk-kategori\resources\views/produk/show.blade.php ENDPATH**/ ?>