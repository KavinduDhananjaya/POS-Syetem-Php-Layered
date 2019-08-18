<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 6/12/2019
 * Time: 10:44 AM
 */
require_once __DIR__ . "/../api/dto/Item.php";
require_once __DIR__ . "/../api/bussiness/impl/ItemBOImpl.php";
require_once __DIR__ . "/../api/db/DBConnection.php";
?>

<?php
include 'common/head.php';
include 'common/header.php';
include 'common/navbar.php';
?>



<!--<div class="ui inverted menu" style="width: 98%;height: 60px;margin-left: 13px;font-size: 20px;background-color: #33383C">-->
<!---->
<!--    <a class="item" style="padding-left: 65px;padding-right: 75px" href="dashbord.php">-->
<!--        <img src="image/icons8_Real_Estate.ico" alt="">Dashbord-->
<!--    </a>-->
<!--    <a class="item" style="padding-left: 70px;padding-right: 75px" href="customer1.php">-->
<!--        <img src="image/icons8_Customer.ico" alt="">Customer-->
<!--    </a>-->
<!--    <a class="item " style="padding-left: 85px;padding-right: 80px" href="item1.php">-->
<!--        <img src="image/icons8_Trolley.ico" alt="">Item-->
<!--    </a>-->
<!--    <a class="item " style="padding-left: 85px;padding-right: 75px" href="order.php">-->
<!--        <img src="image/icons8_Buy.ico" alt=""> Order-->
<!--    </a>-->
<!--    <a class="item " style="padding-left: 75px;padding-right: 75px" href="Reports.html">-->
<!--        <img src="image/icons8_Brief.ico" alt="">Report-->
<!--    </a>-->
<!--</div>-->

<div class="ui three steps" style="width: 98%;margin-left: 12px">

    <div class="active step" >
        <i class="fas fa-plus-circle" style="font-size: 30px"></i>
        <div class="content" style="padding-left: 20px">
            <div class="title">All Items</div>
        </div>
    </div>


    <div class="step">
        <i class="fas fa-plus-circle" style="font-size: 30px"></i>
        <div class="content" style="padding-left: 20px">
            <div class="title">Add Item</div>
        </div>
    </div>

    <div class="step">
        <i class="far fa-edit" style="font-size: 30px"></i>
        <div class="content" style="padding-left: 20px">
            <div class="title">Update Item</div>
        </div>
    </div>
</div>

<section style="margin-top: 10px">


    <?php

    $connection = (new DBConnection())->getConnection();

    if (isset($_POST['deleteBtn'])) {

        $key = $_POST["checkDelete"];

        $check = mysqli_query($connection, "select * from item where itemCode='$key' ") or die("not found" . mysqli_error());

        if (mysqli_num_rows($check) > 0) {

            $delete = mysqli_query($connection, "delete from item where itemCode='$key' ") or die("not Delete" . mysqli_error());

//            echo "Customer has been Deleted..."

            ?>

            <div class="alert alert">
                <p>Item has been Deleted... </p>

            </div>


            <?php


        } else {

            ?>

            <div class="alert alert">
                <p>Item Does Not exist.. </p>
            </div>

            <?php


        }


    }

    ?>



    <table class="ui compact celled definition table" style="width: 90%;margin-left: 40px">
        <thead>
        <tr>
            <th>Select</th>
            <th>Code</th>
            <th>Name</th>
            <th>Unit Price</th>
            <th>Quantity</th>

        </tr>
        </thead>

        <tbody>
        <?php

        $itemBO = new ItemBOImpl();
        $result = $itemBO->getAll();

        while ($row = mysqli_fetch_row($result)) {
            ?>

            <form action="" method="post" role="form">
                <tr>

                    <td class=\"collapsing\">
                        <div class="ui fitted checkbox">
                            <input type="checkbox"  name="checkDelete"  value="<?php echo $row[0] ?>" required> <label></label>
                        </div>
                    </td>

                    <td> <?php echo $row[0]; ?></td>
                    <td> <?php echo $row[1]; ?></td>
                    <td> <?php echo $row[2]; ?></td>
                    <td> <?php echo $row[3]; ?></td>
                    <td><button type="submit"  name="deleteBtn" class="ui small  button" ><i class="fas fa-minus-circle"></i> Remove</button></td>

                </tr>

            </form>


            <?php
        }


        ?>
        </tbody>

        <?php
/*
        $itemBO = new ItemBOImpl();
        $result = $itemBO->getAll();

        while ($data = mysqli_fetch_row($result)) {
            echo "
                    <tr>
                        <td class=\"collapsing\">
                            <div class=\"ui fitted checkbox\">
                                <input type=\"checkbox\"> <label></label>
                            </div>
                        </td>
                        <th>$data[0]</th>
                        <td>$data[1]</td>
                        <td>$data[2]</td>
                        <td>$data[3]</td>                                           
                    </tr>";
        }
        */?>

        <tfoot class="full-width">
        <tr>
            <th></th>
            <th colspan="5">
                <a href="item2.php"><div class="ui right floated small primary labeled icon button" >
                        <i class="fas fa-plus-circle"></i> Add Item
                    </div></a>
                <a href="item3.php"><div class="ui small button">
                        <i class="far fa-edit"></i>Update Item
                    </div></a>
                <div class="ui small  button">
                    <i class="fas fa-minus-circle"></i>Remove Item
                </div>
                <div class="ui transparent icon input">
                    <input type="text" placeholder="Search from CODE">
                    <i class="fas fa-search"></i>
                </div>
            </th>
        </tr>
        </tfoot>
    </table>




</section>

</body>
</html>
