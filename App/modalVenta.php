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
                            <option value="Efectivo">Efectivo</option>
                            <option value="Tarjeta">Tarjeta</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="total">Total</label>
                        <input type="text" id="total" name="total" class="form-control" />
                    </div>
                    <input type="hidden" name="id_venta" id="id_venta" value="" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>
