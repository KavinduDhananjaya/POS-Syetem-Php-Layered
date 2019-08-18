function addRawDataOrder() {

    var tbl = document.getElementById("table-3");
    var raw = tbl.insertRow();
    var cell1 = raw.insertCell(0);
    var cell2 = raw.insertCell(1);
    var cell3 = raw.insertCell(2);
    var cell4 = raw.insertCell(3);
    var cell5 = raw.insertCell(4);
    var cell6 = raw.insertCell(5);


    var itmCode=document.getElementById("txtItemCode").value;
    var itmName=document.getElementById("txtItemName").value;
    var price=document.getElementById("txtPrice").value;
    var qty=document.getElementById("txtQuantity").value;
    var total=price*qty;


    cell1.innerHTML='<div class="ui fitted checkbox">\n' +
        '        <input type="checkbox"> <label></label>\n' +
        '        </div>';
    cell2.innerHTML=itmCode;
    cell3.innerHTML=itmName;
    cell4.innerHTML=price;
    cell5.innerHTML=qty;
    cell6.innerHTML=total;

}


$("#customerBox").change(function () {
    var x = $(this).val();

    $.ajax({
        url: "../api/service/CustomerService.php",
        method: "GET",
        async: true,
        dataType: 'json',
        data: "&operation=getAllCustomers"
    }).done(function (res) {
        console.log(res);

        for (let i in res) {
            let customer = res[i];
            let customerId = customer[0];
            let customerName = customer[1];
            let customerAddress = customer[2];
            let customerSalary = customer[3];

            if (customerAddress==x) {
                $('#txtFirstName').val(customerName);
                $('#txtLastName').val(customerName);
                $('#txtAddress1').val(customerSalary);
            }

        }
    });



});
