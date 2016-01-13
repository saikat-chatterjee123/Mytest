<?php
if($page == 'login')
{
  echo "Login Page";
}
 ?>
<table>
  <form name="f1" action="<?php echo base_url();?>login/check_login" method="POST">
    <tr>
        <td>Email:</td><td><input type="text" name="uid"></td>
    </tr>
    <tr>
        <td>Password:</td><td><input type="text" name="pass"></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
    </tr>
  </form>

</table>
<p>
  <?php
  if(isset($error))
  {
    echo $error;
  }
  ?>
  </p>
