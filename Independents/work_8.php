<?php
function renameFile($oldN, $newN) {
    if (!file_exists($oldN)) {
        return "Файл для Переименования не Найден";
    }
    if (file_exists($newN)) {
        return "Файл с Таким Именем уже Существует";
    }
    if (rename($oldN, $newN)) {
        return "Файл Успешно Переименован в '{$newN}'";
    } else {
        return "Непредвиденная Ошибка ┗( T﹏T )┛";
    }
}
$oldName = "of.txt";
$newName = "nf.txt";
echo renameFile($oldName, $newName);
?>
