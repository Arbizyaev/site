<?

	$name = $_POST['name'];
	$email = $_POST['email'];

	$dbh = new PDO('mysql:host=localhost;dbname=cv04756_db', 'cv04756_db', 'cv04756db_qb1mJ73v');
	$stmt = $dbh->prepare("INSERT INTO `order`(`time`, name, email)
		VALUES (NOW(), :name, :email)");
	$stmt->bindParam(':name', $name);
	$stmt->bindParam(':email', $email);
	$stmt->execute();

	echo '1';
