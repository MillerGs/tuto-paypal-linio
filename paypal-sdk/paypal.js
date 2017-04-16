var _currency = 'USD';
var _arrayProducts = [];
var _nroItem = 0, _items = [], _total = 0;

$('.btn-success').click(function(){
    obj = {};
    obj.product = $(this).data('product');;
    obj.price = $(this).data('price');
    obj.sku = $(this).data('sku');
    obj.currency = _currency;
    
    _arrayProducts.push(obj);
    
    tableProducts(_arrayProducts);
});

function tableProducts(array){
    var trs = getTr(array);
    var html = '';
    
    html += '<table class="table">'
    + '<thead>'
    + '<tr>'
    + '<th>#</th>'
    + '<th>Product</th>'
    + '<th>Unit</th>'
    + '<th>Quantity</th>'
    + '<th>Subtotal</th>'
    + '</tr>'
    + '</thead><tbody>'
    + trs
    + '</tbody></table>';
    
    $('#table-products').html(html);
    getTotal();
    
    $('#shop').hide();
    $('#cart').show();
}

$('#btnShop').click(function(){
    $('#shop').show();
    $('#cart').hide();
});

function getQuantitySubtotal(array, sku, price){
    
    var q = 0, st = 0;
    for(var i = 0; i < array.length; i++){
        if(sku === array[i].sku){
            q ++;
        }
    }
    st = q * price;
    obj = {};
    obj.quantity = q;
    obj.subtotal = parseFloat(st).toFixed(2);
    
    return obj;
}

function getTr(array){
    var arraySku = [];
    for(var i = 0; i < array.length; i++){
        arraySku.push(array[i].sku);
    }
    var filtro = [];

    var filtro = arraySku.filter(function (este, i) {
        return arraySku.indexOf(este) === i;
    });
    
    _nroItem = filtro.length;
    
    var tr='';
    
    var sku = '';
    for(var f = 0; f < filtro.length; f++){
        tr += '<tr>'
                +'<td>'+ (f+1)+'</td>';
        for(var i= 0; i < array.length; i++){
            if( (filtro[f] === array[i].sku) && sku !== array[i].sku){
                var obj = getQuantitySubtotal(array, filtro[f], array[i].price);
                        tr += '<td>'+ array[i].product+'</td>'
                        + '<td>'+ array[i].price+'</td>'
                        + '<td>'+ obj.quantity +'</td>'
                        + '<td id="item-'+ (f+1)+'" data-product="'+ array[i].product
                        +'" data-price="'+ array[i].price
                        +'" data-quantity="'+ obj.quantity 
                        +'" data-sku="'+ filtro[f] 
                        +'" data-subtotal="'+ obj.subtotal +'">'
                        + obj.subtotal +'</td>';
                
                sku = array[i].sku;
            }
        }
        tr += '</tr>';
    }
    return tr;
}

function getTotal(){
    var total = 0;
    _items = [];
    for(var i = 1; i<= _nroItem; i++ ){
        obj = {};
        obj.product = $('#item-'+i).data('product');
        obj.sku = $('#item-'+i).data('sku');
        obj.price = $('#item-'+i).data('price');
        obj.quantity = $('#item-'+i).data('quantity');
        obj.subtotal = $('#item-'+i).data('subtotal');
        obj.currency = _currency;
        _items.push(obj);
        var subtotal = $('#item-'+i).data('subtotal');
        total = total + parseFloat(subtotal);
    }
    total = parseFloat(total).toFixed(2);
    _total = total;
    $('#total').html(total);
}

$('#btnPagar').click(function(){
    var oData = {};
    oData.items = _items;
    oData.total = _total;
    
    $.ajax({
        data:  oData,
        url:   'procesarCompra.php',
        type:  'post',
        beforeSend: function () {
            console.log('beforeSend');
        },
        success:  function (response) {
            console.log(response);
             window.open(response, '_blank');
        }
    });
});