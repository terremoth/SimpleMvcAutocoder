<?php

class Form 
{
    public function field($sType, $sName, $xValue, $iMaxLength, $aAttributes = array()) 
    {   
        echo '<'.$sType.' name="'.$sName.'" value="'.$xValue.'" maxlength="'.$iMaxLength.'"';
        foreach ($aAttributes as $sAttribute => $sValue) {
            echo ' '.$sAttribute.'="'.$sValue.'"';
        }
        echo '>';
        
        //input type="number" name="quantity" value="0" title="Quantity" required="required" disabled="" readonly="" maxlength=""
        // new field('button', 'name', 'value', 'maxlength', array);
    }
}
