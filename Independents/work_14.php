<?php
function backup($sourceDir, $backupDir) {
    if (!is_dir($sourceDir)) {
        return "Исходная Папка не Найдена";
    }
    $backupDir = $backupDir . "/backup_" . date("Y-m-d_H-i-s");
    mkdir($backupDir, 0755, true);
    foreach (scandir($sourceDir) as $file) {
        copy("$sourceDir/$file", "$backupDir/$file");
    }
    return "Резервная Копия Создана в: $backupDir";
}
$sourceDir = "../";
$backupDir = "../backups";
echo backup($sourceDir, $backupDir);
?>
