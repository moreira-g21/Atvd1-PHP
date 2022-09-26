<?php
extract($_POST);
if(file_exists("funcionarios/$id.txt")){
    echo "ID já utilizado";
} else {
    $archive = fopen("funcionarios/$id.txt", 'a+');
    fwrite($archive, "Id: $id\nNome: $name\nCargo: $carg\nSalário: R$ $salar\nDependentes: $depend\n");
    fclose($archive);
}
$read = scandir('funcionarios');
array_shift($read);
array_shift($read);
foreach($read as $a){
    echo '<a href=info-funcs.php?id='.$a.'>'.$a.'<br>';
}
echo "<p><a href='cadas-func.php'>Retornar para página anterior</a></p>";