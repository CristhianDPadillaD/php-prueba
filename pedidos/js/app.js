
$(document).ready(function () {

    fetchPedidos();
    agregarBtn();
    let contadorProductos;
    let idPedido;

    function fetchPedidos() {
        $.ajax({
            url: './api/listarPedidos.php',
            type: 'GET',
            success: function (response) {
                let pedidos = JSON.parse(response);
                let template = '';
                pedidos.forEach(pedido => {

                    template += `
                    <tr>
                    <td> ${pedido.fec_ped}</td>
                    <td>${pedido.nom_cli} </td>
                    <td> ${pedido.nom_dir}</td>
                    <td> ${pedido.num_con}</td>
                    <td> ${pedido.cantidad}</td>
                    </tr>
                    `
                });
                $('#pedidosPendintes').html(template);
            },
        });
    }


    $(document).on('click', '#btnNuevoPedido', function () {
        $.ajax({
            url: './api/listarClientes.php',
            type: 'GET',
            success: function (response) {
                //console.log(response);
                let clientes = JSON.parse(response);
                let template = '';
                clientes.forEach(cliente => {
                    template += `
                    <option value="${cliente.id_cli}">${cliente.nom_cli}</option>
                    `
                });
                $('#cliente').html(template);
            }
        });


    });

    $.ajax({
        url: './api/listarProductos.php',
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            contadorProductos = response.total;

        }
    });

    function agregarBtn() {
        $(document).on('click', '#btnAgregar', function () {

            contadorProductos++;

            $('#productos').append(`
        <div class="d-flex mb-2" id="producto${contadorProductos}">

            <input 
                type="text"
                name="productos[]"
                class="form-control mr-2"
                placeholder="Ingrese su producto"
                required
            >

            <button 
                type="button"
                class="btn btn-danger btnEliminar"
                onclick = "$('#producto${contadorProductos}').remove()">
                X
            </button>

        </div>
    `);

        });
    }


    $(document).on('click', '#btnGuardar', function () {

        let postData = {
            id_cliente: $('#cliente').val(),
            Estado: $('#Pendiente').val(),
            productos: $('input[name="productos[]"]').map(function () {
                return $(this).val();
            }).get()

        };
        console.log(postData);

        $.post('./api/crearPedido.php', postData, function (response) {
            console.log(response)
        })
    });

    $('#editModalID').on('click', function(){
        idPedido = $('#id_pedido').val();

        if (!idPedido ){
            alert ("Porfavor ingrese, un ID")
            return;
        }

        $('#editarModalID').modal('hide');

        setTimeout(function(){
            $('#editModa').modal('show');
        },400);

    });



});