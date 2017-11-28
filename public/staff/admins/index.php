<?php

require_once('../../../private/initialize.php');

require_login();

$admin_set = find_all_admins();

$page_title = 'Admins';

include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="admins listing">
    <h1>Admins</h1>

    <div class="actions">
      <a class="action" href="<?= url_for('/staff/admins/new.php'); ?>">Create New Admin</a>
    </div>

    <table class="list">
      <tr>
        <th>ID</th>
        <th>First</th>
        <th>Last</th>
        <th>Email</th>
        <th>Username</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>

      <?php while($admin = mysqli_fetch_assoc($admin_set)) { ?>
        <tr>
          <td><?= h($admin['id']); ?></td>
          <td><?= h($admin['first_name']); ?></td>
          <td><?= h($admin['last_name']); ?></td>
          <td><?= h($admin['email']); ?></td>
          <td><?= h($admin['username']); ?></td>
          <td><a class="action" href="<?= url_for('/staff/admins/show.php?id=' . h(u($admin['id']))); ?>">View</a></td>
          <td><a class="action" href="<?= url_for('/staff/admins/edit.php?id=' . h(u($admin['id']))); ?>">Edit</a></td>
          <td><a class="action" href="<?= url_for('/staff/admins/delete.php?id=' . h(u($admin['id']))); ?>">Delete</a></td>
        </tr>
      <?php } ?>
    </table>

    <?php
      mysqli_free_result($admin_set);
    ?>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
