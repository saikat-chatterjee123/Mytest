<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $page_title;?></title>
    <link rel="stylesheet" media="screen" href="<?php echo HTTP_CSS_PATH.'style.css';?>" />
    <script src="<?php echo base_url().'assets/js/script.js';?>" type="text/javascript"></script>
  </head>
  <body>

    <?php $this->load->view('includes/header'); ?>
    <?php $this->load->view($main_content);?>
    <?php $this->load->view('includes/footer'); ?>
  </body>
</html>
