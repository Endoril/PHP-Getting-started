<?php
/**
 * Hole einen Wert aus dem $_GET-Array und prüfe auf mögliche Probleme.
 *
 * @param string $wert Der Schlüsselwert, nach dem im $_GET-Array gesucht wird.
 * @return mixed Der abgerufene Wert aus dem $_GET-Array, wenn vorhanden und nicht "boese".
 * @throws Exception Wenn der gesuchte Wert leer ist oder wenn "boese" als Wert übergeben wird.
 */
function holeGet($wert){
    if (isset($_GET[$wert])){ // Prüfen, ob der Schlüssel im $_GET-Array vorhanden ist
        $rohdaten = $_GET[$wert]; // Speichern des Werts für bessere Lesbarkeit
        if ($rohdaten !== "boese"){ // Überprüfen, ob der Wert nicht "boese" ist
            return $rohdaten; // Rückgabe des Werts, wenn er nicht "boese" ist
        } else {
            throw new Exception("Irgendwas böses wurde versucht"); // Fehlermeldung bei "boese"
        }
    } else {
        throw new Exception("Gesuchter Wert($wert) ist leer"); // Fehlermeldung bei fehlendem Wert
    }
}

?>