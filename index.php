<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Model</title>

    <?php
    require_once("models/person.php");
    require_once("models/employee.php");
    require_once("models/wage.php");
    require_once("models/boss.php");
    require_once("db.php");
    ?>
</head>

<body>
    <!-- stampa impiegati -->
    <h1>IMPIEGATI</h1>
    <?php
    foreach ($employees as $employee) {

        echo $employee->getHtml()
            . "<hr>";

    }
    ?>

    <!-- stampa boss -->
    <h1>BOSS</h1>
    <?php
    echo $boss->getHtml();
    ?>
</body>

</html>