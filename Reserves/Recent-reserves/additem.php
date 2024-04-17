<?php
    include 'connection.php';
    include 'session_start.php';
    $user = $_SESSION['username'];
    //$ID = $_SESSION['ID'];
    $ID = $_SESSION["loggedInID"];
    date_default_timezone_set("Asia/Manila");
    echo date("Y-m-d H:i:sa")
   
?>


<!DOCTYPE html>
<html>
    <body>
        <form action = "create_item.php" method="post" enctype="multipart/form-data">
            <input type="hidden" id="user_ID" name="userID" value = <?php echo $ID ?> >
           <input type="text" id="item_name" name="name" required>
           <input type ="text" id="item_details" name="details">
           <input type ="number" id="item_price" name="price" required>
           <label for="category">Choose Category:</label>
           <select name="category" id="item_category">
                <option value="Papercraft">Papercraft</option>
                <option value="Wood Carving">Wood Carving</option>
                <option value="Crochet">Crochet</option>
                <option value="Pottery">Pottery</option>
                <option value="Jewelry">Jewelry</option>
                <option value="Weaving">Weaving</option>
                <option value="Woodcraft">Woodcraft</option>
                <option value="Leather">Leather</option>
                <option value="Painting">Painting</option>
                <option value="Candles">Candles</option>
           </select>
           <input type ="number" id="add_stock" name="stock" required>
          <!-- <input type="hidden" id="timeadded" name="time" value = <?php //echo date("Y-m-d H:i:sa")?>> -->
          <input type="file" id="product_image" name="image" accept="image/*">
           <input type="submit" value="Add Item">
           


        </form>

    </body>

</html>

