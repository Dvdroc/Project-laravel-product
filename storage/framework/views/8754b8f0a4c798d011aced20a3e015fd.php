<?php $__env->startSection('content'); ?>
<h2 class="text-xl mb-4">Daftar Kategori</h2>
<a href="<?php echo e(route('kategoris.create')); ?>" class="bg-green-500 text-white px-4 py-2 rounded">Tambah Kategori</a>

<table class="table-auto w-full mt-4 border">
    <tr class="bg-gray-200">
        <th>Nama Kategori</th>
        <th>Aksi</th>
    </tr>
    <?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($kategori->nama_kategori); ?></td>
        <td>
            <a href="<?php echo e(route('kategoris.edit',$kategori->id)); ?>" class="text-yellow-500">Edit</a>
            <form action="<?php echo e(route('kategoris.destroy',$kategori->id)); ?>" method="POST" class="inline">
                <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                <button type="submit" class="text-red-500 ml-2">Hapus</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\framework\produk-kategori\resources\views/kategori/index.blade.php ENDPATH**/ ?>