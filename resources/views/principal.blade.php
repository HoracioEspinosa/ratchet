<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>El CID - RealtimeApp</title>
    <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="assets/images/logocid.png">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="assets/images/logocid.png">

    <!-- style -->
    <link rel="stylesheet" href="assets/animate.css/animate.min.css" type="text/css" />
    <link rel="stylesheet" href="assets/glyphicons/glyphicons.css" type="text/css" />
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="assets/material-design-icons/material-design-icons.css" type="text/css" />

    <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
    <!-- build:css assets/styles/app.min.css -->
    <link rel="stylesheet" href="assets/styles/app.css" type="text/css" />
    <!-- endbuild -->
    <link rel="stylesheet" href="assets/styles/font.css" type="text/css" />
    <style type="text/css">
        .footable > thead > tr > th{
            font-size: 0.8em;
            padding: 0px;
            text-align: center;
        }
        .footable > thead > tr > th:first-child{
            padding-left: 5px;
        }
        .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th{
            font-size: 0.8em;
        }
    </style>
</head>
<body>
<div class="app" id="app">

    <!-- ############ LAYOUT START-->

    <!-- aside -->
    <div id="aside" class="app-aside modal fade nav-dropdown folded" ng-class="{'folded': app.setting.folded}">
        <!-- fluid app aside -->
        <div class="left navside dark dk" layout="column">
            <div class="navbar no-radius">
                <div ui-include="'views/blocks/navbar.brand.html'"></div>
            </div>
            <div flex class="hide-scroll">
                <nav class="scroll nav-light">
                    <div ui-include="'views/blocks/nav.html'"></div>
                </nav>
            </div>
            <div flex-no-shrink class="b-t">
                <div ui-include="'views/blocks/aside.top.0.html'"></div>
            </div>
        </div>
    </div>
    <!-- / -->

    <!-- content -->
    <div id="content" class="app-content box-shadow-z0" role="main">
        <div class="app-header white box-shadow">
            <div ui-include="'views/blocks/header.html'"></div>
        </div>
        <div class="app-footer" ng-class="{'hide': $state.current.data.hideFooter}">
            <div ui-include="'views/blocks/footer.html'"></div>
        </div>
        <div ui-view class="app-body" id="view">

            <!-- ############ PAGE START-->
            <div class="padding">
                <div class="col sm-12" style="display: inline-flex; justify-content: center; align-items: center; width: 100%;margin-bottom: 40px;">
                    <img src="../assets/images/elcid.png" alt="">
                </div>
                <div class="box">
                    <div class="box-header">
                        <h2>Usuarios en espera</h2>
                        <small>Listado de usuarios en espera (Seleccione un usuario para iniciar su recorrido)</small>
                    </div>
                    <div>
                        <table class="table m-b-none" ui-jp="footable" data-filter="#filter" data-page-size="5">
                            <thead>
                            <tr>
                                <th>N°</th>
                                <th>Fecha</th>
                                <th>Hr. Ent</th>
                                <th>Nombre</th>
                                <th>In. Re</th>
                                <th>Out. Re</th>
                                <th>1 sta</th>
                                <th>Estado</th>
                                <th>In. Su</th>
                                <th>Out. Su</th>
                                <th>2 sta</th>
                                <th>Estado</th>
                                <th>In Vu</th>
                                <th>Close</th>
                                <th>Venta USD</th>
                                <th>Estatus Gral</th>
                                <th>% Comisionable</th>
                                <th>¿Listo?</th>
                                <th>Comentarios</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>01-Feb-16</td>
                                <td>09:28</td>
                                <td data-value="78025368997">José Garza</td>
                                <td>09:30</td>
                                <td>10:05</td>
                                <td>-5.00</td>
                                <td data-value="1"><span class="label warning" title="Active">Atrasado</span></td>
                                <td>10:40</td>
                                <td>10:55</td>
                                <td>8:00</td>
                                <td>on-time</td>
                                <td>11:30</td>
                                <td>Mariano</td>
                                <td>55,000.00</td>
                                <td>Pagada</td>
                                <td>25%</td>
                                <td>Si</td>
                                <td>American Express 12m</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>01-Feb-16</td>
                                <td>09:28</td>
                                <td data-value="78025368997">José Garza</td>
                                <td>09:30</td>
                                <td>10:05</td>
                                <td>-5.00</td>
                                <td data-value="1"><span class="label warning" title="Active">Atrasado</span></td>
                                <td>10:40</td>
                                <td>10:55</td>
                                <td>8:00</td>
                                <td>on-time</td>
                                <td>11:30</td>
                                <td>Mariano</td>
                                <td>55,000.00</td>
                                <td>Pagada</td>
                                <td>25%</td>
                                <td>Si</td>
                                <td>American Express 12m</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>01-Feb-16</td>
                                <td>09:28</td>
                                <td data-value="78025368997">José Garza</td>
                                <td>09:30</td>
                                <td>10:05</td>
                                <td>-5.00</td>
                                <td data-value="1"><span class="label warning" title="Active">Atrasado</span></td>
                                <td>10:40</td>
                                <td>10:55</td>
                                <td>8:00</td>
                                <td>on-time</td>
                                <td>11:30</td>
                                <td>Mariano</td>
                                <td>55,000.00</td>
                                <td>Pagada</td>
                                <td>25%</td>
                                <td>Si</td>
                                <td>American Express 12m</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>01-Feb-16</td>
                                <td>09:28</td>
                                <td data-value="78025368997">José Garza</td>
                                <td>09:30</td>
                                <td>10:05</td>
                                <td>-5.00</td>
                                <td data-value="1"><span class="label warning" title="Active">Atrasado</span></td>
                                <td>10:40</td>
                                <td>10:55</td>
                                <td>8:00</td>
                                <td>on-time</td>
                                <td>11:30</td>
                                <td>Mariano</td>
                                <td>55,000.00</td>
                                <td>Pagada</td>
                                <td>25%</td>
                                <td>Si</td>
                                <td>American Express 12m</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>01-Feb-16</td>
                                <td>09:28</td>
                                <td data-value="78025368997">José Garza</td>
                                <td>09:30</td>
                                <td>10:05</td>
                                <td>-5.00</td>
                                <td data-value="1"><span class="label warning" title="Active">Atrasado</span></td>
                                <td>10:40</td>
                                <td>10:55</td>
                                <td>8:00</td>
                                <td>on-time</td>
                                <td>11:30</td>
                                <td>Mariano</td>
                                <td>55,000.00</td>
                                <td>Pagada</td>
                                <td>25%</td>
                                <td>Si</td>
                                <td>American Express 12m</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>01-Feb-16</td>
                                <td>09:28</td>
                                <td data-value="78025368997">José Garza</td>
                                <td>09:30</td>
                                <td>10:05</td>
                                <td>-5.00</td>
                                <td data-value="1"><span class="label warning" title="Active">Atrasado</span></td>
                                <td>10:40</td>
                                <td>10:55</td>
                                <td>8:00</td>
                                <td>on-time</td>
                                <td>11:30</td>
                                <td>Mariano</td>
                                <td>55,000.00</td>
                                <td>Pagada</td>
                                <td>25%</td>
                                <td>Si</td>
                                <td>American Express 12m</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>01-Feb-16</td>
                                <td>09:28</td>
                                <td data-value="78025368997">José Garza</td>
                                <td>09:30</td>
                                <td>10:05</td>
                                <td>-5.00</td>
                                <td data-value="1"><span class="label warning" title="Active">Atrasado</span></td>
                                <td>10:40</td>
                                <td>10:55</td>
                                <td>8:00</td>
                                <td>on-time</td>
                                <td>11:30</td>
                                <td>Mariano</td>
                                <td>55,000.00</td>
                                <td>Pagada</td>
                                <td>25%</td>
                                <td>Si</td>
                                <td>American Express 12m</td>
                            </tr>
                            </tbody>
                            <tfoot class="hide-if-no-paging">
                            <tr>
                                <td colspan="5" class="text-center">
                                    <ul class="pagination"></ul>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <!-- ############ PAGE END-->

        </div>
    </div>
    <!-- / -->


    <!-- ############ LAYOUT END-->

</div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
<script src="libs/jquery/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
<script src="libs/jquery/tether/dist/js/tether.min.js"></script>
<script src="libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
<script src="libs/jquery/underscore/underscore-min.js"></script>
<script src="libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
<script src="libs/jquery/PACE/pace.min.js"></script>

<script src="scripts/config.lazyload.js"></script>

<script src="scripts/palette.js"></script>
<script src="scripts/ui-load.js"></script>
<script src="scripts/ui-jp.js"></script>
<script src="scripts/ui-include.js"></script>
<script src="scripts/ui-device.js"></script>
<script src="scripts/ui-form.js"></script>
<script src="scripts/ui-nav.js"></script>
<script src="scripts/ui-screenfull.js"></script>
<script src="scripts/ui-scroll-to.js"></script>
<script src="scripts/ui-toggle-class.js"></script>

<script src="scripts/app.js"></script>

<!-- ajax -->
<script src="libs/jquery/jquery-pjax/jquery.pjax.js"></script>
<script src="scripts/ajax.js"></script>
<!-- endbuild -->
</body>
</html>