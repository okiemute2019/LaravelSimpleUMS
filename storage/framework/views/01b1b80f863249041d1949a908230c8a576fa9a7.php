<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Registration</title>
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo e(asset('/css/formstyles.css')); ?>">
    </head>
    <body>
        <h1>Edit User</h1>
        <p style="text-align:center"><a href="<?php echo e(route('users.index')); ?>">Back</a></p>
        <form action="<?php echo e(url('users/' .$users->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <fieldset>
          <legend>Your Basic info</legend>
          <input type="hidden" name="id" id="id" value="<?php echo e($users->id); ?>" id="id" />
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" value="<?php echo e($users->name); ?>">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="email" value="<?php echo e($users->email); ?>">
          
          <label for="phone">Phone:</label>
          <input type="tel" id="phone" name="phone" value="<?php echo e($users->phone); ?>">
          
        </fieldset>
    
        <input type="submit" value="Update"></br>
      </form>
      
    </body>
</html><?php /**PATH C:\xampp\htdocs\LaravelSimpleUMS\resources\views/users/editUser.blade.php ENDPATH**/ ?>