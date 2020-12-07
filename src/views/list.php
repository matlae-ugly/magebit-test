<?php
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Email list</title>
  </head>
  <body>
    Actions:
    <button type="button" id="delete">Delete</button>
    <button type="button" id="export">Export as CSV</button><br>
    Filter:
    <select id="filter">
      <option value=""></option>
      <?php
        foreach ($data['providers'] as $provider) { ?>
          <option><?=$provider?></option>
        <?php }
      ?>
    </select>
    <a href="javascript:applyFilters('', ' ');">Clear filter</a>
    <table>
      <tr>
        <th><a href="#"></a></th>
        <th><a href="javascript:applyFilters('id', '');">ID</a></th>
        <th><a href="javascript:applyFilters('email', '');">email</a></th>
        <th><a href="javascript:applyFilters('timestamp', '');">Timestamp</a></th>
      </tr>
      <?php
        foreach ($data['emails'] as $email) { ?>
          <tr data-id="<?=$email['id']?>">
            <td><input type="checkbox"></td>
            <td><?=$email['id']?></td>
            <td><?=$email['email']?></td>
            <td><?=$email['timestamp']?></td>
          </tr>
        <?php }
      ?>
    </table>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../public/js/app.js"></script>
  </body>
</html>
