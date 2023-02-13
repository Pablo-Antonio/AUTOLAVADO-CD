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
                        <div class="col-lg-12">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" id="btnReaRep" title="REALIZAR CORTE">
                                <i class="fa fa-list-alt" aria-hidden="true"> Realizar Reporte</i>
                            </button>
                            <button type="button" class="btn btn-info" id="btnImpRep" title="IMPRIMIR CORTE">
                                <i class="fa fa-file-pdf-o" aria-hidden="true"> Imprimir</i>
                            </button>
                            <button type="button" class="btn btn-danger" id="btnLimRep" title="LIMPIAR CORTE">
                                <i class="fa fa-eraser" aria-hidden="true"> Limpiar</i>
                            </button>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="form-control-label">DE: </label>
                                <input class="form-control is-invalid" type="date" id="dateFrom">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="form-control-label">HASTA: </label>
                                <input class="form-control is-invalid" type="date" id="dateTo">
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="mx-auto">
                                <h4>REPORTE DE VENTAS</h4>
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="control-label col-md-3"><strong>Corte: </strong></label>
                                        <div class="col-md-4">
                                            <p id="viewFechaHoraRep"></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3"><strong>Cajero: </strong></label>
                                        <div class="col-md-8">
                                            <p id="viewCajeroRep"></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3"><strong>De: </strong></label>
                                        <div class="col-md-8">
                                            <p id="viewFechaDe"></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3"><strong>Hasta: </strong></label>
                                        <div class="col-md-8">
                                            <p id="viewFechaHasta"></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3"><strong>No. Ventas: </strong></label>
                                        <div class="col-md-8">
                                            <p id="viewCantidadRep"></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3"><strong>Total: </strong></label>
                                        <div class="col-md-8">
                                            <p id="viewTotalRep"></p>
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