
<input type="hidden" name="id" value="<?php echo $id;?>"/>
<!-- <div class="col-xxl"> -->
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Datos del Estudiante</h5>
                      <!-- <small class="text-muted float-end">Default label</small> -->
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Carnet de Identidad: </label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name='ci' value= '<?php echo $ci;?>' />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Nombre Completo: </label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name='nombrecompleto' value= '<?php echo $nombrecompleto;?>' />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Cod Departamento: </label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name='coddepto' value= '<?php echo $coddepto;?>' />
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Fecha de Nacimiento: </label>
                          <div class="col-sm-6">
                            <input type="date" class="form-control" name='fechanacimiento' value= '<?php echo $fechanacimiento;?>' />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">certificado de bachiller: </label>
                          <div class="col-sm-6">
                            <input type="file" class="form-control" name='certBachiller' value= 'certBachiller' />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">certificado de Nacimiento: </label>
                          <div class="col-sm-6">
                            <input type="file" class="form-control" name='certNacimiento' value= 'certNacimiento' />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">carnet de identidad: </label>
                          <div class="col-sm-6">
                            <input type="file" class="form-control" name='certIdentidad' value= 'certIdentidad' />
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">nacionalidad: </label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name='nacionalidad' value= '<?php echo $nacionalidad;?>' />
                          </div>
                        </div>
                        
                        
                    </div>
                  <!-- </div>
                </div> -->




