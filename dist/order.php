<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 6/15/2019
 * Time: 11:42 AM
 */
require_once __DIR__ . "/../api/dto/Item.php";
require_once __DIR__ . "/../api/bussiness/impl/ItemBOImpl.php";
require_once __DIR__ . "/../api/bussiness/impl/CustomerBOImpl.php";
require_once __DIR__ . "/../api/db/DBConnection.php";

?>

<?php
include 'common/head.php';
include 'common/header.php';
include 'common/navbar.php';
?>


<div class="ui three steps" style="width: 98%;margin-left: 12px">

    <div class="active step">
        <i class="fas fa-check" style="font-size: 30px"></i>
        <div class="content" style="padding-left: 20px">
            <div class="title">Fill Detail</div>
        </div>
    </div>


    <div class="step">
        <i class="fas fa-cart-plus" style="font-size: 30px"></i>
        <div class="content" style="padding-left: 20px">
            <div class="title">Order Items</div>
        </div>
    </div>


</div>

<section style="margin-top: 10px">

    <form style="width: 90%;margin-left:70px;padding-top: 40px" id="orderForm">

        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="inputEmail4">Order ID</label>
                <input type="text" name="oid" class="form-control" id="inputEmail" placeholder="ID">
            </div>

            <div class="form-group col-md-6">
                <label for="inputPasswrd4">Order Date</label>
                <input type="date" name="orderDate" class="form-control" id="inputPassword" placeholder="Last Name">
            </div>

        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputState">Customer ID</label>
                <input type="text" name="cid" class="form-control" id="txtCustomerID" placeholder="ID" >
            </div>
            <div class="form-group col-md-1">


                <select name="Choose" id="customerBox" style="border-radius: 5px;width: 100px;position: relative;top: 5px ;height: 30px;border: 1px solid #b9b2ff">
                    <option selected>Choose...</option>
                </select>
            </div>



        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">First Name</label>
                <input type="text"  class="form-control" id="txtFirstName" placeholder="ID">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPasswrd4">Last Name</label>
                <input type="text" class="form-control" id="txtLastName" placeholder="Last Name">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" name="email" class="form-control" id="txtEmail" placeholder="@gmail.com">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Tell</label>
                <input type="tel" class="form-control" id="txtTell" placeholder="+94">
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-1">
                <label for="inputState">Item Code</label>
                <select name="choose" id="item" style="border-radius: 5px;width: 100px;margin-top: 1px;height: 30px;border: 1px solid #b9b2ff">
                    <option selected>Choose...</option>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label for="inputPasswrd4">Item Name</label>
                <input type="text"  class="form-control" id="txtItemName" placeholder="">
            </div>

            <div class="form-group col-md-2">
                <label for="inputEmail4">Unit Price</label>
                <input type="text" class="form-control" id="txtPrice" placeholder="Rs.">
            </div>
            <div class="form-group col-md-3">
                <label for="inputPasswrd4">Available Quantity</label>
                <input type="text" class="form-control" id="txtAvQuantity" placeholder="">
            </div>
            <div class="form-group col-md-3">
                <label for="inputPasswrd4">Quantity</label>
                <input type="number" name="qty" class="form-control" id="txtQuantity" placeholder="">
            </div>
        </div>


        <button id="addToCart" type="button" class="btn btn-primary" onclick="addRawDataOrder()"><i class="fas fa-cart-arrow-down"
                                                                                     style="font-size: 20px"></i>Add
            to Cart
        </button>
    </form>

</section>


<table class="ui compact celled definition table" style="width: 90%;margin-left: 40px" id="table-3">
    <thead>
    <tr>
        <th>Select</th>
        <th>Code</th>
        <th>Name</th>
        <th>Unit Price</th>
        <th>Quantity</th>
        <th>Total</th>
    </tr>
    </thead>

</table>

</section>

<footer style="padding:20px" class="row">
    <div class="ui right labeled input col-md-4">
        <h4>Discount : </h4>
<!--        <label for="amount" class="ui label">Rs.</label>-->
        <input type="text" placeholder="%" id="txtDiscount">
        <!--<div class="ui basic label">.00</div>-->
    </div>


    <div class="ui right labeled input col-md-4">
        <h4>Paid : </h4>
        <label class="ui label">Rs.</label>
        <input type="text" placeholder="Amount" id="txtPaid">
        <div class="ui basic label">.00</div>
    </div>

    <div class="ui right labeled input col-md-4">
        <h4>Balance : </h4>
        <label class="ui label">Rs.</label>
        <input type="text" placeholder="Amount" id="txtBalance">
        <div class="ui basic label">.00</div>
    </div>

    <div class="row" style="margin-top: 10px">

        <div class="col-md-4" style="padding-left: 470px;padding-top: 30px">
            <button class="ui primary button">
                <i class="far fa-calendar-check">Proceed</i>
            </button>
        </div>

    </div>


</footer>

<script src="js/jquery-3.4.1.min.js"></script>
<!--<script src="js/orderForm.js"></script>-->
<script src="js/orderForm.js"></script>

    <script>
    $('#addToCart').click(function () {
        var orderData = $('#orderForm').serialize();

        $.ajax({
            url: "../api/service/OrderService.php",
            method: "POST",
            async: true,
            data: orderData
        }).done(function (rea) {
            if (rea) {
                alert("Order Added");
            }else{
                alert("Error")
            }
        })
    });


</script>





</body>
</html>
