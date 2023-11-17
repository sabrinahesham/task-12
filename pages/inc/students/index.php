
<?php require_once  '../../app/bootstrap.php'   ?>
<?php require_once  path('pages/inc/header.php' )   ?>

<h1 class="text-center m-5"> ALL STUDENTS </h1>

<a class="btn btn-primary mb-5"  href="<?= url('pages/students/create.php')?>"> Add new student</a>

<?php require_once path ('/pages/inc/message.php')   ?>


    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<?php require_once path('pages/inc/footer.php' )   ?>