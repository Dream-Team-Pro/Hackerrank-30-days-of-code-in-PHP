<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$S);

echo is_numeric($S) ? $S : 'Bad String';

?>