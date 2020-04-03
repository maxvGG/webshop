<?php 
include('../../config/connect.php');
include('../../src/checklogin.php');
?>
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
    <nav>
    <a href="product_overzicht.php">producten </a>
    <?php if(isset($_SESSION['admin']) && $_SESSION['admin'] === true) { ?> 
    <a href="product_toevoegen.php">product toevoegen </a>
    <a href="product_verwijderen.php">product verwijderen </a>
    <a href="../user/user_add.php">admin toevoegen</a>
    <a href="../user/user_delete.php">admin verwijderen</a>
    <a href="../user/user_overview.php">admin overview</a>
    <a href="../costumer/costumer_delete.php">costumer verwijderen</a>
    <?php } ?> 
    <a href="../../src/logout.php">log out</a>
    </nav>
</header>
<main>
<article>
    <?php 
        $sql = "SELECT product.id AS id, product.name AS productName,product.description AS productDescription,product.price AS productPrice,category.name AS categoryName,product_image.image AS productImage, product.description  AS description FROM `product`INNER JOIN category on product.category_id = category.id INNER JOIN product_image on product.id = product_image.product_id GROUP BY product.id";
        // $sql = "SELECT product.id AS id, product.name AS productName,product.description AS productDescription,product.price AS productPrice,category.name AS categoryName,product_image.image AS productImage, product.description AS description FROM `product` INNER JOIN category on product.category_id = category.id INNER JOIN product_image on product.category_id = product_image.product_id GROUP BY product.id ;";
        $results = $con->query($sql);

        while($row = $results->fetch_assoc()){ 
    ?>
        <section>
            <div class="product">
                   <figure id="<?php echo $row['id'];?>">
                       <img src="../../assets/img/<?php echo $row['productImage'];?>" alt="img">
                        <figcaption><?php echo $row['description']?></figcaption>
                   </figure>
            </div>
        </section>
    <?php  }?>
    </article>
</main>
</div>
</body>
</html>