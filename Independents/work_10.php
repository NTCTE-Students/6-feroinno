<?php
function CSVwrite($filename, $data) {
    $file = fopen($filename, "w");
    if ($file) {
        foreach ($data as $row) {
            fputcsv($file, $row);
        }
        echo "Данные Записаны";
        fclose($file);
    } else {
        return "Непредвиденная Ошибка ┗( T﹏T )┛";
    }
}
$filename = "data.csv";
$data = [
    ["name"=>"Name", "age"=>"Age", "city"=>"Place"],
    ["name"=>"Liza", "age"=>"450", "city"=>"Kebab"],
    ["name"=>"Arina", "age"=>"18", "city"=>"Perm"],
    ["name"=>"Leo", "age"=>"8", "city"=> "Earth"],
];
CSVwrite($filename, $data);
?>
