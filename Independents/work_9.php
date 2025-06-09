<?php
function CSVtable($filename) {
    if (!file_exists($filename)) {
        return "Файл не Найден.";
    }
    echo "<table border='2px' cellpadding='3' cellspacing='3'>"; 
    $file = fopen($filename, "r");
    $isHeader = true;
    while (($row = fgetcsv($file, 1000, ",")) !== false) {
        echo "<tr>";
        foreach ($row as $cell) {
            if ($isHeader) {
                echo "<th>" . htmlspecialchars($cell) . "</th>";
            } else {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
            }
        }
        echo "</tr>";
        $isHeader = false;
    }
    fclose($file);
    echo "</table>";
}
$file = "data.csv";
echo CSVtable($file);
?>
