<div class="modal fade" id="modalVenta" data-fecha="" tabindex="-1" aria-labelledby="modalVentaTitulo" aria-hidden="true">
    <div class="modal-dialog">
        <form id="formStatus" action="../Accion/crearVenta.php" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title"><h5 id="modalVentaTitulo">Agregar venta</h5> <span id="modalVentaFecha"></span> </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label" for="cantidad">Cantidad</label>
                        <div class="input-group">
                            <input type="text" id="cantidad" name="cantidad" class="form-control" />
                            <div class="input-group-text">$</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="tipoPago">Tipo de Pago</label>
                        <select id="tipoPago" class="form-control" name="tipoPago">
                            <option>Efectivo</option>
                            <option>Tarjeta</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="total">Total</label>
                        <input type="text" id="total" name="total" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    const modalVenta = document.getElementById('modalVenta')
    const modalTituloFecha = document.getElementById('modalVentaFecha')
    modalVenta.addEventListener('show.bs.modal', function () {
        const hoy = new Date();
        const fecha = `${hoy.getFullYear()}-${hoy.getMonth()+1}-${hoy.getDate()}`
        const hora = `${hoy.getHours()}:${hoy.getMinutes()}`
        modalTituloFecha.innerText = modalVenta.dataset.fecha ||  `${fecha} ${hora}`
    })
</script>