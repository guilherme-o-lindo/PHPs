<?php
$nota = 8;

echo "Nota: $nota \n";
echo "Seu resultado: ";
if ($nota >= 95) {
    echo "EXCELENTE! 👏";
} elseif ($nota >= 80 and $nota <= 94) {
    echo "Muito bom! 👌";
} elseif ($nota >= 60 and $nota <= 79) {
    echo "Legal :)";
} elseif ($nota < 60) {
    echo "Tá precisando estudar...";
}
?>