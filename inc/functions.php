<?php
    function displayPoints($randomValue1, $randomValue2, $randomValue3) {
        echo "<div id='output'>";
        if($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3) {
            switch ($randomValue1) {
                case 0: $totalpoints = 1000;
                    echo "<h1>Jackpot</h1>";
                    break;
                
                case 1: $totalpoints = 500;
                    break;
                
                case 2: $totalpoints = 250;
                    break;
                    
                case 3: $totalpoints = 900;
                    break;
                    
                case 4: $totalpoints = 101;
                    break;
            }
            
            echo "<h2>You won $totalpoints points!</h2>";
        } else {
            echo "<h3> Try Again! </h3>";
        }
        echo "</div>";
    }
    
    
    function displaySymbol($randomValue, $pos){
        switch ($randomValue) {
            case 0: $symbol = "seven";
                break;
            
            case 1: $symbol = "cherry";
                break;
            
            case 2: $symbol = "lemon";
                break;
                
            case 3: $symbol = 'orange';
                break;
            case 4: $symbol = 'grapes';
                break;
        }
        echo "<img id='reel$pos' src='img/$symbol.png' alt='$symbol' title='" . ucfirst($symbol) . "' width='70' >";
    }
    
    
    function play(){
        for($i=1; $i<4; $i++){
            ${"randomValue" . $i} = rand(0,4);
            displaySymbol(${"randomValue" . $i}, $i);
        }
        
        displayPoints($randomValue1, $randomValue2, $randomValue3);
    }
?>