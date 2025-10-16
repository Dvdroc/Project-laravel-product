<?php $__env->startSection('content'); ?>
<h2 class="text-xl mb-4">Daftar Produk</h2>
<table class="table-auto w-full border">
    <tr class="bg-gray-200">
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Kategori</th>
        <th>Aksi</th>
    </tr>
    <?php $__currentLoopData = $produks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($produk->nama_produk); ?></td>
        <td><?php echo e($produk->harga_produk); ?></td>
        <td><?php echo e($produk->stock_produk); ?></td>
        <td><?php echo e($produk->kategori->nama_kategori); ?></td>
        <td>
            <a href="<?php echo e(route('produks.show',$produk->id)); ?>" class="text-blue-500">Lihat</a>
            <a href="<?php echo e(route('produks.edit',$produk->id)); ?>" class="text-yellow-500 ml-2">Edit</a>
            <form action="<?php echo e(route('produks.destroy',$produk->id)); ?>" method="POST" class="inline">
                <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                <button type="submit" class="text-red-500 ml-2">Hapus</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\framework\produk-kategori\resources\views/produk/index.blade.php ENDPATH**/ ?>