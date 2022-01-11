	<div class="widget-content">
							
<form class="form-horizontal" id="sample_form" action=".php" name=frm method="POST" enctype='multipart/form-data' >

<input type="hidden" name=ingresar value="" >

<input type="hidden" name=idmsg value="<?echo $idmsg;?>" >
<input type="hidden" name=entra value="1" >
						
    // si idmsg es vacio, quiere decir que es un mensaje nuevo, en donde el usuario quiere realizar un nuevo mensaje. Por lo tanto como todo comienzo de conversacion debe tener un asunto, asi que le muestro por pantalla un input para que ponga el asunto de la conversacion

					<?if($idmsg==""){?>
					<div class="form-group">
												<label class="col-md-3 control-label">ASUNTO </label>
												<div class="col-md-6">
													<input type="text" name="asunto" value=""  class="form-control"  />
													<span class="help-block">ingrese asunto</span>
												</div>			
								</div>	
									<?};?>	
											<div class="form-group">
														<label class="control-label col-md-3">Mensaje</label>
														<div class="col-md-9">
															<textarea rows="3" cols="10" name="textomail" class="limited form-control" data-limit="1200"></textarea>
															<span class="help-block" id="limit-text-texto"></span>
														</div>
													</div>
						
										<div class="form-group">
														<label class="col-md-3 control-label">Adjuntar archivo </label>
														<div class="col-md-6">
											
														<input type="file" name="adj" data-style="fileinput">
														
														<span class="help-block"></span>
														
														</div>
								</div>				
													
									<div class="form-actions">
									

										<button class="btn btn-primary pull-right" onclick="entrax();"> Enviar </button>

									</div>
									
                  
								</form>
							</div>
