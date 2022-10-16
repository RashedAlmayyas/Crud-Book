

<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('content'); ?>
<h1><?php echo e($title); ?></h1>
<div class="text" id="dock_panel">

<span class="text">Rashed Crud Book</span>
<span class="text" style="font-size: 11px;" id="direct_nav"></span>

</div>


<div class="book_wrapper">
<a id="next_page_button"></a>
<a id="prev_page_button"></a>
<div id="loading" class="loading">Loading pages...</div>

<div id="mybook" style="display:none;">
    <div class="load">				
<h1>Laravel Basic CRUD [Books]	</h1>
<p style="padding-left: 6%; padding-top: 20%;">This site adds and displays books,<br> and enables us to update or delete <br>the data for books</p>
    </div>
    <div class="b-load">
        <div>
            <!--<img src="ui/1.jpg" alt=""/>//-->
            <h1>Add Book</h1>
            
            <form style="padding-left: 28%; padding-top: 12%;" method="post" action="<?php echo e(route('create')); ?>">
                <p>title:</p>
                <input type="text" id="fname" name="title">
                <p>description:</p>
                <input type="text" id="lname" name="author">
                <p>auther:</p>
                <input type="text" id="fname" name="category">
                <p>image:</p>
                <input type="text" id="lname" name="lname"><br><br>
                   <?php echo e(csrf_field()); ?>

            
                <button type="submit" style="border: none; padding-right: 40%;" value="Add New"><p>Add</p></button><br>

              </form>
            </p>
    </div>        <div>
            <img src="ui/3.jpg" alt="" />
            
        </div>
        <div>
            <h1>>I am Rashed Al-Mayyas </h1><p style="padding-left: 17%; padding-top: 8%;">Im Web developer I would like to present to <br> you the crud book project laravel in a<br> unique way. <br>I hope you like it</p>
            <br><br>				<h1>To communicate with me</h1>	
                            <br><br>	
            <p style="padding-left: 17%;">Phone Number : 0778083602</p>	
            <p style="padding-left: 17%;"> Githum : <a href="https://github.com/RashedAlmayyas">RashedAlmayyas </a></p>

            <p style="padding-left: 17%;"> Email : <a href="mailto:mayyasalghwari@gmail.com">mayyasalghwari@gmail.com </a></p>

            <p style="padding-left: 35%; padding-top: 12%;">Thank you </p>
        </div>

    </div></div>

    </div></div>

    <br><br><br><br><br><br><br><br><br><br>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for title.." title="Type in a title">

    
<table id="myTable" >
  <tr class="header">
    <th style="width:10%;">#</th>
    <th style="width:20%;">title</th>
    <th style="width:20%;">author</th>
    <th style="width:20%;">description</th>
    <th style="width:20%;">option</th>

  
  </tr>
  <tbody>
    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th ><?php echo e($loop->iteration); ?></th>
            <td><?php echo e($book->title); ?></td>
            <td><?php echo e($book->author); ?></td>
            <td><?php echo e($book->category); ?></td>
            <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Option">
                    <input type="submit" value="Update"  class="tb2" onClick="location.href='<?php echo e(route('updateform', ['id'=>$book->id])); ?>'">
                        
                    <input type="submit" value="Delete"class="tb1" onClick="location.href='<?php echo e(route('delete', ['id'=>$book->id])); ?>'">
                        
                  
                </div>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <form method="post" action="<?php echo e(route('create')); ?>">
        <tr>
            <th>#</th>
            <td><input type="text" class="form-control" name="title" placeholder="Title"></td>
            <td><input type="text" class="form-control" name="author" placeholder="Author"></td>
            <td><input type="text" class="form-control" name="category" placeholder="Category"></td>
            <td>
            <?php echo e(csrf_field()); ?>

            <input type="submit" class="btn btn-secondary" value="Add New">
            </td>
        </tr>
    </form>
  </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\laravel-simple-CRUD\resources\views/books/layout.blade.php ENDPATH**/ ?>