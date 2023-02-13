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

                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" id="btnReaCorte" title="REALIZAR CORTE">
                                <i class="fa fa-list-alt" aria-hidden="true"> Realizar Corte</i>
                            </button>
                            <button type="button" class="btn btn-info" id="btnImpCorte" title="IMPRIMIR CORTE">
                                <i class="fa fa-file-pdf-o" aria-hidden="true"> Imprimir</i>
                            </button>
                            <button type="button" class="btn btn-danger" id="btnLimCorte" title="LIMPIAR CORTE">
                                <i class="fa fa-eraser" aria-hidden="true"> Limpiar</i>
                            </button>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="form-control-label">SELECCIONA UNA FECHA</label>
                                <input class="form-control is-invalid" type="date" id="dateCorte">
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="mx-auto">
                                <h4>CORTE DE CAJA</h4>
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="control-label col-md-3"><strong>Corte: </strong></label>
                                        <div class="col-md-4">
                                            <p id="viewFechaHora"></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3"><strong>Cajero: </strong></label>
                                        <div class="col-md-8">
                                            <p id="viewCajero"></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3"><strong>Fecha: </strong></label>
                                        <div class="col-md-8">
                                            <p id="viewFechaCorte"></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3"><strong>No. Ventas: </strong></label>
                                        <div class="col-md-8">
                                            <p id="viewCantidad"></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3"><strong>Total: </strong></label>
                                        <div class="col-md-8">
                                            <p id="viewTotal"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>