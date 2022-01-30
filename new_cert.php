<?php

include 'qr/qrlib.php';

$config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . '/config.ini');

if (isset($_POST['id']) && isset($_POST['date']) && isset($_POST['name']) && isset($_POST['dob']) && isset($_POST['passport']) && isset($_POST['code'])) {
    if ($_POST['code'] == $config['code']) {
        $userdata = array(
            'id' => $_POST['id'],
            'date' => $_POST['date'],
            'name' => $_POST['name'],
            'dob' => $_POST['dob'],
            'passport' => $_POST['passport']
        );

        $db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['database'], $config['user'], $config['password']);

        $sql = "INSERT INTO certs (id, valid_date, name, dob, passport) VALUES (:id, :date, :name, :dob, :passport)";
        $stmt = $db->prepare($sql);
        $stmt->execute($userdata);

        QRCode::png("https://" . $config['domain'] . "/covid-cert/status.php?cert_id=" . $_POST['id'], 'qr_codes/' . $_POST['id'] . ".png", "H");

        echo '<a href="covid-cert/status.php?cert_id=' . $_POST['id'] . '">Открыть сертификат</a><br>';
        echo '<a href="qr_codes/' . $_POST['id'] . '.png">Открыть QR код</a>';
    }
}