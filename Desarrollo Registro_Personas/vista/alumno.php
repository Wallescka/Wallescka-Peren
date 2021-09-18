<?php
require 'header.php';
?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Registro de datos personales <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro <select name="iddistrito" id="iddistrito" class="form-control" required>--> 
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                             <th>DPI</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Teléfono</th>
                            <th>Fecha de nacimiento</th>
                            <th></th>
                          </thead>
                          <tbody>
                          </tbody>
                        </table>
                    </div>
                    <div class="panel-body" style="height: 600px;" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">

                           <div class="inputWithIcon form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>DPI(*):</label>
                            
                            <input type="text" class="form-control" name="nombre" id="nombre" required="">  
                          </select>
                          </div>

                          <div class="inputWithIcon form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Nombres(*):</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" required=""> 
                              </select>
                          </div>


                          <div class="inputWithIcon form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Apellidos(*):</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" required="">
                          
                            
                              </select>
                          </div>

                          <div class="inputWithIcon form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Teléfono:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" required="">
                          </div>
                          <div class="inputWithIcon form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Fecha de nacimiento:</label>
                            <input type="text" class="form-control" name="apellido" id="apellido" required="">
                          </div>

                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                            <button id="btnCancelar" class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>
                        </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->


  <!-- Fin modal -->
<?php
require 'footer.php';
?>

