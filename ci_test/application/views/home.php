<h1>Home Page</h1>
Welcome <?php echo $this->session->userdata('name');?>
<span><a href="<?php echo base_url();?>login/logout">Logout</a></span>
