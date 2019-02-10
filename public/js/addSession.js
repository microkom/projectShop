/*Captura el valor e Id del producto  y lo pasa al carrito*/

$(document).ready(function () {

    var idArr = [];
    $(this).on("click", "#shop", function () {

        var price = $(this).parent().parent().find('#product-price').text();
        var productId = $(this).parent().parent().find('#productId').val();
        /*$('#cantidad').text(cont);
         $('#carrito').text(price);*/
        var jsonProducts = {"id": productId, "cant": 1, "price": price};
        idArr.push(jsonProducts);
        var jsonArr = {"ob": idArr};
//        addSession(jsonArr);
//        
//function addSession(productList) {
        // Create our XMLHttpRequest object
        var hr = new XMLHttpRequest();
        var csrf_token = $('meta[name="csrf-token"]').attr('content');

        // Create some variables we need to send to our PHP file
        var url = "/session";
        varj = JSON.stringify(jsonArr);
        hr.open("POST", url, true);
        // Set content type header information for sending url encoded variables in the request
        hr.setRequestHeader('X-CSRF-Token', csrf_token, "Content-type", "application/x-www-form-urlencoded");
        // Access the onreadystatechange event for the XMLHttpRequest object
        hr.onreadystatechange = function () {
            if (hr.readyState === 4 && hr.status === 200) {
                var return_data = hr.responseText;
                document.getElementById("status").innerHTML = return_data;
            }
        };
        // Send the data to PHP now... and wait for response to update the status div
        hr.send(varj); // Actually execute the request
    });
//}
});