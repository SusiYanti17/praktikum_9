<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<table class="table table-bordered">
  <thead>
    <tr>
      <th colspan="5"><h2>Biodata</h2></th>
    </tr>
    <tr>
      <th><h4>nama</h4></th>
      <th><h4>umur</h4></th>
      <th><h4>email</h4></th>
      <th><h4>Kampus</h4></th>
      <th><h4>Alamat</h4></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><h4><?php echo e($nama); ?></h4></td>
      <td><h4><?php echo e($umur); ?></h4></td>
      <td><h4><?php echo e($email); ?></h4></td>
      <td><h4><?php echo e($kampus); ?></h4></td>
      <td><h4><?php echo e($alamat); ?></h4></td>
    </tr>
  </tbody>
</table><?php /**PATH D:\web2-app\resources\views/profil.blade.php ENDPATH**/ ?>