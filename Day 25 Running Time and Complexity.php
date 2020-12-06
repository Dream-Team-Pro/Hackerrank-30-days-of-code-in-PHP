<?php
function is_prime($n) {
    if( $n<2 ) return false;
    for($i=2; $i<=sqrt($n); $i++) if($n%$i == 0) return false;
    return true;
}

$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

fscanf($_fp, '%d', $n);
while($n-- > 0)  {
    fscanf($_fp, '%d', $num);
    if( is_prime($num) ) echo "Prime\n";
    else echo "Not prime\n";
}

?>