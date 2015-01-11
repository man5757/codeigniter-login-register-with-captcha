<div class="container" >
<div id="login" >
    <h2>Create an Account</h2>
	<?php echo form_fieldset('') ?>
	<p>Already have an account?  <?php echo anchor('login', 'Log in here');?> </p>
	<p><b>Fields marked with <span style="color:red">**</span> are required</b></p>
    <?php 
        echo form_open('createmember');
		echo form_label('Firstname: ', 'firstname');
		$data = array(
			'name' => 'firstname',
			'id' => 'firstname',
			'size' => '25',
			'placeholder' => 'Enter Firstname',
			'value' => set_value('firstname') 
		);
        echo form_input($data);
        echo "<span style='color:red'>&nbsp;&nbsp;&nbsp;&nbsp;**" .  form_error('first_name') . "</span>";
		echo "<br/>";
		echo form_label('Lastname: ', 'lastname');
		$data = array(
			'name' => 'lastname',
			'id' => 'lastname',
			'size' => '25',
			'placeholder' => 'Enter Lastname',
			'value' => set_value('lastname') 
		);
        echo form_input($data);
		//echo form_input('last_name', set_value('last_name', ''), 'placeholder="Enter Last Name Here" ');
        echo "<span style='color:red'>&nbsp;&nbsp;&nbsp;&nbsp;**" .  form_error('last_name') . "</span>";
		echo "<br/>";
		echo form_label('Email: ', 'email');
		$data = array(
			'name' => 'email',
			'id' => 'email',
			'size' => '25',
			'type' => 'email',
			'placeholder' => 'Enter Email Address',
			'value' => set_value('email') 
		);
		echo form_input($data);
		//echo form_label('Email (Username):');
		//echo form_input('email', set_value('email', ''), 'placeholder="Enter Email Here" ');
        echo "<span style='color:red'>&nbsp;&nbsp;&nbsp;&nbsp;**" .  form_error('email') . "</span>";
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
        echo "<span style='color:red'>&nbsp;&nbsp;&nbsp;&nbsp;**" .  form_error('password') . "</span>";
		echo "<br/>";
		echo form_label('Confirm Password: ', 'confirmpassword');
		$data = array(
			'name' => 'confirmpassword',
			'id' => 'confirmpassword',
			'size' => '25',
			'placeholder' => 'Enter Password',
			'value' => set_value('password') 
		);
		echo form_password($data);
		//echo form_password('password_confirm', set_value('password_confirm', ''), 'placeholder="Confirm Password"');
        echo "<span style='color:red'>&nbsp;&nbsp;**" .  form_error('password_confirm') . "</span>";
		echo "<br/>";
		echo form_label('What is the name of the city you were born?'); 
		echo "<br/>";
		echo form_label('Password Hint: ');
		$data = array(
			'name' => 'passwordhint',
			'id' => 'passwordhint',
			'size' => '25',
			'type' => 'text',
			'placeholder' => 'Enter Password Hint',
			'value' => set_value('passwordhint') 
		);
		echo form_input($data);
		//echo form_input('hint', set_value('hint', ' '), 'placeholder="Enter Password Hint Here" ');
        echo "<span style='color:red'>&nbsp;&nbsp;&nbsp;&nbsp;**" .  form_error('hint') . "</span>";
		echo "<br/>";
		echo form_submit('submit', 'Create Account');
		echo form_fieldset_close();
		echo form_close();
    ?>
     <p id="footer">&copy; 2014 | Babatope Shokunbi - C0642703 </p>
    </div>
</div>