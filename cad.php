<?php
extract($_POST);
if (!file_exists("funcionarios/$id.txt")) { $pasts = fopen("funcionarios/$id.txt",'w'); 
fwrite($pasts, "Identificador: $ident\nNome do funcionário: $fucionario\nEmprego: $empreg\n"); 
fwrite($files, "Salário: $salar\n"); fwrite($files, "Qtd Dependentes: $depend\n");
fclose($files); 
} else { echo "<script> alert('este ID ja foi usado\ntente novamente');
</script>";}
$list = scandir('funcionarios');
array_shift($list);
array_shift($list);
foreach($list as $links) 
{ echo "<a href=\"openlink.php?id=$links\">Arquivos: $links</a><br>";}?>
