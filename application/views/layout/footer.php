<footer class="main-footer">
<!-- Default to the left -->
  <strong>Copyright &copy; <?php echo date('Y') ?> </strong> All rights reserved.
</footer>

<script src="<?php echo base_url(); ?>assets\plugins\jQuery\jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets\bootstrap\js\bootstrap.min.js"></script>
<script type="text/javascript">

  $('.dropdown-container')
  .on('click', '.dropdown-button', function() {
      $('.dropdown-list').toggle();
  });
</script>

</body>
</html>
