<?php
				require(".php");
				session_start();
				$query = "SELECT * FROM `user`";
				$result = mysqli_query($con,$query) or die(mysqli_error($con));
				$rows = mysqli_num_rows($result);
				if($rows > 0) {
					$username = array();
					while ($data = mysqli_fetch_assoc($result)) {
						array_push($username, $data['username']);
					}
					for($i = 0; $i < $rows; $i++) {
			?>
					<img src="virat.jpg" class="rounded-circle mt-2" style="height: 50px; width: 50px;">
			<?php
					}
				}

			?>