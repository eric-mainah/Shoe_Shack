<?php include "header.php"?>
<?php include "config.php";
session_start();
?>


<div class="container">
    <div class="jumbotron">
        <h3 style="text-align: center">Welcome To The ShoeShack</h3>
    </div>
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <?php
                /*$sql = "SELECT * FROM `sale`";
                $fetchResults = mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($fetchResults)){
                extract($row);
                }

                echo '<img src="'.$img.'">';
                echo "$brand.<br>";
                echo "$size.<br>";
                echo "$price.<br>";*/
                ?>
        </div>
    </div>
</div>

<?php include 'footer.php'?>