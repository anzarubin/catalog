<?php
require_once __DIR__ . '/vendor/autoload.php';
$faker = Faker\Factory::create();

$mysqli = new mysqli('localhost', 'root', 'user', 'catalog');
$mysqli->set_charset('utf8');

if (mysqli_connect_errno()) {
    echo "Ошибка: " . mysqli_connect_error();
}

/**
 * Наполнение таблицы articles
 */

for ($i=1; $i<100001; $i++) {
    $id = $i;
    $title = $faker->text(100);
    $preview = $faker->text(250);
    $text = $faker->text(1000);
    $author = $faker->numberBetween($min = 1, $max = 1000);
    $rubric = $faker->numberBetween($min = 1, $max = 50);

    $sql = "INSERT INTO `articles`(`id`,`title`,`preview`,`text`,`author`,`rubric`) 
            VALUES ('$id','$title','$preview','$text','$author','$rubric')";
    $mysqli->query($sql);
    echo "articles: id = $id добавлен" . "<br />";
}

/**
 * Наполнение таблицы authors
 */

for ($i=1; $i<1001; $i++) {
    $id = $i;
    $name = $faker->name;
    $sign = $faker->sentence;
    $avatar = $faker->imageUrl($width = 320, $height = 320);

    $sql = "INSERT INTO `authors`(`id`,`name`,`sign`,`avatar`) 
            VALUES ('$id','$name','$sign','$avatar')";
    $mysqli->query($sql);
    echo "authors: id = $id добавлен" . "<br />";
}

/**
 * Наполнение таблицы rubrics для 1ой группы
 */

for ($i=1; $i<11; $i++) {
    $id = $i;
    $name = $faker->word;
    $parentId = $faker->numberBetween($min = 1, $max = 5);
    $groupId = 1;

    $sql = "INSERT INTO `rubrics`(`id`,`name`,`parentId`,`groupId`) 
            VALUES ('$id','$name','$parentId','$groupId')";
    $mysqli->query($sql);
    echo "rubrics: id = $id добавлен" . "<br />";
}

/**
 * Наполнение таблицы rubric для 2ой группы
 */

for ($i=11; $i<21; $i++) {
    $id = $i;
    $name = $faker->word;
    $parentId = $faker->numberBetween($min = 6, $max = 10);
    $groupId = 2;

    $sql = "INSERT INTO `rubrics`(`id`,`name`,`parentId`,`groupId`) 
            VALUES ('$id','$name','$parentId','$groupId')";
    $mysqli->query($sql);
    echo "rubrics: id = $id добавлен" . "<br />";
}

/**
 * Наполнение таблицы rubric для 3ой группы
 */

for ($i=21; $i<31; $i++) {
    $id = $i;
    $name = $faker->word;
    $parentId = $faker->numberBetween($min = 11, $max = 15);
    $groupId = 3;

    $sql = "INSERT INTO `rubrics`(`id`,`name`,`parentId`,`groupId`) 
            VALUES ('$id','$name','$parentId','$groupId')";
    $mysqli->query($sql);
    echo "rubrics: id = $id добавлен" . "<br />";
}

/**
 * Наполнение таблицы rubric для 4ой группы
 */

for ($i=31; $i<41; $i++) {
    $id = $i;
    $name = $faker->word;
    $parentId = $faker->numberBetween($min = 16, $max = 20);
    $groupId = 4;

    $sql = "INSERT INTO `rubrics`(`id`,`name`,`parentId`,`groupId`) 
            VALUES ('$id','$name','$parentId','$groupId')";
    $mysqli->query($sql);
    echo "rubrics: id = $id добавлен" . "<br />";
}

/**
 * Наполнение таблицы rubric для 2ой группы
 */

for ($i=41; $i<51; $i++) {
    $id = $i;
    $name = $faker->word;
    $parentId = $faker->numberBetween($min = 21, $max = 25);
    $groupId = 5;

    $sql = "INSERT INTO `rubrics`(`id`,`name`,`parentId`,`groupId`) 
            VALUES ('$id','$name','$parentId','$groupId')";
    $mysqli->query($sql);
    echo "rubrics: id = $id добавлен" . "<br />";
}

echo "Таблицы наполнены" . "<br />";