try {
    $conn = new PDO("sqlsrv:server = tcp:cmdbhw3.database.windows.net,1433; Database = accessdbhw3", "carolinemarleynicholas", "{your_password_here}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

$connectionInfo = array("UID" => "carolinemarleynicholas", "pwd" => "{your_password_here}", "Database" => "accessdbhw3", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:cmdbhw3.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
