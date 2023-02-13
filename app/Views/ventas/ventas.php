<main class="app-content">
    <div class="app-title">
        <div>
            <h1><?= $page_title ?></h1>
            <p><?= $page_description ?></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i><a href="/Dashboard"> Home </a></li>
            <li class="breadcrumb-item"><?= $page_title ?></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-info" title="AGREGAR SERVICIOS" 
                            data-toggle="modal" data-target="#mdlViewServicios">
                                <i class="fa fa-cart-plus" aria-hidden="true"> Agregar</i>
                            </button>
                            <button type="button" class="btn btn-danger" id="btnCanVen" title="CANCELAR VENTA">
                                <i class="fa fa-times-circle" aria-hidden="true"> Cancelar</i>
                            </button>
                            <button type="button" class="btn btn-success" id="btnCobVen" title="REALIZAR VENTA">
                                <i class="fa fa-credit-card" aria-hidden="true"> Cobrar</i>
                            </button>
                        </div> <br>
                        <table class="table table-hover table-bordered" id="tableVenCaj">
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Cantidad</th>
                                    <th>Total</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                        <br>
                        <div class="bs-component">
                            <h1 id="totalVenta">TOTAL: $0</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>