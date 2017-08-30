<?php

function classVars($sClassName) {
    
    $reflection = new ReflectionClass($sClassName);
    $vars = $reflection->getProperties();
    $list = array();
    
    foreach ($vars as $varProperty) {
        if ($varProperty->class == $sClassName) {
            $list[] = $varProperty->name;
        }
    }
    
    return $list;
}

require_once './DAO.php';
/**
 * FreePHPMVC Database connection class
 */
class ActiveRecord extends DAO
{
    private $modelName = null;
    
    public function __construct() 
    {
        parent::__construct();
        $this->modelName = get_called_class();
    }
    
    public function all() 
    {
        $aResults = $this->selectAll(strtolower($this->modelName));
        $aList = array();
        $resultRows = array();
        
        $oModel = new $this->modelName();
        $reflectionClass = new ReflectionClass($oModel);
        
        foreach ($aResults as $i => $aRow) {
            foreach ($aRow as $column => $value) {
                
                $sGetMethod = 'get'.ucfirst($column);
                
                if (method_exists($oModel, $sGetMethod)) {
                    
                    $reflectionProperty = $reflectionClass->getProperty($column);
                    $reflectionProperty->setAccessible(true);
                    $reflectionProperty->setValue($oModel, $value);
                    
        
                    $aList[$i][$column] = $oModel->{$sGetMethod}();
                } elseif(property_exists($oModel, $column)) {
                    $aList[$i][$column] = $value;
                } else {
                    throw new Exception('Invalid property/column name "'.$column.'" in class "'.$this->modelName.'" . Aborting.');
                } 
            }
        }
        
        return (array_values($aList));
    }

    public function save($post) 
    {   
        $oModel = new $this->modelName;
        $aInsertList = array();
        $reflectionClass = new ReflectionClass($oModel);
        
        foreach ($post as $name => $sValue) {
            
            $sSetMethod = 'set'.ucfirst($name);    
            
            if ( method_exists($oModel, $sSetMethod) ) {
                $oModel->{$sSetMethod}($sValue);
                
                $reflectionProperty = $reflectionClass->getProperty($name);
                $reflectionProperty->setAccessible(true);
                $sPropertyValue = $reflectionProperty->getValue($oModel);
                
                $aInsertList[$name] = $sPropertyValue;
                        
            } elseif( property_exists($oModel, $name) ) {
                $oModel->{$name} = $sValue;
                $aInsertList[$name] = $sValue;
            } else {
                throw new Exception('Invalid method name given: "'. $name.'" in class "'.$this->modelName.'". Aborting.');
            }
        }
        
        return $this->insert(strtolower($this->modelName), $aInsertList);
    }
}
