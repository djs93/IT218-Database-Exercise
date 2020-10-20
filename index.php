<?php
    include 'pdo.php';

    try{
        $query = 'SELECT * FROM products';
        $statement = $db->prepare($query);

        $statement->execute();
        $products = $statement->fetchAll();
        $statement->closeCursor();

        $cat_query = 'SELECT * FROM categories';
        print_r($products);
    } catch (Exception $error){
        $error_message = $error->getMessage();
        echo "Error running SQL Query: $error_message";
    }
?>

<h1>PDO Demo</h1>

<table border="1">
    <tr>
        <th>Product Code</th>
        <th>Prpodcue Name</th>
        <th>L:ist Psrice</th>
    </tr>
    <?php foreach ($products as $product):?>
    <tr>
        <td><?php echo $product['productCode'];?></td>
        <td><?php echo $product['productName'];?></td>
        <td><?php echo $product['listPrice'];?></td>
    </tr>
    <?php endforeach; ?>
</table>
