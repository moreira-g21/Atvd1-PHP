<?php
$arch = $_GET['id'];
$write = file('funcionarios/'.$arch);foreach ($write as $line)
{ echo $line.'<br>';}
