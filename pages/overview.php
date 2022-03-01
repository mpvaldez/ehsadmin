<?php
session_start();
include('../controller/ov_controller.php');
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
    <title>Vision General - Administración</title>
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
                    <h1 class="page-header"><!-- InstanceBeginEditable name="titulo" -->Disponibilidad<small> Vision general</small><!-- InstanceEndEditable --></h1>
                </div>
            </div>
            <!-- InstanceBeginEditable name="CampoDePagina" -->

        <div class="row">
            <div class="col-md-12">
                <div class="btn-group btn-group-justified"> 
                    <a class="btn btn-default btn-lg" data-toggle="modal" href="#ventana1">Mes</a>
                    <a class="btn btn-default btn-lg" data-toggle="modal" href="#ventana2">Periodo seleccionado</a>
                </div>  

                    <div class="modal fade" id="ventana1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Header de la ventana1 -->
                                <div class="modal-header">
                                    <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title text-center">Ver mes</h4>
                                </div>
                                
                                <!-- Contenido de la ventana1 -->
                                <div class="modal-body">
<?php
for ($i=0; $i < 12; $i++) { 
	echo '<form action="" id="ov_date" class="" method="POST">';
	echo '<input type="hidden" name="checkin" value="'.$meses[1][$i].'" />';
	echo '<input type="hidden" name="checkout" value="'.$meses[2][$i].'" />';
	echo '<input type="hidden" name="ov_date" value="1" />';
	echo '<button type="submit" class="btn btn-block btn-sm btn-default" value="">'.$meses[0][$i].'</button>';
	echo '</form>';
}
?>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="ventana2">
                        <form action="" id="ov_date" class="" method="POST">
                        <input type="hidden" name="ov_date" value="1" />
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Header de la ventana2 -->
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title text-center">Filtrar por periodo determinado</h4>
                                </div>

                                <!-- Contenido de la ventana2 -->
                                <div class="modal-body">
                                    <div class="text-center">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <label class="sr-only" for="desde">Desde: </label> 
                                                        <input class="form-control datepicker" id="from" type="text" name="checkin" placeholder="Desde">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-default" type="button">
                                                                <span class="fa fa-calendar"></span>
                                                            </button>
                                                        </span>    
                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <label class="sr-only" for="hasta">Hasta: </label>
                                                        <input class="form-control datepicker" id="to" type="text" name="checkout" placeholder="Hasta">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-default" type="button">
                                                                <span class="fa fa-calendar"></span>
                                                            </button>
                                                        </span>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>

                                <!-- Footer de la ventana2 -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-info">Filtrar</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
            </div>
        </div>
        <!-- Fila de botones de filtro -->


        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-calendar"></i> Rango (<?php echo date('d-M-Y', strtotime($filas['fecha'][0])).' / '.date('d-M-Y', strtotime($filas['fecha'][$qty_dias-1]))?>)</h3>
                    </div>
                    <!-- Heading del panel -->

                    <div class="panel-body">
                        <div class="row sinPadding">
                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td colspan="2">Tipo</th>
                                        </tr>
<?php
$conceptos = array('Cantidad', 'Precio', 'Abrir-Cerrar', 'Min-Noches', 'Max-Noches','No-check-in', 'No-check-out');
for ($aparts=1; $aparts <= $qty_deptos; $aparts++) { 
    echo '<tr class="tipo_depto">
                <td class="ver accordion-toggle" data-toggle="collapse" id="habitacion'.$aparts.'" data-target=".habitacion'.$aparts.'">
                        <span class="glyphicon glyphicon-eye-open"></span>
                </td>
                <td class="">'.$tipos_de_deptos[$aparts].'</td>
            </tr>';
    echo '<tr class="medio">
                <td colspan="2" class="concepto">'.$conceptos[0].' 
                    <a data-toggle="modal" href="modals.php#'.$aparts.$conceptos[0].'"><span class="label label-default">Editar</span></a>
                </td>
            </tr>';                                
    for ($i=1; $i < count($conceptos); $i++) { 
        echo '<tr class="collapse habitacion'.$aparts.' medio">
                    <td class="concepto" colspan="2">'.$conceptos[$i].'
                        <a data-toggle="modal" href="modals.php#'.$aparts.$conceptos[$i].'"><span class="label label-default">Editar</span></a>
                    </td>
                </tr>';
    }
    echo '<tr class="pigmeo" >
            <td colspan="2"></td>
        </tr>';
}
?>


                                    </tbody>
                                </table>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-8 col-lg-9">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <form action="../controller/ov_controller.php" id="formulario" class="" method="POST">
                                                <input type="hidden" name="actualizacion_grupal" value="1">

