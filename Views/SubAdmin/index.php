<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <div>
            <h1>Inició</h1>
        </div>
        <form method="post" action="?in=informe">
            <div>
                <input type="submit" class="btn btn-danger m-1" name="insumo" value="Informe de insumos">
                <input type="submit" class="btn btn-danger m-1" name="producto" value="Informe de productos">
                <input type="submit" class="btn btn-danger m-1" name="proveedor" value="Informe de proveedores"> <br>
                <input type="submit" class="btn btn-danger m-1" name="iproductofinal" value="Informe de insumo producto final">
            </div>
            <div>
                <select name="tiempo" id="" class="form-control m-1">
                    <option disabled selected>Escoge el tiempo del informe</option>
                    <option value="1">día</option>
                    <option value="2">Semana</option>
                    <option value="3">Mes</option>
                </select>
            </div>
        </form>
    </div>
</div>