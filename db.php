<?php
$wages = [
    new Wage(600, "no", "no"),
    new Wage(1200, "si", "no"),
    new Wage(2000, "si", "si"),
];


$employees = [
    new Employee("Marco", "Rossi", "29-10-2000", "Milano", "ASD12S30C309H", $wages[0], "10-11-2022", "apprentice"),
    new Employee("Mario", "Verdi", "10-12-1995", "Torino", "GRS12S29C309B", $wages[1], "10-12-2021", "junior"),
    new Employee("Davide", "Bianchi", "29-10-2000", "Milano", "AAA11I10D305D", $wages[2], "12-10-2018", "senior")
];