<?php
$process = 'general';
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
    <title>Reservas - Administración</title>
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
                    <h1 class="page-header"><!-- InstanceBeginEditable name="titulo" -->Reservas<!-- InstanceEndEditable --></h1>
                </div>
            </div>
            <!-- InstanceBeginEditable name="CampoDePagina" -->
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <span class="fa fa-filter"></span> Filtrar por</div>
                            </h3>
                                                <form method="POST" action="reservations.php">
                                                <input type="hidden" name="inicia_filtro" value="1" />
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="nav nav-tabs nav-justified">
                                        <li class="active"><a data-toggle="tab" href="#fechas">Fechas
                                            <span class="caret"></span></a>
                                        </li>    
                                        <li><a data-toggle="tab" href="#cliente">Cliente
                                            <span class="caret"></span></a>
                                        </li>  
                                        <li><a data-toggle="tab" href="#rsv">ID de rsv
                                            <span class="caret"></span></a>
                                        </li>   
                                        <li><a data-toggle="tab" href="#estado">Estado
                                            <span class="caret"></span></a>
                                        </li>
                                    </ul>
                                    
                                    <br>
                                                <div class="alturaFiltros col-lg-8 col-md-10 tab-content"> 

                                                    <!--- Division de fechas -->
                                                    <div id="fechas" class="tab-pane fade in active">
                                                            <div class="form-group">
                                                                <div class="radio">
                                                                    <input type="hidden" name="filtro_fecha" value="" />
                                                                    <div>
                                                                        <input type="radio" name="filtro_fecha" value="fecha_rsv" id="reservas">
                                                                        <label for="reservas">Reservas</label>
                                                                    </div>
                                                                    <div>
                                                                        <input type="radio" name="filtro_fecha" value="checkin" id="arribos">
                                                                        <label for="arribos">Arribos (Check in)</label>
                                                                    </div>
                                                                    <div>
                                                                        <input type="radio" name="filtro_fecha" value="checkout" id="salidas">
                                                                        <label for="salidas">Salidas (Check out)</label>
                                                                    </div>                                            
                                                                </div>
                                                            </div>    
                                                            <div class="form-inline">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <label class="sr-only" for="desde">Desde: </label> 
                                                                        <input class="form-control datepicker" id="from" type="text" name="fecha1" placeholder="Desde">
                                                                        <span class="input-group-btn">
                                                                            <button class="btn btn-default" type="button">
                                                                                <span class="fa fa-calendar"></span>
                                                                            </button>
                                                                        </span>    
                                                                    </div> 
                                                                </div>        
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <label class="sr-only" for="hasta">Hasta: </label>
                                                                        <input class="form-control datepicker" id="to" type="text" name="fecha2" placeholder="Hasta">
                                                                        <span class="input-group-btn">
                                                                            <button class="btn btn-default" type="button">
                                                                                <span class="fa fa-calendar"></span>
                                                                            </button>
                                                                        </span>    
                                                                    </div>
                                                                </div>
                                                            </div>    
                                                    </div>    

                                                    <!--- Division de Clientes -->
                                                    <div id="cliente" class="tab-pane fade">
                                                        <br><br>  
                                                            <div class="form-group">
                                                                <label class="sr-only" for="name">Nombre / Apellido: </label>
                                                                <input type="hidden" name="filtro_nombre" value="titular" />
                                                                <input class="form-control" name="nombre" id="name" type="text" placeholder="Nombre / Apellido">
                                                            </div>                             
                                                    </div>       
                                                    

                                                    <!--- Division de Codigo de rsv -->
                                                    <div id="rsv" class="tab-pane fade">
                                                        <br><br>
                                                            <div class="form-group">
                                                                <label class="sr-only" for="rsv">ID de rsv: </label>
                                                                <input type="hidden" name="filtro_id" value="idrsv" />
                                                                <input class="form-control" name="id_reserva" id="rsv" type="text" placeholder="ID de rsv">
                                                            </div>                             
                                                    </div>    

                                                    <!--- Division de Estado de rsv -->
                                                    <div id="estado" class="tab-pane fade">
                                                    <input type="hidden" name="filtro_estado" value="estado" />
                                                            <div class="form-group">
                                                                <div class="radio">
                                                                <input type="hidden" name="estado_reserva" value="" />
                                                                    <div>
                                                                        <input type="radio" name="estado_reserva" value="1" id="confirmadas">
                                                                        <label for="confirmadas">Confirmadas</label>
                                                                    </div>
                                                                    <div>
                                                                        <input type="radio" name="estado_reserva" value="2" id="pendientes">
                                                                        <label for="pendientes">Pendientes</label>
                                                                    </div>
                                                                    <div>
                                                                        <input type="radio" name="estado_reserva" value="3" id="canceladas">
                                                                        <label for="canceladas">Canceladas</label>
                                                                    </div>                                            
                                                                </div>                                                            
                                                            </div>                                       
                                                    </div>        
                                                </div>
                                                <div class="clearfix"></div>
                                    <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-md-offset-9">
                                        <button type="submit" class="btn btn-block btn-info">Filtrar</button>
                                </div>                            
                            </div>
                        </div>    
                                                </form>
                    </div>
                </div>    
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="glyphicon glyphicon-bell"></i> Resultados de la busqueda (<?php echo $filtro_vista.' : '.($filtro == 'estado' ? $rsv_estado[$element1][0] : $element1).($element1 == $element2 ? '' : ' / '.$element2)?>)</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID de Rsva</th>
                                            <th>Pasajero</th>
                                            <th>Estado</th>
                                            <th>Check in</th>
                                            <th>Check out</th>
                                            <th>Total</th>
                                            <th></th>                                                   
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
if (!isset($qty_rsv)) {
    echo '<tr><td colspan="6" class="text-center">'; sinDatosRsv(); echo '</td></tr>';
}else {
    for ($i=0; $i < $qty_rsv; $i++) { 
        echo '<tr>';
        foreach ($titulos_reservas as $a) {
            if ($a == 0) {
                continue;
            }else if ($a == 20) {
                echo '<td><span class="label label-'.$rsv_estado[$filas[$titulos_columnas[$a]][$i]][1].'">'.$rsv_estado[$filas[$titulos_columnas[$a]][$i]][0].'</span></td>';
            }else {
                echo '<td>'.$filas[$titulos_columnas[$a]][$i].'</td>';
            }
        }
        echo '<td class="text-center">

                <a class="btn btn-sm btn-info" target="_blank" href="reserve.php?rsv='.$filas[$titulos_columnas[1]][$i].'">
					<i class="glyphicon glyphicon-pencil"></i>
				</a>
                <button type="button" class="btn btn-sm btn-danger">
                    <i class="glyphicon glyphicon-remove"></i>
                </button>
                </td>';
        echo '</tr>';
    }
}
?>

                                    </tbody>
                                </table>
                            </div>
                        </div>                            
                    </div>
                </div>                                                   
            </div>

            
    
            <div class="row">
                <div class="col-xs-6">
                        <a href="checkin.php" class="btn btn-lg btn-block btn-success">
                        <i class="glyphicon glyphicon-circle-arrow-down"></i> Ver Arribos del dia</i>
                        </a>
                </div>
                <div class="col-xs-6">
                        <a href="checkout.php" class="btn btn-lg btn-block btn-danger">
                        <i class="glyphicon glyphicon-circle-arrow-up"></i> Ver Salidas del dia</i>
                        </a>
                </div>    
            </div>

            <br />
			
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
