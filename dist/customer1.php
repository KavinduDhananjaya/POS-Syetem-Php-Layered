<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 6/12/2019
 * Time: 10:36 AM
 */
require_once __DIR__ . "/../api/dto/Customer.php";
require_once __DIR__ . "/../api/bussiness/impl/CustomerBOImpl.php";
require_once __DIR__ . "/../api/repository/impl/CustomerRepositoryImpl.php";
require_once __DIR__ . "/../api/db/DBConnection.php";


?>

<?php
include 'common/head.php';
include 'common/header.php';
include 'common/navbar.php';
?>


<div class="ui three steps" style="width: 98%;margin-left: 12px">

    <div class="active step">
        <i class="fas fa-users" style="font-size: 30px"></i>
        <div class="content" style="padding-left: 20px">
            <div class="title">All Customer</div>
        </div>
    </div>


    <div class="step">
        <i class="fas fa-user-plus" style="font-size: 30px"></i>
        <div class="content" style="padding-left: 20px">
            <div class="title">Add Customer</div>
        </div>
    </div>

    <div class="step">
        <i class="fas fa-user-edit" style="font-size: 30px"></i>
        <div class="content" style="padding-left: 20px">
            <div class="title">Update Customer</div>
        </div>
    </div>
</div>

<section style="margin-top: 10px">

    <?php

    $connection = (new DBConnection())->getConnection();

    if (isset($_POST['deleteBtn'])) {

        $key = $_POST["checkDelete"];

        $check = mysqli_query($connection, "select * from customer where cid='$key' ") or die("not found" . mysqli_error());

        if (mysqli_num_rows($check) > 0) {

            $delete = mysqli_query($connection, "delete from customer where cid='$key' ") or die("not Delete" . mysqli_error());

            ?>

            <div class="alert alert">
                <p>Customer has been Deleted... </p>
            </div>


            <?php

        } else {

            ?>

            <div class="alert alert">
                <p>Customer Does Not exist.. </p>
            </div>

            <?php

        }

    }

    ?>


    <table class="ui compact celled definition table" style="width: 90%;margin-left: 40px" id="table-1">
        <thead>
        <tr>
            <th>Select</th>
            <th>CID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Tell</th>

        </tr>
        </thead>
        <tbody>
        <?php

        $customerBO = new CustomerBOImpl();
        $result = ($customerBO->getAll());

        while ($row = mysqli_fetch_row($result)) {
            ?>

            <form action="" method="post" role="form">
                <tr>

                    <td class=\"collapsing\">
                        <div class="ui fitted checkbox">
                            <input type="checkbox" name="checkDelete" value="<?php echo $row[2] ?>" required>
                            <label></label>
                        </div>
                    </td>

                    <td> <?php echo $row[2]; ?></td>
                    <td> <?php echo $row[0] . " " . $row[1]; ?></td>
                    <td> <?php echo $row[3]; ?></td>
                    <td> <?php echo $row[4]; ?></td>
                    <td> <?php echo $row[5]; ?></td>
                    <td>
                        <button type="submit" name="deleteBtn" class="ui small  button"><i
                                    class="fas fa-user-minus"></i>Remove
                        </button>
                    </td>
                </tr>

            </form>


            <?php
        }
        ?>


        </tbody>
        <tfoot class="full-width">
        <tr>
            <th></th>
            <th colspan="5">
                <a href="customer2.php">
                    <div class="ui right floated small primary labeled icon button">
                        <i class="fas fa-user-plus"></i> Add Customer
                    </div>
                </a>
                <a href="customer3.php">
                    <div class="ui small button">
                        <i class="fas fa-user-edit"></i> Update Customer
                    </div>
                </a>
                <div class="ui small  button">
                    <i class="fas fa-user-minus"></i>Remove Customer
                </div>

                <div class="ui transparent icon input">
                    <input type="text" placeholder="Search from CID">
                    <i class="fas fa-search"></i>
                </div>
            </th>
        </tr>
        </tfoot>
    </table>


    <script src="js/jquery-3.4.1.min.js"></script>


</section>

</body>
</html>
