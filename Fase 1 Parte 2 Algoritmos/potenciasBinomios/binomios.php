<?php

function binomio($n) {
    $resultado = '';
    
    for ($i = 0; $i <= $n; $i++) {
        $coeficiente = coeficienteBinomial($n, $i);
        $termino = '';
        
        if ($coeficiente !== 1) {
            $termino .= $coeficiente;
        }
        
        if ($n - $i > 0) {
            $termino .= 'a';
        }
        
        if ($i > 0) {
            $termino .= 'b';
        }
        
        if ($n - $i > 1) {
            $termino .= '^' . ($n - $i);
        }
        
        if ($i > 1) {
            $termino .= '^' . $i;
        }
        
        $resultado .= $termino . ' + ';
    }
    

    $resultado = rtrim($resultado, '+ ');
    
    return $resultado;
}

function coeficienteBinomial($n, $k) {
    if ($k == 0 || $k == $n) {
        return 1;
    } else {
        return coeficienteBinomial($n - 1, $k - 1) + coeficienteBinomial($n - 1, $k);
    }
}


#echo "Ingrese la potencia: ";
#$potencia = (int)trim(fgets(STDIN));
$potencia = 5;


$resultado = binomio($potencia);
echo "El binomio (a + b)^{$potencia} es: {$resultado}\n";

?>
