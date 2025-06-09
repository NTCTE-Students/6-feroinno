<?php
function logic($message) {
    $file = fopen("log.txt","a") or die('Невозможно Открыть Файл');
    $logmessage = date("Y-m-d H:i:s") ." - ". $message ."\n";
    fwrite($file, $logmessage);
    print ($logmessage);
    fclose($file);
}
print(logic("Yamagimaru"));
?>
