<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container mt-3">
  <h2>Products</h2>
  <a href="<?= base_url('add') ?>">Add</a>
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>UPC</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Expiry_Date</th>
        <th>Created_At</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($product as $pr): ?>
                <tr>
                    <td><?= $pr['ID'] ?></td>
                    <td><?= $pr['UPC'] ?></td>
                    <td><?= $pr['Name'] ?></td>
                    <td><?= $pr['Quantity'] ?></td>
                    <td><?= $pr['Price'] ?></td>
                    <td><?= $pr['Expiry_Date'] ?></td>
                    <td><?= $pr['Created_At'] ?></td>
                    <td>
                      <a href = "/update/<?= $pr['ID']?>">Edit</a>
                      <a href = "/delete/<?= $pr['ID']?>">Delete</a>
                    </td>
                </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
</div>
</body>
</html>