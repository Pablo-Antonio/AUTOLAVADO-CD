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
        <div class="col-md-6 col-lg-3">
            <div class="widget-small info coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                    <h4>cajeros vigentes</h4>
                    <p><b id="usrVig">0</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small info coloured-icon"><i class="icon fa fa-car fa-3x"></i>
                <div class="info">
                    <h4>Servicios Vigentes</h4>
                    <p><b id="serVig">0</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small warning coloured-icon"><i class="icon fa fa-shopping-cart fa-3x"></i>
                <div class="info">
                    <h4>ventas del dia</h4>
                    <p><b id="ventas">0</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class="icon fa fa-money fa-3x"></i>
                <div class="info">
                    <h4>ingresos del dia</h4>
                    <p><b id="ingresos">0</b></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">Top 10 Servicios Más Vendidos</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <canvas class="embed-responsive-item" id="top10"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title" id="tittleVentasMes"></h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <canvas class="embed-responsive-item" id="ventasMes"></canvas>
                </div>
            </div>
        </div>
    </div>
</main>