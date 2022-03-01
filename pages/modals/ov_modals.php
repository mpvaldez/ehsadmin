<?php
for ($aparts=1; $aparts <= $qty_deptos; $aparts++) {
    for ($i=0; $i < count($conceptos); $i++) { 
?>
<form action="../controller/indiv_controller.php" id="formulario" class="" method="POST">
    <input type="hidden" name="columna" value="<?php echo $titulos_columnas[$i+3];?>">
    <input type="hidden" name="unit[]" value="<?php echo $aparts;?>">
    <input type="hidden" name="actualizacion_individual" value="desde_ov">
	<div class="modal fade" id="<?php echo $aparts.$conceptos[$i];?>">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title text-center">Modificar <?php echo $conceptos[$i].' en '.$tipos_de_deptos[$aparts]; ?> por periodo determinado</h4>
	            </div>

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

	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="form-group">
	                            <p><b><?php echo $conceptos[$i]; ?></b></p>
	                            <?php
	                            if ($i == 2|| $i == 5|| $i == 6) {
	                            ?>
	                                <div class="row">
	                                    <div class="col-md-12">
	                                        <div class="form-group">
	                                            <p><b>¿Que desea hacer?</b></p>
	                                            <select class="form-control" name="element" id="option">
	                                                <option value="0">Abrir</option>
	                                                <option value="1">Cerrar</option>
	                                            </select>
	                                        </div>
	                                    </div>
	                                </div>
	                            <?php
	                        	}else {
	                        		
	                            ?>
									<input class="form-control" name="element" type="text">
								<?php
	                            }
	                            ?>

	                            
	                        </div>
	                    </div>
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