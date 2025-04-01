<?php
function cantarPatinhos($numPatinhos) {
    for ($i = $numPatinhos; $i > 0; $i--) {
        echo "$i patinho(s) foram passear,\n";
        echo "Além das montanhas para brincar.\n";
        echo "A mamãe gritou: 'Quack, quack, quack, quack!'\n";
       
        if ($i > 1) {
            echo "Mas só " . ($i - 1) . " patinho(s) voltaram de lá.\n\n";
        } else {
            echo "Mas nenhum patinho voltou de lá.\n\n";
        }
    }


 
    echo "Poxa, a mamãe patinha ficou tão triste naquele dia.\n";
    echo "Aonde será que estavam os seus filhotinhos?\n";
    echo "Mas essa história vai ter um final feliz.\n";
    echo "Sabe por quê?\n\n";
   
    echo "A mamãe patinha foi procurar,\n";
    echo "Além das montanhas na beira do mar.\n";
    echo "A mamãe gritou: 'Quack, quack, quack, quack!'\n";
    echo "E os $numPatinhos patinhos voltaram de lá!\n";
}


echo "Quantos patinhos foram passear? ";
$numPatinhos = intval(trim(readline()));
if ($numPatinhos > 0) {
    cantarPatinhos($numPatinhos);
} else {
    echo "Por favor, digite um número válido de patinhos.\n";
}
?>
?>

