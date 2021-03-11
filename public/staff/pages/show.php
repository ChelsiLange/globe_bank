<?php require_once('../../../private/initialize.php'); ?>

<?php $page_title = 'Pages'; ?>
<?php include(SHARED_PATH. '/staff_header.php'); ?>

<?php $id = $_GET['id'] ?? '1'; ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">Back</a>

  <div class="page show">
    <?php echo "Page ID Number: ".h($id); ?>
  </div>

</div>

<?php include(SHARED_PATH. '/staff_footer.php'); ?>
