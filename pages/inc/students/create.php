<?php require_once  '../../app/bootstrap.php'   ?>
<?php require_once  path('pages/inc/header.php' )   ?>

<h1 class="text-center m-5"> ADD NEW STUDENTS </h1>

<a class="btn btn-primary mb-5"  href="<?= url('pages/students/index.php')?>"> ALLstudent</a> 
<?php require_once path ('/pages/inc/message.php')   ?>


<form action =" <?= url('handlers/students/store.php')?>" method = "POST">
<div class="mb-3">
    <label for="name" class="form-label">name</label>
    <input type="text" class="form-control" name = "name" id="name" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name= "email" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">phone</label>
    <input type="text" class="form-control" name = "phone" id="phone" aria-describedby="emailHelp">
    
  </div>

  <button type="submit" class="btn btn-primary">add</button>
</form>

    


<?php require_once path('pages/inc/footer.php' )   ?>