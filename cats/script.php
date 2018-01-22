<?php

require 'cat.class.php';
//1
$hairColors = ["black", "white", "grey", "ginger"];
$ages = [2, 3, 1, 1, 1];
$name = "Tom";
$cats = array();
for ($i = 0; $i < 7; $i++) {
    $cats[] = new Cat($name, $ages[$i], $hairColors);
}

//2
$ageSum = 0;
$multiplication = 1;
foreach ($cats as $cat) {
    $ageSum += $cat->getAge();
    $multiplication *= $cat->getAge();
}
echo "$ageSum\n$multiplication\n";

//3
$establishedAge = 3;
$requiredAges = array();
foreach ($cats as $cat) {
    if ($cat->getAge() > $establishedAge) {
        $requiredAges[] = $cat->getAge();
    }
}
$infoMsg = 0;
if (count($requiredAges) > 1) {
    foreach ($requiredAges as $age) {
        $infoMsg += sqrt($age);
    }
} elseif (count($requiredAges) == 1) {
    $infoMsg = "Cat with age more than " . $establishedAge . " is present\n";
} else {
    $infoMsg = "Cat with age more than " . $establishedAge . " is absent\n";
}
echo "$infoMsg";

//4
$randIndex = rand(0, count($cats) - 1);
try {
    $cats[$randIndex]->error();
} catch (Exception $e) {
    echo 'Выброшено исключение: ', $e->getMessage(), "\n";
}

//5
$divider = 29;
for ($i = 1; $i < 100; $i++) {
    for ($j = 1; $j < 100; $j++) {
        if (($i * $j) % $divider == 0) {
            goto end;
        }
    }
    $cats[$i] = new Cat("Tom", $ages[$i], $hairColors);
}
end:;

//6
switch (Cat::isCanFly()):
    case TRUE:
        echo "Cat can fly\n";
        break;
    case FALSE:
        echo "Cat can not fly\n";
        break;
    default: ;
endswitch;
