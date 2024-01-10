<?php

echo "<select>";

for ($i=date("Y"); $i >= date("Y")-100 ; $i--) { 
    
    echo $i."<br>";

    echo '<option values="'.$i.'">'.$i.'</option>';

}

echo "</select>";

?>