<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$n = intval(fgets(STDIN));
$dict = [];
for($i=0;$i<$n;$i++){
    $vars = explode(" ", fgets(STDIN));
    $dict[trim($vars[0])] = trim($vars[1]);
}
while(!feof(STDIN)){
    $str = trim(fgets(STDIN));
    if(isset($dict[$str])){
        echo $str . "=" . $dict[$str]."\n";
    }else{
        echo "Not found\n";
    }
}
?>
