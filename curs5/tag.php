<?php

function drawTags($tname,$style,$content,$count=1){

    for($i=0;$i<$count;$i++){
        echo "<" . $tname . " style='" . $style . "' >" . $content
            . "</" . $tname . ">";
            echo "\n";
    }
}

echo "\n";
drawTags("div","border: 1px solid red; background-color:
yellow; color: red; margin: 4px; padding: 4px;","Salut",6);
echo "\n";

?>
