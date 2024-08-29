<?php 

    echo '0 == "0": ' . (0 == "0"); // 7: true | 8: true
    echo '</br>';

    echo '0 == "0.0": ' . (0 == "0.0"); // 7: true | 8: true
    echo '</br>';
    
    echo '0 == "teste": ' . (0 == "teste"); // 7: true | 8: false
    echo '</br>';
    
    echo '0 == "": ' . (0 == ""); // 7: true | 8: false
    echo '</br>';
    
    echo '50 == "   50": ' . (0 == "   50");  // 7: true | 8: true
    echo '</br>';
    
    echo '50 == "50teste": ' . (50 == "50teste");  // 7: true | 8: true
    echo '</br>';
    
    echo '0 == "0": ' . (0 == "0");  // 7: true | 8: true
    echo '</br>';