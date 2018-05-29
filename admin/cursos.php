      <!DOCTYPE html>
      <html lang="es">
      <?php include 'header.php' ?>
      <!-- Intro Header -->
      <header class="intro">
          <div class="intro-body">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-8 col-sm-offset-2">
                          <h1 class="brand-heading">Administrador</h1>
                          <p class="intro-text">
                              ---
                          </p>
                          <a href="#page-sample" class="btn btn-circle page-scroll">
                              <i class="fa fa-angle-double-down animated"></i>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </header>
      <!-- section es aqui -->

       
      <section id="#">
          <div class="container content-section">
              <div class="row">
                  <h1 class="text-center">Cursos</h1>
                  <h3 class="text-center">Ponencias O Talleres</h3>
                  <div class="row" style="margin-right: auto;margin-left: auto;">
                      <div class="col-sm-4 " >
                          <button type="button" class="btn btn-info" style="margin: 20px;" data-toggle="modal" data-target="#agregarP" data-backdrop="static" data-keyboard="false">Agregar Nuevo Taller o Ponencia</button>
                      </div>
                  </div>
                  <div class="col-sm-12">
                      <div class="counter">
                          <div class="container">                        
                              <div class="row">
                              <?php 
    include"conection/conection.php";
    

    ?>         
                                  <table id="cursosAdmin" class="table table-striped table-bordered" style="width:100%">
                                      <thead>
                                          <tr>                                        
                                              <th>Título</th>
                                              <th>Fecha de inicio</th>
                                              <th>Fecha final</th>
                                              <th>Hora del curso</th>
                                              <th>Duración</th>
                                              <th>Tipo</th>
                                              <th>Foto expositor</th>
                                              <th>Nombre expositor</th>
                                              <th>Resumen Curso</th>
                                              <th>Edita ó Elimina</th>
                                              <th>Activo / Inactivo</th>

                                          </tr>
                                      </thead>
                                      <tbody>
   
                                      <?php while($row=mysql_fetch_array($conn)){ ?>
                                      <tr>
                                      <td><?php echo $row['tituloTallerPonencia'] ?></td>
                                              <td><?php echo $row['fechaInicio'] ?></td>
                                              <td><?php echo $row['fechaFin'] ?></td>
                                              <td><?php echo $row['hora'] ?></td>
                                              <td><?php echo $row['duracion'] ?></td>
                                              <td><?php echo $row['tipo'] ?></td>
                                              <td>foto</td>
                                              <td><?php echo $row['nombreExpositor'] ?></td>
                                              <td><?php echo $row['resumen'] ?></td>
                                          
                                              <td>
                                              <div align="center">
                                                <form action="borrar.php" method="post">
                                                  <input type="hidden" name="idCursos" value="<?php echo $row['idCursos']; ?>" />
                                                  <button class="mult_submit" type="submit" name="submit_mult" value="Borrar" title="Borrar">
                                                    <a class="btn"  data-toggle="tooltip" title="Eliminar">
                                                      <i class="fa fa-2x fa-trash"></i>
                                                    </a>
                                                  </button>
                                                </form>
                                              </div>


                                              <div align="center">
                                                <form action="borrar.php" method="post">
                                                  <input type="hidden" name="idCursos" value="<?php echo $row['idCursos']; ?>" />
                                                  
                                                    <a class="btn"  title="Editar" data-toggle="modal" data-target="#editModal" data-backdrop="static" data-keyboard="false">
                                                  <i class="fa fa-2x fa-edit" ></i>
                                                    </a>
                                                </form>
                                              </div>
                                              </td>  
                                              <td>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="">Activo</label>
                                                </div>
                                              </td>                 
                                          </tr>
                                         <?php } ?>
                                          

                                      </tbody>
                                      <tfoot>
                                          
                                      </tfoot>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- end section  -->

      <!-- Modal agregar-->
      <div id="agregarP" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="background-color: #009fe3;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" >Agregar Nuevo Taller o Ponencia</h4>
            </div>
            <div class="modal-body">
              <form action="conection/insertaTallerPonencia.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label>Título</label>
          <input type="text" class="form-control" id="titulo" name="titulo"  placeholder="Título">    
        </div>
        <div class="form-group">
          <label>Nombre expositor</label>
          <input type="text" class="form-control" id="nombreXpo" name="nombreXpo"  placeholder="Nombre expositor">    
        </div>
        <div class="form-group">
          <label>Fecha de inicio</label>
          <input type="date" class="form-control" id="fechInic" name="fechInic"  placeholder="00/00/0000">    
        </div>
        <div class="form-group">
          <label>Fecha de Fin</label>
          <input type="date" class="form-control" id="fechFin" name="fechFin" placeholder="00/00/0000">    
        </div>
        <div class="form-group">
          <label>Hora de inicio</label>
            <input type="time" class="form-control" id="horaCurso" name="horaCurso"  placeholder="00:00">    
        </div>
        <div class="form-group">
          <label>Duración</label>
          <input type="time" class="form-control" id="duracionCurso" name="duracionCurso"  placeholder="00:00">    
        </div>
        <div class="form-group">
          <label for="exampleSelect1">Tipo</label>
          <select class="form-control" id="tipoCurso" name="tipoCurso">
            <option value="Taller">Taller</option>
            <option value="Ponencia">Ponencia</option>      
          </select>
        </div>    
        <div class="form-group">
          <label for="exampleTextarea">Resumen</label>
          <textarea class="form-control" id="resumenCurso" name="resumenCurso" rows="3"></textarea>
        </div>
        <div class="file-loading">
          <label >Foto expositor</label>
          <input type="file" class="form-control-file" id="fotoExpositor" name="fotoExpositor[]" aria-describedby="fileHelp" multiple >
          <small id="fileHelp" class="form-text text-muted">preferentemente subir imagenes de 320x480 con extensión "jpg"</small>
           <div id="file-errors"></div>
        </div>  
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input">
            Activo
          </label>
        </div>
        <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-success" >Agregar</button>
            </div>
            </form>
            </div>
            
          </div>

        </div>
      </div>
      <!-- /modal -->
      <!-- Modal edit -->
      <div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="background-color: #009fe3;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" >Editar Taller o Ponencia</h4>
            </div>

            <?php 
              include"conection/conection.php";
              $conn= @mysql_connect($hostname,$username,$password) or die ("Problemas en al conectarse con el servidor");

              $db=@mysql_select_db('ponencia',$conn)or die("Problemas en al conectarse con la base");

              $conn = mysql_query("SELECT * FROM cursos where idCursos=".$_POST['idCursos'],$conn);

            ?>

            <div class="modal-body">
              <form class="form" id="actualizaCurso" >
                <div class="form-group">
                <?php if($row=mysql_fetch_array($conn)){?>
                  <label>Título</label>
                  <input type="text" class="form-control" id="tituloEdit" name="tituloEdit"
                  value="<?php echo $row['tituloTallerPonencia']; ?>" >    
              </div>
              <div class="form-group">
                  <label>Nombre expositor</label>
                  <input type="text" class="form-control" id="nombreXpoEdit" name="nombreXpoEdit" value="<?php echo $row['nombreExpositor']; ?>" >    
              </div>
              <div class="form-group">
                  <label>Fecha de inicio</label>
                  <input type="date" class="form-control" id="fechInicEdit" name="fechInicEdit" value="<?php echo $row['fechaInicio']; ?>" >    
              </div>
              <div class="form-group">
                  <label>Fecha de Fin</label>
                  <input type="date" class="form-control" id="fechFinEdit" name="fechFinEdit" value="<?php echo $row['fechaFin']; ?>" >    
              </div>
              <div class="form-group">
                  <label>Hora de inicio</label>
                  <input type="time" class="form-control" id="horaCursoEdit" name="horaCursoEdit"  value="<?php echo $row['hora']; ?>" >    
              </div>
              <div class="form-group">
                  <label>Duración</label>
                  <input type="time" class="form-con trol" id="horaCursoEdit" name="horaCursoEdit"  value="<?php echo $row['duracion']; ?>" >    
              </div>
              <div class="form-group">
                  <label for="exampleSelect1">Tipo</label>
                  <select class="form-control" id="tipoCursoEdit" name="tipoCursoEdit" value="<?php echo $row['tipo']; ?>" >
                    <option value="Taller">Taller</option>
                    <option value="Ponencia">Ponencia</option>      
                </select>
            </div>    
            <div class="form-group">
              <label for="exampleTextarea">Resumen</label>
              <textarea class="form-control" id="resumenCursoEdit" name="resumenCursoEdit" rows="3" value="<?php echo $row['resumen']; ?>" ></textarea>
          </div>
          <div class="form-group">
              <label for="exampleInputFile">Foto expositor</label>
              <input type="file" class="form-control-file" id="fotoExpositorEdit" name="fotoExpositorEdit" aria-describedby="fileHelp">
              <small id="fileHelp" class="form-text text-muted">preferentemente subir imagenes de 320x480 con extensión "jpg"</small>
          </div>  
          <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" >
                Activo
            </label>
        </div>
        <?php } ?>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success" id="btnActualiza"  >Actualizar</button>
      </div>
      </form>
      </div>

          </div>

        </div>
      </div>
      <!-- /modal edit -->

      <!-- Footer -->
      <?php include 'footer.php' ?>


      <script type="text/javascript">
          $(document).ready(function() {
              $('#cursosAdmin').DataTable( {
                  "language": {
                      "sProcessing":     "Procesando...",
                      "sLengthMenu":     "Mostrar _MENU_ registros",
                      "sZeroRecords":    "No se encontraron resultados",
                      "sEmptyTable":     "Ningún dato disponible en esta tabla",
                      "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                      "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                      "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                      "sInfoPostFix":    "",
                      "sSearch":         "Buscar:",
                      "sUrl":            "",
                      "sInfoThousands":  ",",
                      "sLoadingRecords": "Cargando...",
                      "oPaginate": {
                          "sFirst":    "Primero",
                          "sLast":     "Último",
                          "sNext":     "Siguiente",
                          "sPrevious": "Anterior"
                      },
                      "oAria": {
                          "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                          "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                      }
                  }
              } );  
              $('[data-toggle="tooltip"]').tooltip();
              $("#fotoExpositor").fileinput({
              showPreview: false,
              showUpload: false,
              elErrorContainer: '#file-errors',
              allowedFileExtensions: ["jpg", "png", "gif"]
              uploadUrl: '/img/ponentes'
          });        
          } );
      </script>
      </body>
      </html>