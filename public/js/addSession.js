/*Captura el valor e Id del producto  y lo pasa al carrito*/

$(document).ready(function () {

    $(this).on("click", "#shop", function () {
        var productId = $(this).parent().parent().find('.productId').html();
        $.ajax({
            url: "/carrito/" + productId,
            type: "get",
            success: function (data) {
                if (data === 1) {
                    alert('Error agregando al carrito.');
                } else {
                    //alert('Producto añadido');
                }
            }, error: function () {
                alert("Error agregando al carrito!!!!");
            }
        });
    }
    );


    $('.mas').click(function () {
        var productId = $(this).parent().attr('id').split('uds')[1];
        var price = $(this).parent().find('.priceDB').text();
        $.ajax({
            url: "/carrito/" + productId,
            type: "get",
            //headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            //data: { id : productId },
            success: function (data) {
                if (data == 1) {
                    alert('Error agregando al carrito.');
                } else {
                    var valor = $('#uds' + productId).find('.valor');
                    var val = parseInt(valor.html()) + 1;
                    valor.html(val);
                    //calcular el precio calculado del producto
                    var sellPrice = showProductSellPrice(val, price);
                    $('#price' + productId).text(sellPrice);
                }
            }, error: function () {
                alert("Error ajax agregando al carrito!!!!");
            }
        });

    });
    $('.menos').click(function () {
        var productId = $(this).parent().attr('id').split('uds')[1];
        var price = $(this).parent().find('.priceDB').text();

        $.ajax({
            url: "/carrito/" + productId + "/menos",
            type: "get",
            success: function (data) {
                if (data === 1) {
                    alert('Error agregando al carrito.');
                } else {
                    var valor = $('#uds' + productId).find('.valor');
                    var val = parseInt(valor.html());
                    if (val > 1) {
                        val = val - 1;
                        valor.html(val);

                        //calcular el precio calculado del producto
                        var sellPrice = showProductSellPrice(val, price);
                        $('#price' + productId).text(sellPrice);

                    } else if (val === 1) {
                        $.ajax({
                            url: "/carrito/borrar/" + productId,
                            type: "get",
                            success: function (dataDel) {
                                if (dataDel === 1) {
                                    alert('Error borrando producto del carrito.');
                                } else {
                                    $('#uds' + productId).parent().parent().parent().fadeOut(function () {
                                        $(this).remove();
                                    });
                                }
                            }
                        });
                    }
                }
            }, error: function () {
                alert("Error ajax agregando al carrito!!!!");
            }
        });

    });
    $('.borrarLinea').click(function () {
        var td1 = $(this).parent().parent().find('td:eq(1)');
        var productId = td1.find('span:eq(0)').attr('id').split('uds')[1];
        $.ajax({
            url: "/carrito/borrar/" + productId,
            type: "get",
            success: function (dataDel) {
                if (dataDel === 1) {
                    alert('Error borrando producto del carrito.');
                } else {

                    $('#uds' + productId).parent().parent().parent().fadeOut(function () {
                        $(this).remove();
                    });
                }
            }
        });
    });

    $('.totalItemsCart').change(function () {
        $.ajax({
            url: "/carrito/numero",
            type: "get",
            success: function (data) {
                $(this).html(data);
            }
        });
    });

    $('.table').each('tr', function () {
    
            $(this).find('td:eq(2)').css('background-color', 'yellow');
    
    });
});

function showProductSellPrice(qty, price) {
    return qty * price;
}