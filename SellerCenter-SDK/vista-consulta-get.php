<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Aplicación de API SellerCenter Linio">
        <meta name="author" content="www.millergomez.com">

        <title>API Seller Celler Linio</title>

        <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    </head>

    <body>

        <div class="container">

            <div class="row">
                <!-- The justified navigation menu is meant for single line per list item.
                     Multiple lines will require custom code not provided by Bootstrap. -->
                <div class="masthead">
                    <h3 class="text-muted">API Seller Celler Linio</h3>
                    <nav>
                        <ul class="nav nav-justified">
                            <li class="active"><a href="vista-consulta-get.php">Consulta GET</a></li>
                            <li><a href="vista-consulta-post.php">Consulta POST</a></li>
                            <li><a href="http://www.millergomez.com/" target="_blank">Millergs</a></li>
                            <li><a href="http://www.millergomez.com/" target="_blank">Visita mi blog</a></li>
                            <li><a href="http://www.millergomez.com/" target="_blank">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <br>


            <div id="panel" class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Consultas GET</h3>
                    </div>
                    <div class="panel-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="javascript:consultaGET()" method="post" enctype="application/x-www-form-urlencoded" target="_blank">
                                        <fieldset class="form-group">
                                            <label for="acction" class="control-label">Acction</label>
                                            <select class="form-control input-sm" id="action" name="action">
                                                <option value="">- Select an API Call -</option>
                                                <option value="FeedCancel">FeedCancel</option>
                                                <option value="FeedCount">FeedCount</option>
                                                <option value="FeedList">FeedList</option>
                                                <option value="FeedOffsetList">FeedOffsetList</option>
                                                <option value="FeedStatus">FeedStatus</option>
                                                <option value="GetBrands">GetBrands</option>
                                                <option value="GetCategoriesByAttributeSet">GetCategoriesByAttributeSet</option>
                                                <option value="GetCategoryAttributes">GetCategoryAttributes</option>
                                                <option value="GetCategoryTree">GetCategoryTree</option>
                                                <option value="GetDocument">GetDocument</option>
                                                <option value="GetFailureReasons">GetFailureReasons</option>
                                                <option value="GetFeedRawInput">GetFeedRawInput</option>
                                                <option value="GetMetrics">GetMetrics</option>
                                                <option value="GetMultipleOrderItems">GetMultipleOrderItems</option>
                                                <option value="GetOrder">GetOrder</option>
                                                <option value="GetOrderComments">GetOrderComments</option>
                                                <option value="GetOrderItems">GetOrderItems</option>
                                                <option value="GetOrders">GetOrders</option>
                                                <option value="GetPayoutStatus">GetPayoutStatus</option>
                                                <option value="GetProducts">GetProducts</option>
                                                <option value="GetShipmentProviders">GetShipmentProviders</option>
                                                <option value="GetStatistics">GetStatistics</option>
                                                <option value="ProductCreate">ProductCreate</option>
                                                <option value="Image">ProductImage</option>
                                                <option value="ProductRemove">ProductRemove</option>
                                                <option value="ProductUpdate">Actualización de productos</option>
                                                <option value="SetStatusToCanceled">SetStatusToCanceled</option>
                                                <option value="SetStatusToDelivered">SetStatusToDelivered</option>
                                                <option value="SetStatusToFailedDelivery">SetStatusToFailedDelivery</option>
                                                <option value="SetStatusToPackedByMarketplace">SetStatusToPackedByMarketplace</option>
                                                <option value="SetStatusToReadyToShip">SetStatusToReadyToShip</option>
                                                <option value="SetStatusToShipped">SetStatusToShipped</option>
                                                <option value="UserCreate">UserCreate</option>
                                                <option value="UserRoleUpdate">UserRoleUpdate</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="output-format" class="control-label">Output format</label>
                                            <select class="form-control input-sm" id="output_format" name="output_format">
                                                <option value="XML">XML</option>
                                                <option value="JSON">JSON</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <button type="submit" class="btn btn-primary btn-sm">Obtener URL</button>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="col-md-6" id="result">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src="js/jquery.min.js"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src="js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

            <script>
                function consultaGET() {
                    var action = document.getElementById('action').value;
                    var output_format = document.getElementById('output_format').value;
                    $.post('funciones-get.php', {
                        action: action,
                        output_format: output_format
                    }, function (data) {
                        //console.log(data);
                        //$('#result').html(data);
                        if (output_format === 'JSON' && action === 'GetProducts') {
                            GetProducts(data);
                        }
                    });
                }

                function GetProducts(data) {
                    data = JSON.parse(data);
                    var products = data.SuccessResponse.Body.Products;

                    var html = '';
                    
                    html += '<table class="table"><thead class="thead-default">'
                            + '<tr>'
                            + '<th>Sku</th>'
                            + '<th>Producto</th>'
                            + '<th>Precio</th>'
                            + '<th>Stock</th>'
                            + '<th>Estado</th>'
                            + '</tr></thead> <tbody>';
                    
                    for (var i in products) {
                        //console.log(products[i]);  // (o el campo que necesites)
                        html += '<tr>'
                                + '<td>' + products[i].SellerSku + '</td>'
                                + '<td>' + products[i].Name + '</td>'
                                + '<td>' + products[i].Price + '</td>'
                                + '<td>' + products[i].Quantity + '</td>'
                                + '<td>' + products[i].Status + '</td>'
                                + '</tr>';
                    }
                    html += '</tbody></table>';
                    
                    $('#result').html(html);
                }
            </script>
        </div>
    </body>
</html>