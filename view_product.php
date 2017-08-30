<!DOCTYPE html>
<html>
    <head>
        <title>Product</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            * {
                font-family: sans-serif;
            }
            
            th, td {
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <h1>Product</h1>
        
        <form action="controller_product.php" method="POST">
            <fieldset>
                <legend>
                    <h3>Register</h3>                
                </legend>
                <table border="1" style="border-collapse: collapse;">
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
                </table>
                <p>
                    <input type="submit">
                </p>                
            </fieldset>
        </form>
        <hr>
        <h3>List</h3>
        <table border="1" style="border-collapse: collapse;">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Release Date</th>
                    <th>Active</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                
                    require_once 'Product.php';
                    
                    $oProduct = new Product();
                    $classVars = classVars(get_class($oProduct));
                    $aAllProducts = $oProduct->all();
                    
                    $iQuantity = count($aAllProducts);
                    
                    if ( $iQuantity > 0) {
                        foreach ($aAllProducts as $aProduct) {
                            // This identation is simple and easy way to beautify HTML in browser without any "XML" lib
                            echo '<tr>';
                            foreach($classVars as $property) {
                                
                                echo '<td>'.$aProduct[$property].'</td>';
                            }
                            echo'</tr>';
                        }
                    } else {
                        echo '<tr><td colspan="30">There are nothing registered.</td></tr>';
                    }
                ?> 
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">Total de resultados: <?php echo count($aAllProducts);?></td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>
