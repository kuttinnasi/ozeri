<?php
require 'config.php';
checkLogin();

$data = $conn->query("SELECT * FROM products_register WHERE deleted_at IS NULL ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand">Admin Panel</span>
    <a href="logout.php" class="btn btn-sm btn-danger">Logout</a>
  </div>
</nav>

<div class="container mt-4">

<div class="mb-3">
  <a href="export_all.php" class="btn btn-success">
    Export All to Excel
  </a>
</div>


<form method="post" action="delete_multi.php">
<table id="records" class="table table-bordered">
  <thead>
    <tr>
      <th><input type="checkbox" id="checkAll"></th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>City</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = $data->fetch_assoc()): ?>
    <tr>
      <td><input type="checkbox" name="ids[]" value="<?= $row['id'] ?>"></td>
      <td><?= $row['name'] ?></td>
      <td><?= $row['email'] ?></td>
      <td><?= $row['phone'] ?></td>
      <td><?= $row['city'] ?></td>
      <td>
       <button 
  type="button" 
  class="btn btn-sm btn-info viewBtn" 
  data-id="<?= $row['id'] ?>">
  View
</button>

      </td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>

<button class="btn btn-danger mt-2">Delete Selected</button>
</form>

</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>

<script>
$(function () {
  $('#records').DataTable({
    dom: 'Bfrtip',
    buttons: ['excel']
  });

  $('#checkAll').on('click', function(){
    $('input[name="ids[]"]').prop('checked', this.checked);
  });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
$(document).on('click', '.viewBtn', function () {
    let id = $(this).data('id');

    $('#modalContent').html('Loading...');
    let modal = new bootstrap.Modal(document.getElementById('viewModal'));
    modal.show();

    $.ajax({
        url: 'view.php',
        type: 'GET',
        data: { id: id },
        success: function (res) {
            $('#modalContent').html(res);
        }
    });
});
</script>


<!-- View Modal -->
<div class="modal fade" id="viewModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registration Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body" id="modalContent">
        <div class="text-center">Loading...</div>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


</body>
</html>
