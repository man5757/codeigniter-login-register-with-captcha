<div class="container" >
<div id="login" >
   <h2>CodeIgniter Login Form</h2>
   <?php echo form_fieldset('') ?>
   <p><b>Fields marked with <span style="color:red">**</span> are required</b></p>
    <?php echo form_open('verifylogin');
		echo form_label('Username: ', 'username');
		$data = array(
			'name' => 'username',
			'id' => 'username',
			'size' => '25',
			'type' => 'email',
			'placeholder' => 'Enter Username',
			'value' => set_value('username') 
		);
		echo form_input($data);
		echo "<span style='color:red'>&nbsp;&nbsp;&nbsp;&nbsp;**" . form_error('username') . "</span>";
        echo "<br/>";
		echo form_label('Password: ', 'password');
		$data = array(
			'name' => 'password',
			'id' => 'password',
			'size' => '25',
			'placeholder' => 'Enter Password',
			'value' => set_value('password') 
		);
		echo form_password($data);
		//echo form_password('password', set_value('password', ''), 'placeholder="Enter Password Here" ');
        echo " <span style='color:red'>&nbsp;&nbsp;&nbsp;&nbsp;**" . form_error('password') . "</span>";
		echo "<br/>";
	?>

  <?php
  $this->load->helper('captcha');
     $vals = array(
   'img_path' => './captcha/',
   'img_url' => 'http://localhost:80/PHP_Term_project/captcha/',
    'img_width'	=> '150',
    'img_height' => 60
   );
   
   $cap = create_captcha($vals);
   
   $data = array(
		'captcha_time' => $cap['time'],
		'ip_address' => $this->input->ip_address(),
		'word' => $cap['word']
		);
		
	$query = $this->db->insert_string('captcha', $data);
	$this->db->query($query);

echo 'Submit the word you see below: <br/><br/>';
echo $cap['image'] . "<br/><br/>";
echo form_label('Captcha: ', 'captcha');
$data = array(
			'name' => 'captcha',
			'id' => 'captcha',
			'size' => '25',
			'placeholder' => 'Enter Captcha' 
		);
echo form_input($data) . "<span style='color:red'>&nbsp;&nbsp;&nbsp;&nbsp;**".form_error('captcha'). "</span>";
echo "<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
$data = array(
			'name' => 'button',
			'id' => 'button',
			'type' => 'submit',
			'value' => 'Login'
		);
echo form_submit($data);
echo form_checkbox('login-remember', 'Remember Me', False);
echo " Remember Me";
		
		
echo "<br /><br />";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . anchor('createmember', 'Create Account');
echo " | ";
echo anchor('forgetpassword', 'Forgot Password');
echo form_fieldset_close();
echo form_close(); 
?>
 <p id="footer">&copy; 2014 | Babatope Shokunbi - C0642703 </p>
      </div>

</div>
