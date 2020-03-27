
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/styleOverzicht.css">
    <title>product overzicht</title>
</head>
<body>
<div id="container">
<header>
    <nav></nav>
</header>
<main>
    
    <?php 
        include('../../config/connect.php');
        $sql = "SELECT product.name AS productName,product.description AS productDescription,product.price AS productPrice,category.name AS categoryName,product_image.image AS productImage  FROM `product`
        INNER JOIN category on product.category_id = category.id INNER JOIN product_image on product.category_id = product_image.product_id GROUP BY product.name ;";
        $results = $con->query($sql);

        print'<table border="1">';
        while($row = $results->fetch_assoc()){
            print'<tr>';
            print'<td>'.$row['productName'].'</td>';
            print'<td>'.$row['productDescription'].'</td>';
            print'<td>'.$row['productPrice'].'</td>';
            print'<td>'.$row['categoryName'].'</td>';
            print'<td>'.$row['productImage'].'</td>';
            print'</tr>';
        }
        print'</table>';
    ?>
</main>
</div>
</body>
</html>