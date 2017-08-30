<?php

class AutoView extends Form
{
    private $viewName;
    private $object;
    
    public function __construct($object = false) 
    {
        if ($object) {
            $this->object = new $object();
        }
        
        $this->viewName = get_class($this->object);
    }
    
    public function json() 
    {
        echo json_encode(classVars($this->viewName));
    }
    
    public function table() 
    {
        $objectProperties = classVars($this->viewName);
        
        echo '<table>';
        echo '<tbody>';
        echo '<tr>';
        
        foreach ($objectProperties as $key => $property) {
            echo '<td>'.$this->object->{'get'.ucfirst($property)}().'</td>';
        }
        
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';
    }
    
    public function form($aFormProperties = array()) 
    {
        echo '<h1>'.ucfirst($this->viewName).'</h1>';
        echo '<form action="/'.$this->viewName.'" method="POST">';
        echo '<h3>Register</h3>
            <table border="1" style="border-collapse: collapse;">';
        
        /*
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" value="" maxlength="80" autofocus="autofocus" title="Name" required="required"></td>
                </tr>
                <tr>
                    <td>Quantity:</td>
                    <td><input type="number" name="quantity" value="0" title="Quantity" required="required"></td>
                </tr>
                <tr>
                    <td>Release Date:</td>
                    <td><input type="date" name="releaseDate" value="<?php echo date("Y-m-d");?>" title="Release Date" required="required"></td>
                </tr>
                <tr>
                    <td>Active:</td>
                    <td>
                        Yes: <input type="radio" name="active" value="1" title="Active" checked="checked">
                        No:  <input type="radio" name="active" value="0" title="Active">
                    </td>
                </tr>
         */
            echo '</table>
            <p>
                <input type="submit">
            </p>
        </form>
        <hr>';
    }
    
    public function create() 
    {
        $this->form();
        $this->table();
    }
}   