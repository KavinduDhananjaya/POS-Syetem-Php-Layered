<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 6/12/2019
 * Time: 10:45 AM
 */
?>
<?php
include 'common/head.php';
include 'common/header.php';
include 'common/navbar.php';
?>


<div class="ui three steps" style="width: 98%;margin-left: 12px">

    <div class="step">
        <i class="fas fa-users" style="font-size: 30px"></i>
        <div class="content" style="padding-left: 20px">
            <div class="title">All Items</div>
        </div>
    </div>


    <div class=" step">
        <i class="fas fa-plus-circle" style="font-size: 30px"></i>
        <div class="content" style="padding-left: 20px">
            <div class="title">Add Item</div>
        </div>
    </div>

    <div class="active step">
        <i class="far fa-edit"  style="font-size: 30px"></i>
        <div class="content" style="padding-left: 20px">
            <div class="title">Update Item</div>
        </div>
    </div>
</div>

<section>
    <form style="width: 90%;margin-left:70px;padding-top: 40px" id="formUpdateItem">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Item Code</label>
                <input type="text" class="form-control" id="inputEmail" placeholder="">
            </div>

        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Item Name</label>
                <input type="text" class="form-control" id="inputEmail" placeholder="">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Unit Price</label>
                <input type="text" class="form-control" id="inputEmil4" placeholder="Rs.">
            </div>

            <div class="form-group col-md-6">
                <label for="inputEmail4">Quantity</label>
                <input type="number" class="form-control" id="inputEmil4" placeholder="">
            </div>

        </div>

        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Agree
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary" id="btnUpdateItem">Update</button>
    </form>
</section>

<script src="js/jquery-3.4.1.min.js"></script>
<script>

    $("#btnUpdateItem").click(function () {

        var itemData=$("#formUpdateItem").serialize();
        $.ajax({
            url: "../api/service/ItemService.php",
            method: "POST",
            async: true,
            data: itemData + "&operation=updateItem"
        }).done(function (rea) {
            if (rea) {
                alert("Item Updated");
            }else{
                alert("Error")
            }
        })


    })

</script>
</body>
</html>
