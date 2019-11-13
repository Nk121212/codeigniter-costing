<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/login.css">
<script src="<?php echo base_url(); ?>js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/login.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/sweetalert.min.js"></script>

<?php if(isset($error)) { echo $error; }; ?>
<hgroup>
</hgroup>
<form action="<?php echo base_url() ?>login" method="post">
  <div align="center" class="group">
    <h3 style="font-family: fantasy; color: #2E2E2E;"><span style="font-family: fantasy;color: #4285F4;">e</span>-Costing</h3>
  </div>
  <div class="group">
    <input type="text" name="username"><span class="highlight"></span><span class="bar"></span>
    <label>Username</label>
    <?php echo form_error('username'); ?>
  </div>
  <div class="group">
    <input type="password" name="password"><span class="highlight"></span><span class="bar"></span>
    <label>Password</label>
    <?php echo form_error('password'); ?>
  </div>
  <button type="submit" class="button buttonBlue">Login
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>
<footer><a href="#"><img src="<?php echo base_url(); ?>image/icon/login.svg"></a>
  <p>You Gotta Like <a href="" target="_blank">Sipatex 2018</a></p>
</footer>

<script type="text/javascript">
  $(document).ready(function(){

  var browser = '';
  var browserVersion = 0;

  if (/Opera[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
      swal('Gunakan Google Chrome Ver.71.+', 'Supaya Compatible', 'warning');
  } else if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)) {
      swal('Gunakan Google Chrome Ver.71.+', 'Supaya Compatible', 'warning');
  } else if (/Navigator[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
      swal('Gunakan Google Chrome Ver.71.+', 'Supaya Compatible', 'warning');
  } else if (/Chrome[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
      //swal('Gunakan Google Chrome Ver.7+', 'Supaya Compatible', 'warning');
  } else if (/Safari[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
      swal('Gunakan Google Chrome Ver.71.+', 'Supaya Compatible', 'warning');
  } else if (/Firefox[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
      swal('Gunakan Google Chrome Ver.71.+', 'Supaya Compatible', 'warning');
  }
  if(browserVersion === 0){
      browserVersion = parseFloat(new Number(RegExp.$1));
  }
  //alert(browser + "*" + browserVersion);
  })
</script>