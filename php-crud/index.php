<!DOCTYPE html>
<html lang="en">
<head>
   <?php include 'includes/_head.php'; ?>

</head>
<body>
    <?php include 'includes/_navbar.php' ; ?>
   <table main class="container-lg bg-white py-4">
    <h1>Listes des produits</h1>
    <p>Administrer vos produits</p>
    <thead>
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        //  1 connexion à la bdd
        require_once'connexion.php';
        //2 écriture de la requête sql

        $sql='SELECT* FROM product';
       //3 Execution de la requête SQL
       $query = mysqli_query($connexion, $sql);
       //4 recuperation des données 
       $product = mysqli_fetch_array($query);
       echo count($product);

        ?>


    </tbody>
    </table>
   </main>
</body>
</html>