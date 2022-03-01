<?php
include('../controller/indiv_controller.php');
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
    <title>Modificar disponibilidad - Administración</title>
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
                    <h1 class="page-header"><!-- InstanceBeginEditable name="titulo" -->Disponibilidad<small> Modificar disponibilidad</small><!-- InstanceEndEditable --></h1>
                </div>
            </div>
            <!-- InstanceBeginEditable name="CampoDePagina" -->
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Disponibilidad</h3>
                        </div>
                        <!-- Heading del panel -->


                        <div class="panel-body">
                            <form action="../controller/indiv_controller.php" id="formulario" class="" method="POST">
                                <input type="hidden" name="columna" value="cantidad">
                                <input type="hidden" name="actualizacion_individual" value="1"> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <p><b>Fechas</b></p>
                                    </div>
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
                                <!-- Desde / Hasta -->

                                <div class="row">
                                    <div class="col-md-12">
                                    <p><b>Tipo de habitacion</b></p>
                                        <div class="form-group">
                                            <div class="radio">
                                                <div>
                                                    <input id="todos" name="todos" type="checkbox" value="todos"><label for="todos"> Todos</label> 
                                                </div>
<?php
foreach ($tipos_de_deptos as $key => $value) {
    echo '<div>
              <input id="'.$key.'" name="unit[]" type="checkbox" value="'.$key.'"><label for="'.$key.'"> '.$value.'</label> 
          </div>';
}
?>                                         
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tipo de habitacion -->

                                <div class="row">
                                	<div class="col-md-12">
		                                <div class="form-group">
		                                    <p><b>Cantidad</b></p>
		                                    <input class="form-control" name="element" type="text">
		                                </div>
                                	</div>
                                </div>
                                <!-- Cantidad -->
                                <div class="row">
                                	<div class="col-md-12">
                                		<a href="#respuesta" data-toggle="modal" id="btn-enviar" class="btn btn-block btn-info">Guardar</a>
                                	</div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

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
	<!-- InstanceBeginEditable name="EditRegion5" --><!-- InstanceEndEditable -->

</body>
<!-- InstanceEnd --></html>
