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
                    <div>
                        <div class="form-group">
                            <button class="btn btn-info" type="submit" id="btnBusTick" title="BUSCAR TICKET"><i class="fa fa-search"></i> Buscar</button>
                            <!--<button class="btn btn-success" type="submit" id="btnImpTic" title="IMPRIMIR TICKET"><i class="fa fa-file"></i> Imprimir</button>
                            <button class="btn btn-danger" type="submit" id="btnCanTic" title="CANCELAR OPERACION"><i class="fa fa-times-circle"></i> Cancelar</button>-->
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label class="control-label">Folio Ticket: </label>
                                <input class="form-control is-invalid" type="text" 
                                id="ticket" name="ticket" placeholder="Ingrese Folio">
                                <div class="form-control-feedback text-danger" id="valTicket"> *Campo Requerido </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>