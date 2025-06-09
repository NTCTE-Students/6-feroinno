<?php
function replace($filename, $word, $Nword) {
    if (!file_exists($filename)) {
        return "Файл не Найден";
    }
    $file = file_get_contents($filename);
    $newFile = str_replace($word, $Nword, $file);
    file_put_contents($filename, $newFile);
    return "Замена Произошла Успешна";
}
$filename = "txt.txt";
$word = "World";
$Nword = "Loser";
echo replace($filename, $word, $Nword);
?>
