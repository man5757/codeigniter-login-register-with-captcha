<div class="container" >
<div id="login" >
    <h2>Forgot Password</h2>
    <?php 
		echo form_fieldset('');
		echo '<p>Already have an account? ' . anchor('login', 'Log in here') . '</p>';
        echo form_open('forgetpassword');
		echo form_label('Username: ', 'username');
		$data = array(
			'name' => 'username',
			'id' => 'username',
			'size' => '25',
			'type' => 'text',
			'placeholder' => 'Enter Password Hint',
			'value' => set_value('username') 
		);
		echo form_input($data);
        //echo form_input('username', set_value('username', ''), 'placeholder="Enter Username" ');
		echo "<span style='color:red'>&nbsp;&nbsp;&nbsp;&nbsp;**" . form_error('username') . "</span>";
        echo "<br/>";
		echo "<span style='color:red'>" . form_label('What is the password hint you registered with?') . "</span><br/>";
		echo form_label('Password Hint: ', 'passwordhint');
        $data = array(
			'name' => 'passwordhint',
			'id' => 'passwordhint',
			'size' => '25',
			'type' => 'text',
			'placeholder' => 'Enter Password Hint',
			'value' => set_value('passwordhint') 
		);
		echo form_input($data);
        echo "<span style='color:red'>&nbsp;&nbsp;&nbsp;&nbsp;**" . form_error('passwordhint') . "</span>";
		echo "<br/>";
		echo form_submit('submit', 'Login');
		echo form_fieldset_close();
		echo form_close();
    ?>
	 <p id="footer">&copy; 2014 | Babatope Shokunbi - C0642703 </p>
    </div>
</div>
