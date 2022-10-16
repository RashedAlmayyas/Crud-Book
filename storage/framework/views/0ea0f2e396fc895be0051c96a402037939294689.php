

<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('content'); ?>
<h1><?php echo e($title); ?></h1>
<form method="get" action="<?php echo e(route('update', ['id'=>$book->id])); ?>">
<div class="form-group row">
    <label for="title" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo e($book->title); ?>">
    </div>
</div>
<div class="form-group row">
    <label for="author" class="col-sm-2 col-form-label">Author</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="author" placeholder="Author" value="<?php echo e($book->author); ?>">
    </div>
</div>
<div class="form-group row">
    <label for="category" class="col-sm-2 col-form-label">Category</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="category" placeholder="Category" value="<?php echo e($book->category); ?>">
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-12 text-right">
    <input type="submit" class="btn btn-secondary" value="Edit">
    </div>
</div>
<?php echo e(csrf_field()); ?>

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\laravel-simple-CRUD\resources\views/books/form.blade.php ENDPATH**/ ?>