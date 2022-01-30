<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создание нового сертификата</title>
    <style>
        html, body {
            background: #e4ecfd;
            font-family: Lato-Bold, Arial, sans-serif;
            color: #0b1f33;
        }

        input {
            border: 0;
            border-radius: 8px;
            padding: 20px;
            background: #f5f7fa;
            box-sizing: border-box;
            outline: none;
            margin-top: 10px;
            width: 100%;
        }

        button {
            display: inline-block;
            height: 56px;
            border-radius: 8px;
            border: none;
            padding: 0 40px;
            font-size: 16px;
            line-height: 56px;
            color: #ffffff;
            background: #0d4cd3;
            cursor: pointer;
            margin-top: 15px;
            transition: 0.1s;
            width: 100%;
        }

        button:hover {
            transition: 0.1s;
            background: #2a64e3;
        }
    </style>
</head>
<body>
<form action="new_cert.php" method="post">
    <input name="id" type="text" placeholder="ID Сертификата"> <br>
    <input name="date" type="text" placeholder="Срок действия"> <br>
    <input name="name" type="text" placeholder="ФИО"> <br>
    <input name="dob" type="text" placeholder="Дата рождения"> <br>
    <input name="passport" type="text" placeholder="Серия номер паспорта"> <br>
    <input name="code" type="text" placeholder="Security code"> <br>
    <button type="submit">Добавить новый сертификат</button>
</form>
</body>
</html>