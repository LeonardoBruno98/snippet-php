// Object oriented

$datetime1 = new DateTime('2022-04-11');
$datetime2 = new DateTime('2022-04-13');
$interval = $datetime1->diff($datetime2);
echo $interval->format('%R%a days');

// Procedural

$datetime1 = date_create('2022-04-11');
$datetime2 = date_create('2022-04-13');
$interval = date_diff($datetime1, $datetime2);
echo $interval->format('%R%a days');

// +2 days
