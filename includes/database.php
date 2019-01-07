<?php
//Funktion für die Datenbank befehle mit mysqli
function insert_order_mysqli($firstname, $lastname, $email, $phone, $service, $priority,$date)
{
    //Connection details werden aus seperatem file ausgelesen.
    require 'dbconn.inc.php';

    //Auszuführender SQL Befehl mit Platzhalter-Values (?) welche später eingesetzt werden
    $sql = "INSERT INTO auftrag(firstname, lastname, email, phone, service, priority, date) VALUES (?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);

    //SQL Befehl für die Ausführung vorbereiten.
    mysqli_stmt_prepare($stmt, $sql);

    //Ersetzen der Platzhalter durch die zu verwendeten Daten.
    mysqli_stmt_bind_param($stmt, "sssssss", $firstname, $lastname, $email, $phone, $service, $priority, $date);
    //Ausführung des Befehles
    mysqli_stmt_execute($stmt);

    //Statement und Datenbank Verbindung werden hier geschlossen.
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

//Funktion für die Datenbank befehle mit PDO
$pdo = new PDO(
    "mysql:host=localhost;dbname=m307praxis;charset=utf8",
    "root",
    "322peridot"
);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function insert_order_pdo($firstname, $lastname, $email, $phone, $service, $priority)
{
    global $pdo;
    try {
        $sql = "INSERT INTO auftrag(firstname, lastname, email, phone, service, priority) VALUES(:firstname, :lastname, :email, :phone, :service, :priority)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindparam(":firstname",$firstname);
        $stmt->bindparam(":lastname",$lastname);
        $stmt->bindparam(":email",$email);
        $stmt->bindparam(":phone",$phone);
        $stmt->bindparam(":service",$service);
        $stmt->bindparam(":priority",$priority);
        $stmt->excexute($stmt);
    } 
    catch (PDOException $e) 
    {
        echo $e->getMessage();
        return false;   
    }
    return true;
}

?>