<?php
for ($aparts=1; $aparts <= $qty_deptos; $aparts++) { 
    for ($i=2; $i < count($titulos_columnas); $i++) {
        if ($aparts > 1 && $i == 2) {
            continue;
        }else if ($i == 2) {
            echo '<tr class="tipo_fecha">';
        }else if ($i == 3) {
            echo '<tr class="tipo_depto">';
            for ($c=0; $c < $qty_filas; $c++) { 
                if ($filas[$titulos_columnas[1]][$c] == $aparts) {
                    if ($filas['cerrado'][$c] == 1) {
                        echo '<td class="cerrado"></td>';
                    }else if ($filas[$titulos_columnas[$i]][$c] == 0) {
                        echo '<td class="outSistema"></td>';
                    }else{
                        echo '<td class="abierto"></td>';
                    }
                }
            }
            echo '</tr>';
            echo '<tr class="medio">';
        }
        else{
            echo '<tr class="collapse habitacion'.$aparts.' medio">';
        }
        for ($b=0; $b < $qty_filas; $b++) { 
            if ($filas[$titulos_columnas[1]][$b] == $aparts) {
                if ($i == 2) {
                    echo '<td><input type="hidden" name="fechas[]" value="'.$filas[$titulos_columnas[$i]][$b].'" />'.date("d-M", strtotime($filas[$titulos_columnas[$i]][$b])).'</td>';
                }else if ($i == 5|| $i == 8|| $i == 9) {
                    echo '<td class="'.($filas['cerrado'][$b] == 1 ? "cerrado" : "cambiar").'"><input type="hidden" name="'.$filas['id'][$b].'['.$titulos_columnas[$i].']" value="0" /><input class="vehicleChkbox" id="'.$filas['id'][$b].'['.$titulos_columnas[$i].']" name="'.$filas['id'][$b].'['.$titulos_columnas[$i].']" type="checkbox" '.($filas[$titulos_columnas[$i]][$b] == 1 ? "checked='checked'" : "").' value="'.$filas[$titulos_columnas[$i]][$b].'" /><label for="'.$filas['id'][$b].'['.$titulos_columnas[$i].']"></label></td>';
                }else {
                    echo '<td class="'.($filas['cerrado'][$b] == 1 ? "cerrado" : "cambiar").'"><input name="'.$filas['id'][$b].'['.$titulos_columnas[$i].']" type="text" class="mini" value="'.$filas[$titulos_columnas[$i]][$b].'"></td>';
                }
            }
        }
        echo '</tr>';
    }
    echo '<tr class="pigmeo"><td colspan="'.$qty_dias.'"></td></tr>';
}
?>


                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Body del panel -->
                </div>
                <!-- Panel -->
            </div>
            <!-- Fila -->
        </div>
        <!-- Fila del panel periodo -->
		
        <br><br>


        <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
            <ul class="text-center">
                <li style="list-style-type: none;">
                    <!-- <button type="submit" class="btn btn-info">Guardar cambios</button> -->
                    <a href="#respuesta" data-toggle="modal" id="btn-enviar-ov" class="btn btn-info">Guardar cambios</a>
                        <!-- <span class="glyphicon glyphicon-floppy-save"></span> Guardar cambios -->
                </li>
            </ul>
        </nav>
                                            </form>

<?php
include('modals/ov_modals.php');
?>

                    <div class="modal fade" id="respuesta">
                        <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="text-center">
                                            <div class="paso1">
                                            <img src="../img/loading-circle.gif" width="40" height="40" alt="" />
                                            </div>
                                            <!-- Esperando respuesta -->

                                            <div class="paso2">
                                                <div class="retorno">
                                                </div>
                                            </div>
                                            <!-- Devolucion -->
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
	<!-- InstanceBeginEditable name="EditRegion5" -->
    <script type="text/javascript">
        $('.vehicleChkbox').on('change', function(){
            var $este = $(this);
            if (this.checked) {
                $($este).val('1');
            } else {
                $($este).val('0');
            }
        });
    </script>
    <!-- InstanceEndEditable -->

</body>
<!-- InstanceEnd --></html>
