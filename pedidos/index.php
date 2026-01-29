<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Pedidos 2026</title>
</head>

<body>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarModal" id="btnNuevoPedido">
        Nuevo
    </button>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editarModalID" id="btnEditarPedido">
        editar Pedido
    </button>
    <table>
        <thead>
            <tr>
                <td>Fecha</td>
                <td>Cliente</td>
                <td>Dirección</td>
                <td>Contrato </td>
                <td>Detalles</td>
            </tr>
        </thead>
        <tbody id="pedidosPendintes">

        </tbody>
    </table>

    <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>


    <script src="../Pedidos/js/app.js"></script>

    <!-- Modal Agregar -->
    <div class="modal fade" id="agregarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Información Pedido</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="Cliente">Cliente</label>
                            <Select id="cliente">

                            </Select>
                        </div>
                        <div class="form-group" id="productos">
                        </div>
                        <button type="button" class="btn btn-info" id="btnAgregar">+ Agregar producto</button>
                        <div class="form-group">

                            <label>Estado</label>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estado" id="entregado" value="E" disabled>
                                <label class="form-check-label" for="entregado">Entregado</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estado" id="Pendiente" value="P" checked disabled>
                                <label class="form-check-label" for="pendiente">Pendiente</label>
                            </div>
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btnGuardar">Guardar</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal id pedido -->
    <div class="modal fade" id="editarModalID" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edtiar Pedido</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group" id="productos">
                        </div>
                        <input type="text" id="id_pedido" placeholder="Ingrese el ID de su pedido">
                        </form>
                </div>

                  <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary"  data-dismiss ="modal" data-toggle="modal" data-target="#editarModal">Editar Pedido</button>
            </div>
                
            </div>
          
        </div>
    </div>
    </div>

    <!-- Modal modificar -->
    <div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edtiar Información Pedido</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="Cliente">Cliente</label>
                            <Select id="cliente">

                            </Select>
                        </div>
                        <div class="form-group" id="productos">
                        </div>
                        <button type="button" class="btn btn-info" id="btnAgregar">+ Agregar producto</button>
                        <div class="form-group">

                            <label>Estado</label>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estado" id="entregado" value="E">
                                <label class="form-check-label" for="entregado">Entregado</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estado" id="Pendiente" value="P" checked>
                                <label class="form-check-label" for="pendiente">Pendiente</label>
                            </div>
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btnEditar">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</body>




</html>