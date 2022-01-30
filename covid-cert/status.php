<?php

if (isset($_GET['cert_id'])) {
    $config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . '/config.ini');
    $userdata = array(
        'cert_id' => $_GET['cert_id']
    );

    $db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['database'], $config['user'], $config['password']);

    $sql = "SELECT * FROM certs WHERE id = :cert_id";
    $stmt = $db->prepare($sql);
    $stmt->execute($userdata);

    $result = $stmt->fetch();

    if ($result != null) {
        $raw = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/covid-cert/frontend/index.html');

        $after = str_replace('{CERT_ID}', $result['id'], $raw);
        $after = str_replace('{VALID_DATE}', $result['valid_date'], $after);
        $after = str_replace('{NAME}', $result['name'], $after);
        $after = str_replace('{DOB}', $result['dob'], $after);
        $after = str_replace('{PASSPORT}', $result['passport'], $after);

        echo $after;
    } else {
        echo 'Сертификат не найден';
    }
} else {
    echo 'Не указан идентификатор сертификата';
}