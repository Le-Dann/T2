<?php
//inkludieren von benötigten Files
require 'includes/header.php';
require 'includes/database.php';
require 'includes/headerfooter.inc.php';
insertheaderservice();

//Error Array für die Fehler ausgabe
$errors = [];

//Variablen welche mit der Funktion postAndTrim eingelesen werden
$firstname = postAndTrim('firstname');
$lastname = postAndTrim('lastname');
$email = postAndTrim('email');
$phone = postAndTrim('phone');
$service = postAndTrim('service');
$priority = postAndTrim('priority');
$currentDate = date("d.m.Y");
//$newDate = $currentDate->modify('+7 day');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    //Error handling
    if ($firstname === '') {
        $errors[] = 'Bitte geben Sie einen Vornamen ein';
    }
    if ($lastname === '') {
        $errors[] = 'Bitte geben Sie einen Nachname ein';
    }
    if ($email === '') {
        $errors[] = 'Bitte geben Sie eine Email ein';
    }
        //Überprüfung von der E-Mail mit einem Filter
    elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $errors[] = 'Die Email- Adresse "' . $email . '" ist ungültig';
    }
    if ($phone === '') {
        $errors[] = 'Bitte geben Sie eine Telefonnummer ein';
    }
        //Überprüfung der Telegon nummer mit preg_match
    if (!preg_match('/^[\+ 0-9]+$/', $phone)) {
        $errors[] = 'Die Telefonnummer "' . $phone . '" ist ungültig';
    }
    if ($service === 'Bitte Service auswählen') {
        $errors[] = 'Bitte wählen sie einen Service';
    }
    if ($priority === '') {
        $errors[] = 'Bitte bestimmen sie die Priorität des Auftrages';
    }

    // Ausgabe des Error Arrays in einer Liste welche für den User schön dargestellt wird
    if (count($errors) > 0) {
        echo '<div class="esbody"><div class="container"><ul class="errors">';
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo '</ul></div></div>';
    }
    //Falls keine Fehler gefunden werden werden erst die SQL und weitere Befehle ausgeführt.
    if (count($errors) === 0) {
    //Einfügen mit MYSQLi
    insert_order_mysqli($firstname, $lastname, $email, $phone, $service, $priority, $currentDate);

    //Einfügen mit PDO. ()
    //insert_order_pdo($firstname,$lastname,$email,$phone,$service,$priority);

    //Redirects to success page after successful SQL code
    //header("Location: ../M307Praxis/success.php");

    //Datum wird in ein DateTime objekt umgewandelt.
    $olddate = new DateTime($currentDate);
    $newdate = $olddate;

    //Bassierend auf der Priorität welche ausgewählt wurde wird das Datum angepasst
    //und dann in einer neuen Variablen gespeichert.
    if ($priority === "low") {
        $newdate = $olddate->modify('+12 day');
    } elseif ($priority === "standard") {
        $newdate = $olddate->modify('+7 day');
    } elseif ($priority === "high") {
        $newdate = $olddate->modify('+5 day');
    }

    //Ausgabe für denn User mit Datum der Abholung und einem Butten der zur Homepage führt.
    echo '<div class="esbody"><div class="container"><ul class="success">';
    echo "<p>Der Auftrag <b>$service</b> wird am <b><u>".$newdate->format("d. F Y")."</u></b> zur Abholung bereit sein.</p>";
    echo '<p><a href="landingpage.php" class="btn btn-primary btn-sm" tabindex="-1" role="button" aria-disabled="true">Zurück zur Homepage</a></p>';
    echo '</ul></div></div>';
    }
}
?>

<div class="container">
    <h1>Auftrags Anmeldung</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <div class="form-row form-group">
            <div class="col">
                <label for="inputFirstname">Vorname</label>
                <input type="text" name="firstname" class="form-control" id="inputFirstname" placeholder="Vorname" value="<?php echo htmlspecialchars($firstname)?>" required>
            </div>
            <div class="col">
                <label for="inputLastname">Nachname</label>
                <input type="text" name="lastname" class="form-control" id="inputLastname" placeholder="Nachname" value="<?php echo htmlspecialchars($lastname)?>" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail">E-Mail</label>
            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" value="<?php echo htmlspecialchars($email)?>" required>
        </div>
        <div class="form-group">
            <label for="inputPhone">Telefon</label>
            <input type="text" name="phone" class="form-control" id="inputPhone" placeholder="Telefon" value="<?php echo htmlspecialchars($phone)?>" required>
        </div>
        <div class="form-row form-group">
            <div class="col-sm-6">
                <label for="selectService">Service</label>
                <select class="form-control" id="selectService" name="service" value="<?php echo htmlspecialchars($service)?>" required>
                    <option>Bitte Service auswählen</option>
                    <option>Kleiner Service</option>
                    <option>Grosser Service</option>
                    <option>Rennski-Service</option>
                    <option>Bindung montieren und einstellen</option>
                    <option>Fell zuschneiden</option>
                    <option>Heisswachen</option>
                </select>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-5">
                <label for="priority">Priorität</label>
                <div class="container" id="priority" value="<?php echo htmlspecialchars($priority)?>">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="priority" id="inlineRadio" value="low">
                        <label class="form-check-label" for="inlineRadio1">Tief</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="priority" id="inlineRadio" value="standard">
                        <label class="form-check-label" for="inlineRadio2">Standart</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="priority" id="inlineRadio" value="high">
                        <label class="form-check-label" for="inlineRadio3">Hoch</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right">
            <button type="submit" name="submitbtn" class="btn btn-dark btn-lg">Absenden</button>
        </div>

    </form>
</div>

<?php
//Funktionen welche weiter oben verwendet werden

//functions
//post() liest die Variablen ein
function post(string $key, $default = '')
{
    return $_POST[$key] ?? $default;
}

//postAndTrim() verwendet post() und trimmt das Eingelesene direkt.
function postAndTrim(string $key, $default = '')
{
    return trim(post($key, $default));
}

//Footer der website.
require 'includes/footer.php';
?>