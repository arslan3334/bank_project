<?php 

	class Forms{
		public $action = NULL;
		public $method = "GET";
		public $message = NULL;

		public function set_message($message){
			$this->message = $message;
		}

		public function get_message(){
			return $this->message;
		}	


		public function set_action($action){
			$this->action = $action;
		}

		public function get_action(){
			return $this->action;
		}

		public function set_method($method){
			$this->method = $method;
		}
		
		public function get_method(){
			return $this->method;
		}
	
		public function login_form(){
		?>
		<div align="center">
			<fieldset style="border-color: red; border-width: thick; border-style: double;color: green">
				<legend>USER INFO</legend>
				<?php echo isset($this->message)? "<p style='color:red'>".$this->get_message()."</p>" :""; ?>	
				<form action="<?php echo $this->action; ?>" method="<?php echo $this->get_method(); ?>" 
					>
					<table>
						<tr>
							<th>
								ENTER ACCOUNT NUMBER: <span style="color:red">*</span>
							</th>
							<td>
								<input type="text" name="account" placeholder="Enter Your ACCOUNT NUMBER" required="" />
							</td>
						</tr>
						
						<tr>
							<td colspan="2" align="center">
								<br/>
								<input type="submit" name="login" value="Login" />
								&nbsp;
								<input type="reset" name="reset" value="Cancle" />
							</td>
						</tr>
					</table>
				</form>
			</fieldset>	
		</div>
		<?php	
		}


public function signup_form(){
		?>
		<div align="center">
			<fieldset style="background-color: yellow; color: green">

				<legend><h1 style="color: red;">REGISTER YOUR ACCOUNT Here</h1></legend>

				<?php echo isset($this->message)? $this->get_message()."</p>" :""; ?>	
				<form action="<?php echo $this->action; ?>" method="<?php echo $this->get_method(); ?>" 
					>
					<table>

                        <tr>
							<th>
								FULLNAME: <span style="color:red">*</span>
							</th>
							<td>
								<input type="text" name="fullname" placeholder="Enter Your FULLNAME" required="" />
							</td>
						</tr>


                        <tr>
							<th>
								phone: <span style="color:red">*</span>
							</th>
							<td>
								<input type="text" name="phone" placeholder="Enter Your phone" required="" />
							</td>
						</tr>
                   

						<tr>
							<th>
								Email: <span style="color:red">*</span>
							</th>
							<td>
								<input type="email" name="email" placeholder="Enter Your Email" required="" />
							</td>
						</tr>
						

                            <tr>
							<th>
								ACCOUNT NUMBER: <span style="color:red">*</span>
							</th>
							<td>
								<input type="text" name="account" placeholder="ACCOUNT NUMBER" required="" />
							</td>
						</tr>




						<tr>
							<td colspan="2" align="center">
								<br/>
								<input type="submit" name="register" value="REGISTER" />
								&nbsp;
								<input type="reset" name="reset" value="Cancle" />
							</td>
						</tr>
					</table>
				</form>
			</fieldset>	
		</div>
		<?php	
		}



public function deposite(){
		?>
		<div align="center">
			<fieldset style="background-color: yellow;">
				<legend><h1 style="color: green">DEPOSITE AMOUNT $$</h1></legend>
				<?php echo isset($this->message)? $this->get_message()."</p>" :""; ?>	
				<form action="<?php echo $this->action; ?>" method="<?php echo $this->get_method(); ?>" 
					>
					<table>
                      
                      	<tr>
							<th>
								ENTER EMAIL: 
							</th>
							<td>
								<input type="text" name="email" placeholder="Enter VALIDATION code" />
							</td>
						</tr>




						<tr>
							<th>
								ENTER account number: <span style="color:red">*</span>
							</th>
							<td>
								<input type="text" name="account" placeholder="Enter Your ACCOUNT NUM" required="" />
							</td>
						</tr>
                     
                     <tr>
							<th>
								ENTER DEPOSITE AMOUNT : <span style="color:red">*</span>
							</th>
							<td>
								<input type="text" name="amount" placeholder="Enter Your amount" required="" />
							</td>
						</tr>

						<tr>
							
						<tr>
							<td colspan="2" align="center">
								<br/>
								<input type="submit" name="change" value="submit" />
								&nbsp;
								<input type="reset" name="reset" value="Cancle" />
							</td>
						</tr>
					</table>
				</form>
			</fieldset>	
		</div>
		<?php	
		}

public function withdraw(){
		?>
		<div align="center">
			<fieldset style="background-color: yellow">
				<legend> <h1 style="color: green">WITHDRAW AMOUNT</h1></legend>

				<?php echo isset($this->message)? $this->get_message()."</p>" :""; ?>
				<form action="<?php echo $this->action; ?>" method="<?php echo $this->get_method(); ?>" 
					>
					<table>
						<tr>
							<th>
								ENTER  ACCOUNT NUM: <span style="color:red">*</span>
							</th>
							<td>
								<input type="text" name="account" placeholder="Enter Your account num" required="" />
							</td>
						</tr>

                   <tr>
							<th>
								ENTER  AMOUNT: <span style="color:red">*</span>
							</th>
							<td>
								<input type="text" name="amount" placeholder="Enter Your account num" required="" />
							</td>
						</tr>


						
							
						<tr>
							<td colspan="2" align="center">
								<br/>
								<input type="submit" name="forgot" value="submit" />
								&nbsp;
								<input type="reset" name="reset" value="Cancle" />
							</td>
						</tr>
					</table>
				</form>
			</fieldset>	
		</div>
		<?php	
		}





	}








?>