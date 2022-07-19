<!DOCTYPE html>
<html>
<head>
<title>Simple User Management System</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/tablestyles.css')); ?>" media="all" />
   
</head>
<body>
<div class="container">

<div style="padding-left:305px;">
<h1>Simple User Management System</h1>
<a href="<?php echo e(url('users/create')); ?>" title="Add New User">Add New</a><br/>     
<table>
  <tr>
    <th class="c1">ID</th>
    <th class="c2">Name</th>
    <th class="c3">Email</th>
    <th class="c4">Phone</th>
    <th class="c1">Actions</th>
  </tr>
  <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td class="c1"><?php echo e($loop->iteration); ?></td>
    <td class="c2"><?php echo e($item->name); ?></td>
    <td class="c3"><?php echo e($item->email); ?></td>
    <td class="c4"><?php echo e($item->phone); ?></td>
    <td class="c1">
    <a href="<?php echo e(url('/users/' . $item->id . '/edit')); ?>" title="Edit User"><button>Edit</button></a>
    <form method="POST" action="<?php echo e(url('/users' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
    <?php echo e(method_field('DELETE')); ?>

    <?php echo e(csrf_field()); ?>

    <button type="submit" title="Delete User" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete</button>
    </form>    
    </td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table> 
</div>  
</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\LaravelSimpleUMS\resources\views/users/index.blade.php ENDPATH**/ ?>