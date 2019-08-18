<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 6/12/2019
 * Time: 10:37 AM
 */

?>

<?php
include 'common/head.php';
include 'common/header.php';
include 'common/navbar.php';
?>



<div class="ui three steps" style="width: 98%;margin-left: 12px">

    <div class=" step">
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

    <div class="active step">
        <i class="fas fa-user-edit" style="font-size: 30px"></i>
        <div class="content" style="padding-left: 20px">
            <div class="title">Update Customer</div>
        </div>
    </div>
</div>

<section>
    <form style="width: 90%;margin-left:70px;padding-top: 40px" id="customerForm">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>First Name</label>
                <input type="text" class="form-control"  placeholder="First Name" name="firstName">
            </div>
            <div class="form-group col-md-6">
                <label>Last Name</label>
                <input type="text" class="form-control" id="txtLName" placeholder="Last Name" name="lastName">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Customer ID</label>
                <input type="text" class="form-control" id="txtId" placeholder="CID" name="cid">
            </div>

        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" id="txtAddress1" placeholder="1234 Main St" name="address">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Email</label>
                <input type="email" class="form-control" id="txtEmail" placeholder="@gmail.com" name="email">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label >Tell</label>
                <input type="tel" class="form-control" id="txtTell" placeholder="+94" name="tell">
            </div>
        </div>


        <button type="button" class="btn btn-primary" id="btnUpdate"><i class="fas fa-check-circle" style="font-size: 25px;padding-right: 10px"></i>Update</button>
    </form>
</section>

<script src="js/jquery-3.4.1.min.js"></script>
<script>
    $('#btnUpdate').click(function () {

        var customerData = $('#customerForm').serialize();
        alert(customerData);
        $.ajax({
            url: "../api/service/CustomerService.php",
            method: "POST",
            async: true,
            data: customerData + "&operation=updateCustomer"
        }).done(function (rea) {
            alert(rea);
        })
    });


</script>

</body>
</html>
