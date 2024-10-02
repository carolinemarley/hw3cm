<h1>Authors</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      </tr>
    </thead>
    <tbody>
      <?php
        while ($author = $author->fetch_assoc()){
        ?>

      <tr>
        <td><?php echo $author['AuthorID']; ?>></td>
        <td><?php echo $author['FirstName']; ?> </td>
        <td><?php echo $author['LastName']; ?></td>
      </tr>
        <?php
        }
      ?>
    </tbody>
  </table>
</div>
