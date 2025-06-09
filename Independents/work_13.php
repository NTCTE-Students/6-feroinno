<?php
function JSON($filename, $data) {
    $file = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($filename, $file);
    print $file;
}
$filename = "datas.json";
$data = [
    ["name"=>"Name", "age"=>"Age", "city"=>"Place"],
    ["name"=>"Liza", "age"=>"450", "city"=>"Kebab"],
    ["name"=>"Mike", "age"=>"7", "city"=>"Pluto"],
    ["name"=>"Leo", "age"=>"8", "city"=> "Earth"],
];
echo JSON($filename, $data);
?>
