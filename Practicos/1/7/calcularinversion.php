<?php
    if(isset($_GET['capitalinicial']) && $_GET['capitalinicial']>=0 && isset($_GET['porcentajemensual']) && $_GET['porcentajemensual']>=0){
        $capital = $_GET['capitalinicial'];
        $porcentajemensual = $_GET['porcentajemensual'];

        calcularinversion($capital, $porcentajemensual);
    }

    

    function calcularinversion($capital,$porcentajemensual){
        echo "<table>";
        for($mes=1; $mes<=12; $mes++){
            $capital = ($capital*$porcentajemensual/100)+$capital;
            echo "<tr>
                    <td> Mes: ".$mes."</td>
                    <th Capital: >".$capital." $</th>
                  </tr>"; 
        }
        echo "</table>";
    }
?>