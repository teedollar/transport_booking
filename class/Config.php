<?php

	class Config {

	public $conn;
	public $query;
	public $db_name = "booking";


	public function __construct(){
		$this->conn = $this->dbEngine();
	}

	public function dbEngine(){
		try{
			$this->conn = new PDO("mysql:host=localhost;dbname=$this->db_name","root","");
				$this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
		return $this->conn;
	}

	public function client_login($email, $password){
		try{
			$this->query = $this->conn->prepare("SELECT client_id, email, password FROM client WHERE email = :email AND password = :password");
			$this->query->execute(array(':email' =>$email, ':password' => $password));
			$row = $this->query->rowCount();
			$client = $this->query->fetch();
			if( (!empty($email)) && (!empty($password)) )
			{
				if($row > 0){
					@session_start();
					$_SESSION['c_id'] = $client['client_id'];

					?>
					<center>
						<b style='color:darkgreen; font-size:18px'>Login successful</b>
					</center>

					<?php

					$url = "home.php";
      				header("Refresh: 1; URL='$url'");
				}
				else{
					?>
					<center>
						<b style='color:red; font-size:18px'>Invalid email or password</b>
					</center>

					<?php
				}
			}
			else{
					?>
					<center>
						<b style='color:red; font-size:18px'>Enter both email and password</b>
					</center>
					
					<?php
				}
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function admin_login($email, $password){
		try{
			$this->query = $this->conn->prepare("SELECT id, email, password FROM admin WHERE email = :email AND password = :password");
			$this->query->execute(array(':email' =>$email, ':password' => $password));
			$row = $this->query->rowCount();
			$admin = $this->query->fetch();
			if( (!empty($email)) && (!empty($password)) )
			{
				if($row > 0){
					@session_start();
					$_SESSION['a_id'] = $admin['id'];

					?>
					<center>
						<b style='color:darkgreen; font-size:18px'>Login successful</b>
					</center>

					<?php

					$url = "dashboard.php";
      				header("Refresh: 2; URL='$url'");
				}
				else{
					?>
					<center>
						<b style='color:red; font-size:18px'>Invalid email or password</b>
					</center>

					<?php
				}
			}
			else{
					?>
					<center>
						<b style='color:red; font-size:18px'>Enter both email and password</b>
					</center>
					
					<?php
				}
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}


	public function register($s_name, $o_name, $email, $password, $p_num, $address, $nok_sname, $nok_oname, $nok_email, $nok_p_num, $nok_reln, $nok_address)
	{
		try
		{
			if( (!empty($s_name)) && (!empty($o_name)) && (!empty($email)) && (!empty($p_num)) && (!empty($password)) && (!empty($address)) && (!empty($nok_sname)) && (!empty($nok_oname)) && (!empty($nok_email)) && (!empty($nok_p_num)) && (!empty($nok_reln)) && (!empty($nok_address)) )
			{
				$email = strtolower($email);
				$password = strtolower($password);

				if($this->checkEmail($email) == 0)
				{
					if(strlen($password )> 5  )
					{

							$this->query = $this->conn->prepare( "INSERT INTO client (surname, othername, email, password, phone_num, address, nok_surname, nok_othername, nok_email, nok_phone_num, nok_reln, nok_address) VALUES (:s_name, :o_name, :email, :password, :p_num, :address, :nok_s_name, :nok_o_name, :nok_email, :nok_p_num, :nok_reln, :nok_address) ");
					
							$this->query->execute(array(':s_name' => $s_name, ':o_name' => $o_name, ':email' => $email, ':password' => $password, ':p_num' => $p_num, ':address' => $address, ':nok_s_name' => $nok_sname, ':nok_o_name' => $nok_oname, ':nok_email' => $nok_email, ':nok_p_num' => $nok_p_num, ':nok_reln' => $nok_reln, ':nok_address' => $nok_address));


							$user = $this->selectUser($email);

							@session_start();
							$_SESSION['c_id'] = $user['client_id'];
							$_SESSION['email'] = $user['email'];
						
							?>
							<center>
								<b style='color:darkgreen; font-size:18px'>Registration successfully. You will be logged in </b>
							</center>

							<?php
							$url = 'home.php';
							header("Refresh: 2; URL = '$url' ");
					}else
					{
						?>
						<center>
							<b style='color:red; font-size:18px'>Password should not be less than 6 characters </b>
						</center>

						<?php
					}
				}else
				{
					?>
					<center>
						<b style='color:red; font-size:18px'>email has already been registered </b>
					</center>

					<?php
				}
			}else
			{
				?>
				<center>
					<b style='color:red; font-size:18px'>Fill all compulsory fields </b>
				</center>

				<?php
			}

							
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}


	public function book_vehicle($src_name, $src_address, $src_state, $dest_name, $dest_address, $dest_state, $trip_type, $trip_date, $day, $month, $year, $vehicle_want, $trip_form, $client_id)
	{
		try
		{
			if( (!empty($src_name)) && (!empty($src_address)) && (!empty($src_state)) && (!empty($dest_name)) && (!empty($dest_address)) && (!empty($dest_state)) && (!empty($trip_type)) && (!empty($day)) && (!empty($month)) && (!empty($year)) && (!empty($vehicle_want)) && (!empty($trip_form)) )
			{


				$this->query = $this->conn->prepare( "INSERT INTO booking (src_name, src_address, src_state, dest_name, dest_address, dest_state, trip_type, trip_date, vehicle_want, trip_form, client_id, status) VALUES (:src_name, :src_address, :src_state, :dest_name, :dest_address, :dest_state, :trip_type, :trip_date, :vehicle_want, :trip_form, :client_id, 0) ");
		
				$this->query->execute(array(':src_name' => $src_name, ':src_address' => $src_address, ':src_state' => $src_state, ':dest_name' => $dest_name, ':dest_address' => $dest_address, ':dest_state' => $dest_state, ':trip_type' => $trip_type, ':trip_date' => $trip_date, ':vehicle_want' => $vehicle_want, ':trip_form' => $trip_form, ':client_id' => $client_id ));
			
				?>
				<center>
					<b style='color:darkgreen; font-size:18px'>Your booking is successful. Your booking receipt will be shown now </b>
				</center>

				<?php
				$url = 'my_receipt.php';
				header("Refresh: 2; URL = '$url' ");
				
			}else
			{
				?>
				<center>
					<b style='color:red; font-size:18px'>Fill all compulsory fields </b>
				</center>

				<?php
			}

							
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}


	public function checkEmail($email){
		try{
			$this->query = $this->conn->prepare("SELECT * FROM client WHERE email = :email ");
			$this->query->execute(array(':email' => $email));
			$row = $this->query->rowCount();

			return $row;
			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function selectUser($email){
		try{
			$this->query = $this->conn->prepare("SELECT *, COUNT(client_id) AS num FROM client WHERE email = :email ");
			$this->query->execute(array(':email' => $email));
			$row = $this->query->fetch();

			return $row;
			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function makeEnquiry($topic, $msg, $client_id){
		try{

			if( (!empty($topic)) && (!empty($msg)) ){

				$this->query = $this->conn->prepare(" INSERT INTO enquiry (topic, message, client_id) VALUES (:topic, :msg, :client_id) ");
				$this->query->execute(array(':topic' => $topic, ':msg' => $msg, ':client_id' => $client_id ));

				?>

				<center>
					<b style='color:#fff; font-size:18px; background: darkgreen; padding: 20px'>Your message has reached us. We will reply you soonest </b><br><br>
				</center>

				<?php
				
			}else
			{
				?>
				<center>
					<b style='color:red; font-size:18px'>Fill all compulsory fields </b><br>
				</center>

				<?php
			}
			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}


	public function echos($topic){
			echo "<h1>".$topic."</h1>";
	}


	public function addSubject($subject){
		try{

			if(!empty($subject)){
				$this->query = $this->conn->prepare("INSERT INTO subject_enq (body) VALUES (:sub)");
				$this->query->execute(array(':sub' => $subject));

				?>
				<center>
					<b style='color:darkgreen; font-size:18px'>Subject added successfully. </b>
				</center>

				<?php


			}
			else{
				?>
				<center>
					<b style='color:red; font-size:18px'>Enter into subject field </b>
				</center>

				<?php
			}
			
			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function getSubject(){
		try{

			
			$this->query = $this->conn->prepare("SELECT * FROM subject_enq");
			$this->query->execute();
			$row = $this->query->fetchAll();

			return $row;
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function client_auth()
	{
		if(!isset($_SESSION['c_id']))
		{
			header("Location: index.php");
		}

	}

	public function client_auth_fwd()
	{
		if(isset($_SESSION['c_id']))
		{
			header("Location: home.php");
		}

	}


	public function selectAdminName($id){
		try{
			$this->query = $this->conn->prepare("SELECT name FROM admin WHERE id = :id ");
			$this->query->execute(array(':id' => 1));
			$row = $this->query->fetch();

			return $row['name'];
			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function getBookings(){
		try{
			$this->query = $this->conn->prepare("SELECT a.surname, a.othername, a.email, a.phone_num, b.bk_id, b.client_id FROM client AS a, booking AS b WHERE a.client_id = b.client_id AND status = 0 ");
			$this->query->execute();
			$row = $this->query->fetchAll();

			return $row;
			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function getEnquiries(){
		try{
			$this->query = $this->conn->prepare("SELECT * FROM enquiry WHERE status = 0 ");
			$this->query->execute();
			$row = $this->query->fetchAll();

			return $row;
			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}


	public function readEnquiries($e_id){
		try{
			$this->query = $this->conn->prepare("SELECT * FROM enquiry WHERE e_id = :e_id ");
			$this->query->execute(array(':e_id' => $e_id));

			$row = $this->query->fetch();

			return $row;
			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	

	public function replyEnquiries($e_id, $topic, $reply, $client_id){
		try{

			if(!empty($reply))
			{
				$this->query = $this->conn->prepare("INSERT INTO notification ( topic, message, client_id, read_by ) VALUES (:topic, :reply, :client_id, :read) ");
				$this->query->execute(array(':topic' => $topic, ':reply' => $reply, ':client_id' => $client_id, ':read' => 0));

				if($this->updateEnquiries($e_id))
				{

					?>
					<center>
						<b style='color:darkgreen; font-size:18px'>You have successfully replied the message</b>
					</center>

					<?php
				}


			}
			else{
				?>
				<center>
					<b style='color:red; font-size:18px'>Please type your reply</b>
				</center>

				<?php
			}
			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function updateEnquiries($e_id){
		try{
			$this->query = $this->conn->prepare("UPDATE enquiry SET status = 1 WHERE e_id = :e_id");
			$this->query->execute(array(':e_id' => $e_id));

			return true;

			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}


	public function getClient($client_id){
		try{
			$this->query = $this->conn->prepare("SELECT surname, othername FROM client WHERE client_id = :client_id ");
			$this->query->execute(array(':client_id' => $client_id));

			$row = $this->query->fetch();
			$name = $row['surname']." ".$row['othername'];

			return $name;
			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function getClientDetails($client_id){
		try{
			$this->query = $this->conn->prepare("SELECT * FROM client WHERE client_id = :client_id ");
			$this->query->execute(array(':client_id' => $client_id));

			$row = $this->query->fetch();

			return $row;
			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function getNotification($client_id){
		try{
			$this->query = $this->conn->prepare("SELECT * FROM notification WHERE client_id = :client_id AND read_by = 0");
			$this->query->execute(array(':client_id' => $client_id));

			$row = $this->query->fetchAll();

			return $row;
			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function countNotification($client_id){
		try{
			$this->query = $this->conn->prepare("SELECT * FROM notification WHERE client_id = :client_id AND read_by = 0");
			$this->query->execute(array(':client_id' => $client_id));

			$row = $this->query->rowCount();

			return $row;
			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}


	public function readNotification($n_id){
		try{
			$this->query = $this->conn->prepare("SELECT * FROM notification WHERE n_id = :n_id ");
			$this->query->execute(array(':n_id' => $n_id));

			$row = $this->query->fetch();

			$this->updateNotification($n_id);

			return $row;
			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function updateNotification($n_id){
		try{
			$this->query = $this->conn->prepare("UPDATE notification SET read_by = 1 WHERE n_id = :n_id ");
			$this->query->execute(array(':n_id' => $n_id));

			return true;
			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}


	public function updateBooking($bk_id){
		try{
			$this->query = $this->conn->prepare("UPDATE booking SET status = 1 WHERE bk_id = :bk_id ");
			$this->query->execute(array(':bk_id' => $bk_id));

			return true;
			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}


	public function my_receipt($client_id){
		try{
			$this->query = $this->conn->prepare("SELECT a.*, b.* FROM booking AS a, client AS b WHERE a.client_id = :client_id AND a.client_id = b.client_id ORDER BY a.client_id DESC ");
			$this->query->execute(array(':client_id' => $client_id));

			$row = $this->query->fetch();

			return $row;
			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}


	public function view_receipt($bk_id){
		try{
			$this->query = $this->conn->prepare("SELECT a.*, b.* FROM booking AS a, client AS b WHERE a.bk_id = :bk_id AND a.client_id = b.client_id ");
			$this->query->execute(array(':bk_id' => $bk_id));

			$row = $this->query->fetch();

			return $row;
			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}


		public function addAmount($price, $bk_id){
		try{
			if(!empty($price))
			{
				if(is_numeric($price))
				{
					$this->query = $this->conn->prepare("UPDATE booking SET amount = :price WHERE bk_id = :bk_id ");
					$this->query->execute(array(':price' => $price, ':bk_id' => $bk_id));

					//$this->replyEnquiries($e_id, $topic, $reply, $client_id);

					?>
					<center>
						<b style='color:darkgreen; font-size:18px'>Amount successfully added</b>
					</center>

					<?php

					return true;

				}
				else{
					?>
						<center>
							<b style='color:darkred; font-size:18px'>Amount should be numeric</b>
						</center>

					<?php
				}

			}
			else
			{
				?>
						<center>
							<b style='color:darkred; font-size:18px'>Please enter an amount</b>
						</center>

					<?php
			}


			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}


	public function replyReceipt($topic, $reply, $client_id){
		try{

				$this->query = $this->conn->prepare("INSERT INTO notification ( topic, message, client_id, read_by ) VALUES (:topic, :reply, :client_id, :read) ");
				$this->query->execute(array(':topic' => $topic, ':reply' => $reply, ':client_id' => $client_id, ':read' => 0));
			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}


	public function bookingDetails($bk_id){
		try{
			$this->query = $this->conn->prepare("SELECT a.*, b.* FROM client AS a, booking AS b WHERE b.bk_id = :bk_id AND b.client_id = a.client_id");
			$this->query->execute(array(':bk_id' => $bk_id));

			$row = $this->query->fetch();

			return $row;
			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

}