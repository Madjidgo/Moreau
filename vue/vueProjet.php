
 <h2>TodoList</h2>
<table>
  <thead>
    <tr>
      <th>N</th>
      <th>task</th>
      <th>Action</th>
    </tr>
  </thead>
</table>

<tbody>
  <tr>
    <td><?php echo $value['projet']; ?></td>
    <td>this is first task</td>
    <td></td>
    <a href="projet.php">x</a>
  </tr>
</tbody>

<form class="" action="index.php" method="post">
  <input type="number" name="admin_id" value="" placeholder="number">
  <input type="text" name="projet" value="" placeholder="projet">


  <button type="submit" name="submit" value="Add task">task</button>

</form>
