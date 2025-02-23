<?php

$htmltext=$_POST["htmltext"];

//<img src="img/lib/m_3.png" class="item" style="position: absolute; left: 262px; top: 480px;">
$masivs=explode("\n",$htmltext);

foreach ($masivs as $rinda){
    $elements =explode(",",$rinda);
    echo "<img src=\"".htmlspecialchars($elements[0])."\" class=\"item\" style=\"position: absolute; left: ".htmlspecialchars($elements[1])." top: ".htmlspecialchars($elements[2])."\">";
    
}
?>