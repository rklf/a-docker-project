<?php
function getDBCon($database) {
	$host = "dbmysql";
	$username = "esgi";
	$password = "mypassword";
	try {
		$conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		//echo "Connecté";
		return $conn;
	}
	catch(PDOException $e) {
		echo "Connexion échoué: " . $e->getMessage();
	}	
}

function SQLRequest($req, $database) {
	$pdo = getDBCon($database);
	$req = $pdo->query($req);
	$res = $req->fetchAll();

	return $res;
};

?>