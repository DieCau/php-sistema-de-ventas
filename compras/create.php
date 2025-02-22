<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');

include('../app/controllers/almacen/listado_de_productos.php');
include('../app/controllers/proveedores/listado_de_proveedores.php');
include('../app/controllers/compras/listado_de_compras.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Registro Nueva Compra</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->


  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Llene los datos con cuidado</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                  </div>

                </div>

                <div class="card-body" style="display: block;">
                  <div style="display: flex">
                    <h5>Datos de Producto</h5>
                    <div style="width: 20px"></div>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                      data-target="#modal-buscar_producto">
                      <i class="bi bi-search mr-1"></i>
                      Buscar producto
                    </button>
                    <!-- modal para visualizar datos de los Productos -->
                    <div class="modal fade" id="modal-buscar_producto">
                      <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color: #007bff;color: white">
                            <h4 class="modal-title">Busqueda Producto</h4>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="table table-responsive">
                              <table id="example1" class="table table-bordered table-striped table-sm text-center fw-light table-hover">
                                <thead>
                                  <tr>
                                    <th>Nro</th>
                                    <th>Seleccionar</th>
                                    <th>Cod</th>
                                    <th>Categoria</th>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Stock</th>
                                    <th>Precio Compra</th>
                                    <th>Precio Venta</th>
                                    <th>Fecha Compra</th>
                                    <th>Usuario</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $contador = 0;
                                  foreach ($productos_datos as $productos_dato) {
                                    $id_producto = $productos_dato['id_producto']; ?>
                                    <tr>
                                      <td><?php echo $contador = ++$contador; ?></td>
                                      <td>
                                        <button class="btn btn-info btn-sm" id="btn_selecionar<?php echo $id_producto; ?>">
                                          Seleccionar
                                        </button>
                                        <script>
                                          $('#btn_selecionar<?php echo $id_producto; ?>').click(function() {


                                            var id_producto = "<?php echo $productos_dato['id_producto']; ?>";
                                            $('#id_producto').val(id_producto);

                                            var codigo = "<?php echo $productos_dato['codigo']; ?>";
                                            $('#codigo').val(codigo);

                                            var categoria = "<?php echo $productos_dato['categoria']; ?>";
                                            $('#categoria').val(categoria);

                                            var nombre = "<?php echo $productos_dato['nombre']; ?>";
                                            $('#nombre_producto').val(nombre);

                                            var email = "<?php echo $productos_dato['email']; ?>";
                                            $('#usuario_producto').val(email);

                                            var descripcion = "<?php echo $productos_dato['descripcion']; ?>";
                                            $('#descripcio_producto').val(descripcion);

                                            var stock = "<?php echo $productos_dato['stock']; ?>";
                                            $('#stock').val(stock);
                                            $('#stock_actual').val(stock);

                                            var stock_minimo = "<?php echo $productos_dato['stock_minimo']; ?>";
                                            $('#stock_minimo').val(stock_minimo);

                                            var stock_maximo = "<?php echo $productos_dato['stock_maximo']; ?>";
                                            $('#stock_maximo').val(stock_maximo);

                                            var precio_compra = "<?php echo $productos_dato['precio_compra']; ?>";
                                            $('#precio_compra').val(precio_compra);

                                            var precio_venta = "<?php echo $productos_dato['precio_venta']; ?>";
                                            $('#precio_venta').val(precio_venta);

                                            var fecha_ingreso = "<?php echo $productos_dato['fecha_ingreso']; ?>";
                                            $('#fecha_ingreso').val(fecha_ingreso);

                                            var ruta_img = "<?php echo $URL . '/almacen/img_productos/' . $productos_dato['imagen']; ?>";
                                            $('#img_producto').attr({
                                              src: ruta_img
                                            });

                                            $('#modal-buscar_producto').modal('toggle');

                                          });
                                        </script>
                                      </td>
                                      <td><?php echo $productos_dato['codigo']; ?></td>
                                      <td><?php echo $productos_dato['categoria']; ?></td>
                                      <td>
                                        <img src="<?php echo $URL . "/almacen/img_productos/" . $productos_dato['imagen']; ?>" width="40px" alt="asdf">
                                      </td>
                                      <td><?php echo $productos_dato['nombre']; ?></td>
                                      <td><?php echo $productos_dato['descripcion']; ?></td>
                                      <td><?php echo $productos_dato['stock']; ?></td>
                                      <td><?php echo $productos_dato['precio_compra']; ?></td>
                                      <td><?php echo $productos_dato['precio_venta']; ?></td>
                                      <td><?php echo $productos_dato['fecha_ingreso']; ?></td>
                                      <td><?php echo $productos_dato['email']; ?></td>
                                    </tr>
                                  <?php
                                  }
                                  ?>
                                </tbody>
                                </tfoot>
                              </table>
                            </div>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                  </div>

                  <hr>
                  <div class="row" style="font-size: 12px">
                    <div class="col-md-9">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <input type="text" id="id_producto" hidden>
                            <label for="">Codigo</label>
                            <input type="text" class="form-control" id="codigo" disabled>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="">Categoria</label>
                            <div style="display: flex">
                              <input type="text" class="form-control" id="categoria" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="">Nombre Producto</label>
                            <input type="text" name="nombre" id="nombre_producto" class="form-control" disabled>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="">Usuario</label>
                            <input type="text" class="form-control" id="usuario_producto" disabled>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="form-group">
                            <label for="">Descripcion Producto</label>
                            <textarea name="descripcion" id="descripcio_producto" cols="30" rows="2" class="form-control" disabled></textarea>
                          </div>
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="">Stock</label>
                            <input type="number" name="stock" id="stock" class="form-control" style="background-color: #fff819" disabled>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="">Stock Mínimo</label>
                            <input type="number" name="stock_minimo" id="stock_minimo" class="form-control" disabled>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="">Stock Máximo</label>
                            <input type="number" name="stock_maximo" id="stock_maximo" class="form-control" disabled>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="">Precio Compra</label>
                            <input type="number" name="precio_compra" id="precio_compra" class="form-control" disabled>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="">Precio Venta</label>
                            <input type="number" name="precio_venta" id="precio_venta" class="form-control" disabled>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="">Fecha de Ingreso</label>
                            <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="form-control" disabled>
                          </div>
                        </div>
                      </div>


                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="">Imagen Producto</label>
                        <center>
                          <img src="<?php echo $URL . "/almacen/img_productos/" . $imagen; ?>" id="img_producto" width="50%" alt="">
                        </center>
                      </div>
                    </div>
                  </div>

                  <hr>
                  <div style="display: flex">
                    <h5>Datos de Proveedor</h5>
                    <div style="width: 20px"></div>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                      data-target="#modal-buscar_proveedor">
                      <i class="bi bi-search mr-1"></i>
                      Buscar Proveedor
                    </button>
                    <!-- modal para visualizar datos de los proveedor -->
                    <div class="modal fade" id="modal-buscar_proveedor">
                      <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color: #007bff;color: white">
                            <h4 class="modal-title">Busqueda de Proveedor</h4>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="table table-responsive">
                              <table id="example2" class="table table-bordered table-striped table-sm text-center table-hover">
                                <thead>
                                  <tr>
                                    <th>Nro</th>
                                    <th>Seleccionar</th>
                                    <th>Nombre Proveedor</th>
                                    <th>Celular</th>
                                    <th>Telefono</th>
                                    <th>Empresa</th>
                                    <th>E-mail</th>
                                    <th>Direccion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $contador = 0;
                                  foreach ($proveedores_datos as $proveedores_dato) {
                                    $id_proveedor = $proveedores_dato['id_proveedor'];
                                    $nombre_proveedor = $proveedores_dato['nombre_proveedor']; ?>
                                    <tr>
                                      <td>
                                        <?php echo $contador = ++$contador; ?>
                                      </td>
                                      <td>
                                        <button class="btn btn-info btn-sm" id="btn_selecionar_proveedor<?php echo $id_proveedor; ?>">
                                          Seleccionar
                                        </button>
                                        <script>
                                          $('#btn_selecionar_proveedor<?php echo $id_proveedor; ?>').click(function() {

                                            var id_proveedor = '<?php echo $id_proveedor; ?>';
                                            $('#id_proveedor').val(id_proveedor);

                                            var nombre_proveedor = '<?php echo $nombre_proveedor; ?>';
                                            $('#nombre_proveedor').val(nombre_proveedor);

                                            var celular_proveedor = '<?php echo $proveedores_dato['celular']; ?>';
                                            $('#celular').val(celular_proveedor);

                                            var telefono_proveedor = '<?php echo $proveedores_dato['telefono']; ?>';
                                            $('#telefono').val(telefono_proveedor);

                                            var empresa_proveedor = '<?php echo $proveedores_dato['empresa']; ?>';
                                            $('#empresa').val(empresa_proveedor);

                                            var email_proveedor = '<?php echo $proveedores_dato['email']; ?>';
                                            $('#email').val(email_proveedor);

                                            var direccion_proveedor = '<?php echo $proveedores_dato['direccion']; ?>';
                                            $('#direccion').val(direccion_proveedor);

                                            $('#modal-buscar_proveedor').modal('toggle');

                                          });
                                        </script>
                                      </td>
                                      <td><?php echo $nombre_proveedor; ?></td>
                                      <td>
                                        <a href="https://wa.me/+54<?php echo $proveedores_dato['celular']; ?>" target="_blank" class="btn btn-success btn-sm">
                                          <i class="bi bi-whatsapp"></i>
                                          <?php echo $proveedores_dato['celular']; ?>
                                        </a>
                                      </td>
                                      <td><?php echo $proveedores_dato['telefono']; ?></td>
                                      <td><?php echo $proveedores_dato['empresa']; ?></td>
                                      <td><?php echo $proveedores_dato['email']; ?></td>
                                      <td><?php echo $proveedores_dato['direccion']; ?></td>
                                    </tr>
                                  <?php
                                  }
                                  ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                  </div>

                  <hr>

                  <div class="container-fluid" style="font-size: 12px">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <input type="text" id="id_proveedor" hidden>
                          <label for="">Nombre de Proveedor</label>
                          <input type="text" id="nombre_proveedor" class="form-control" disabled>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">Tel Celular</label>
                          <input type="number" id="celular" class="form-control" disabled>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">Tel Fijo</label>
                          <input type="number" id="telefono" class="form-control" disabled>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">Empresa</label>
                          <input type="text" id="empresa" class="form-control" disabled>

                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">Email</label>
                          <input type="email" id="email" class="form-control" disabled>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">Direccion</label>
                          <textarea name="" id="direccion" cols="30" rows="3" class="form-control" disabled></textarea>
                        </div>
                      </div>
                    </div>

                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">

          <div class="row">
            <div class="col-md-12">
              <div class="card card-outline card-primary">
                <div class="card-header">
                  <h3 class="card-title">Detalle de la Compra</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>

                </div>

                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <?php
                        $contador_de_compras = 1;
                        foreach ($compras_datos as $compras_dato) {
                          $contador_de_compras = $contador_de_compras++;
                        }
                        ?>
                        <label for="">Número de la compra</label>
                        <input type="text" value="<?php echo $contador_de_compras; ?>" style="text-align: center" class="form-control" disabled>
                        <input type="text" value="<?php echo $contador_de_compras; ?>" id="nro_compra" hidden>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Fecha de Compra</label>
                        <input type="date" class="form-control" id="fecha_compra">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Comprobante de Compra</label>
                        <input type="text" class="form-control" id="comprobante">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Precio de Compra</label>
                        <input type="text" class="form-control" id="precio_compra_controlador">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Stock Actual</label>
                        <input type="text" style="background-color: #fff819;text-align: center" id="stock_actual" class="form-control" disabled>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Stock Total</label>
                        <input type="text" style="text-align: center" id="stock_total" class="form-control" disabled>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Cantidad de la Compra</label>
                        <input type="number" id="cantidad_compra" style="text-align: center" class="form-control">
                      </div>
                      <script>
                        $('#cantidad_compra').keyup(function() {
                          //alert('estamos presionando el input');
                          var stock_actual = $('#stock_actual').val();
                          var stock_compra = $('#cantidad_compra').val();

                          var total = parseInt(stock_actual) + parseInt(stock_compra);
                          $('#stock_total').val(total);

                        });
                      </script>
                    </div>


                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Usuario</label>
                        <input type="text" class="form-control" value="<?php echo $email_sesion; ?>" disabled>
                      </div>
                    </div>
                  </div>
                  <hr>

                  <div class="col-md-12">
                    <div class="form-group">
                      <button class="btn btn-primary btn-block" id="btn_guardar_compra"><i class="bi bi-cart-plus mr-2"></i>Guardar Compra</button>
                    </div>
                  </div>
                  <script>
                    $('#btn_guardar_compra').click(function() {

                      var id_producto = $('#id_producto').val();
                      var nro_compra = $('#nro_compra').val();
                      var fecha_compra = $('#fecha_compra').val();
                      var id_proveedor = $('#id_proveedor').val();
                      var comprobante = $('#comprobante').val();
                      var id_usuario = '<?php echo $id_usuario_sesion; ?>';
                      var precio_compra = $('#precio_compra_controlador').val();
                      var cantidad_compra = $('#cantidad_compra').val();

                      var stock_total = $('#stock_total').val();

                      if (id_producto == "") {
                        $('#id_producto').focus();
                        alert("Debe llenar todos los campos");
                      } else if (fecha_compra == "") {
                        $('#fecha_compra').focus();
                        alert("Debe llenar todos los campos");
                      } else if (comprobante == "") {
                        $('#comprobante').focus();
                        alert("Debe llenar todos los campos");
                      } else if (precio_compra == "") {
                        $('#precio_compra_controlador').focus();
                        alert("Debe llenar todos los campos");
                      } else if (cantidad_compra == "") {
                        $('#cantidad_compra').focus();
                        alert("Debe llenar todos los campos");
                      } else {
                        var url = "../app/controllers/compras/create.php";
                        $.get(url, {
                          id_producto: id_producto,
                          nro_compra: nro_compra,
                          fecha_compra: fecha_compra,
                          id_proveedor: id_proveedor,
                          comprobante: comprobante,
                          id_usuario: id_usuario,
                          precio_compra: precio_compra,
                          cantidad_compra: cantidad_compra,
                          stock_total: stock_total
                        }, function(datos) {
                          $('#respuesta_create').html(datos);
                        });
                      }

                    });
                  </script>
                </div>

              </div>

            </div>

            <div id="respuesta_create"></div>

          </div>


        </div>
      </div>

      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('../layout/mensajes.php'); ?>
<?php include('../layout/parte2.php'); ?>



<script>
  $(function() {
    $("#example1").DataTable({
      "pageLength": 5,
      "language": {
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Productos",
        "infoEmpty": "Mostrando 0 a 0 de 0 Productos",
        "infoFiltered": "(Filtrado de _MAX_ total Productos)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Productos",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscador:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
          "first": "Primero",
          "last": "Ultimo",
          "next": "Siguiente",
          "previous": "Anterior"
        }
      },
      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,

    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });


  $(function() {
    $("#example2").DataTable({
      "pageLength": 5,
      "language": {
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Proveedores",
        "infoEmpty": "Mostrando 0 a 0 de 0 Proveedores",
        "infoFiltered": "(Filtrado de _MAX_ total Proveedores)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Proveedores",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscador:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
          "first": "Primero",
          "last": "Ultimo",
          "next": "Siguiente",
          "previous": "Anterior"
        }
      },
      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,

    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>