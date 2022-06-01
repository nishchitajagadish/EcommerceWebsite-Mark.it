<?php
	$firstname = $_POST['firstname'];
    $Email = $_POST['Email'];
    $Fashion = $_POST['Fashion'];
    $Electronics = $_POST['Electronics'];
    $Entertainment = $_POST['Entertainment'];
    $Sports = $_POST['Sports'];
    $Details = $_POST['Details'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into addtocart(firstname, Email, Fashion, Electronics, Entertainment, Sports, Details) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssss", $firstname, $Email, $Fashion, $Electronics, $Entertainment,$Sports, $Details);
		$execval = $stmt->execute();
		echo $execval;
		echo "Order placed successfully...";
		$stmt->close();
		$conn->close();
	}
?>
    <script>
    alert("var success");
    </script

    <?php
    ?>
  }