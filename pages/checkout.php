<?php
$process = 'general';
$ejecucion = 'checkout';
include('../controller/rsv_controller.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/template_admin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<!-- InstanceBeginEditable name="doctitle" -->
    <title>Salidas del dia - Administración</title>
    <!-- InstanceEndEditable -->
    <!-- InstanceBeginEditable name="head" -->
    <!-- InstanceEndEditable -->
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

	<!-- Fuente Open sans -->    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    
    <!-- Estilos adminb -->
    <link href="../css/adminb.css" rel="stylesheet" type="text/css">

    <!-- Datepicker CSS -->
    <link href="../css/datepicker.css" rel="stylesheet">    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">Perfil del hotel</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right visible-sm visible-md visible-lg">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"> Usuario <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="profile.php"><i class="glyphicon glyphicon-user"></i> Perfil</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#"><i class="fa fa-power-off"></i> Cerrar perfil</a>
                            </li>
                        </ul>
                    
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="dashboard.php"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-calendar"></i> Disponibilidad / Precios
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="overview.php">Vision general</a>
                                </li>
                                <li>
                                    <a href="availability.php">Modificar disponibilidad</a>
                                </li>
                                <li>
                                    <a href="price.php">Modificar precios</a>
                                </li>
                                <li>
                                    <a href="restrictions.php">Restricciones</a>
                                </li>
                                <li>
                                    <a href="openclose.php">Abrir / Cerrar</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="reservations.php"><i class="glyphicon glyphicon-bell"></i> Reservas</a>
                        </li>                                       
                        <li>
                            <a href="discounts.php"><i class="glyphicon glyphicon-thumbs-up"></i> Promociones</a>
                        </li>
                        <li>
                            <a href="extra.php"><i class="glyphicon glyphicon-list-alt"></i> Extras</a>
                        </li>
                        <li>
                            <a href="charts.php"><i class="glyphicon glyphicon-stats"></i> Estadisticas/Graficos</a>
                        </li>                   
                        <li>
                            <a href="profile.php"><i class="glyphicon glyphicon-user"></i> Perfil</a>
                        </li>
						<li class="visible-xs">
                            <a href="#"><i class="fa fa-power-off"></i> Cerrar Perfil</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">

        	<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><!-- InstanceBeginEditable name="titulo" -->Check out<!-- InstanceEndEditable --></h1>
                </div>
            </div>
            <!-- InstanceBeginEditable name="CampoDePagina" -->
		
			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-up"></i> Salidas del dia</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID de Rsva</th>
                                            <th>Fecha de Rsva</th>
                                            <th>Pasajero</th>
                                            <th>Check in</th>
                                            <th>Tarifa</th>
                                            <th>Total (c/IVA)</th>
                                            <th>Editar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
if (!isset($qty_rsv)) {
    echo '<tr><td colspan="7" class="text-center">'; sinDatos(); echo '</td></tr>';
}else {
    for ($i=0; $i < $qty_rsv; $i++) { 
        echo '<tr>';
        foreach ($titulos_checkout as $a) {
            if ($a == 0) {
                continue;
            }else if ($a == 20) {
                if ($filas[$titulos_columnas[$a]][$i] == 0) {
                    echo '<td><span class="label label-success">Confirmada</span></td>';
                }else if ($filas[$titulos_columnas[$a]][$i] == 1) {
                    echo '<td><span class="label label-warning">Pendiente</span></td>';
                }else {
                    echo '<td><span class="label label-danger">Cancelada</span></td>';
                }
            }else {
                echo '<td>'.$filas[$titulos_columnas[$a]][$i].'</td>';
            }
        }
        echo '<td>
                <a class="btn btn-sm btn-info" target="_blank" href="reserve.php?rsv='.$filas[$titulos_columnas[1]][$i].'">
                    <i class="glyphicon glyphicon-pencil"></i>
                </a>
            </td>';
        echo '</tr>';
    }
}
?>                                       
                                         
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-right">
                                <a href="reservations.php">Ver salidas de otro dia <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



			<!-- InstanceEndEditable -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

	<!-- Bootstrap-Datepicker JavaScript -->
    <script src="../js/bootstrap-datepicker.js"></script>

    <script>


        $(function(){
            $('.datepicker').datepicker()
        });

        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
         
        var checkin = $('#from').datepicker({
          onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
        }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
        }
        checkin.hide();
        $('#to')[0].focus();
        }).data('datepicker');
        var checkout = $('#to').datepicker({
        onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
        }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');

  
    </script>    

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    
    <!-- Adminb -->
    <script src="../js/adminb.js"></script>
	<!-- InstanceBeginEditable name="EditRegion5" --><!-- InstanceEndEditable -->

</body>
<!-- InstanceEnd --></html>
