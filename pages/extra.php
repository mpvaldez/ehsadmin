<?php
include('../controller/extra_controller.php');
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
    <title>Extras</title>
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
                    <h1 class="page-header"><!-- InstanceBeginEditable name="titulo" -->Extras<!-- InstanceEndEditable --></h1>
                </div>
            </div>
            <!-- InstanceBeginEditable name="CampoDePagina" -->
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="glyphicon glyphicon-list-alt"></i> Agregar un extra</h3>
                        </div>
                        <div class="panel-body">
                            <form action="../controller/extra_controller.php" id="formulario" enctype="multipart/form-data" class="" method="POST">
                            <input type="hidden" name="nuevo_extra" value="1"> 
                            <div class="form-group">
                                <p><b>Nombre</b></p>
                                <input class="form-control" name="nombre" type="text" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <p><b>Imagen</b></p>
                                <input name="imagen" type="file">
                            </div>                            
                            <div class="form-group">
                                <p><b>Descripcion</b></p>
                                <textarea class="form-control" name="descripcion" rows="3" placeholder="Agrega una breve descripcion"></textarea>
                            </div>
                            <div class="form-group">
                                <p><b>Unidades</b></p>
                                <input class="form-control" name="unidades" type="text" placeholder="0">
                            </div>
                            <div class="form-group">
                                <p><b>Tarifa</b></p>
                                <input class="form-control" name="tarifa" type="text" placeholder="0.00">
                            </div>
                                <button type="submit" class="btn btn-block btn-info">Guardar cambios</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="glyphicon glyphicon-list-alt"></i> Registro de extras</h3>
                        </div>
                        <div class="panel-body">
<?php
if (!isset($filas)) {
    echo "<h4>No se ha cargado ningun servicio extra</h4>";
}
else {
    foreach ($filas as $key => $value) {
    
?>                        
                            <div class="media">
                                <div class="media-left media-top">
                                    <img class="media-object img-thumbnail" width="115" src="<?php echo $filas[$key]['imagen'];?>">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"> <b><?php echo $filas[$key]['nombre'];?></b></h4>
                                    <p>
                                        <?php echo $filas[$key]['descripcion'];?>
                                    </p>
                                    <p>
                                        Tarifa: $<?php echo $filas[$key]['tarifa'];?>
                                    </p>                                    
                                    <p>
                                        <div class="btn-group btn-group-sm" role="group">
                                            <a href="#<?php echo $filas[$key]['id'].$filas[$key]['nombre'];?>" class="btn btn-default" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i></a>
                                            <a href="" class="btn btn-default"><i class="glyphicon glyphicon-trash"></i></a>
                                        </div>
                                    </p>
                                </div>
                            </div>
<?php
    }
}
?>                            
                        </div>
                    </div>
                </div>                
            </div>    
			
<?php
if (!isset($filas)) {
    echo "";
}
else {
    foreach ($filas as $key => $value) {
?>
<form action="../controller/extra_controller.php" id="formulario" class="" method="POST">
    <input type="hidden" name="editar_extra" value="1">
    <input type="hidden" name="id" value="<?php echo $filas[$key]['id'];?>">
    <div class="modal fade" id="<?php echo $filas[$key]['id'].$filas[$key]['nombre'];?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title text-center"><b>Editar <?php echo $filas[$key]['nombre'];?></b></h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <p><b>Nombre</b></p>
                        <input class="form-control" name="nombre" type="text" value="<?php echo $filas[$key]['nombre'];?>">
                    </div>                  
                    <div class="form-group">
                        <p><b>Descripcion</b></p>
                        <textarea class="form-control" name="descripcion"><?php echo $filas[$key]['descripcion'];?></textarea>
                    </div>
                    <div class="form-group">
                        <p><b>Unidades</b></p>
                        <input class="form-control" name="unidades" type="text" value="<?php echo $filas[$key]['unidades'];?>">
                    </div>
                    <div class="form-group">
                        <p><b>Tarifa</b></p>
                        <input class="form-control" name="tarifa" type="text" value="<?php echo $filas[$key]['tarifa'];?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-block btn-info">Guardar</button>
                </div>                
            </div>
        </div>
    </div>

</form>    
<?php
    }
}
?>
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
