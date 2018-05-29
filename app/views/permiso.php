<?php
    require 'header.php';
?>
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Permiso
        <small>Listado</small>
      </h1>
    </section>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h1 class="box-title">
                            Permiso
                            <button id="btnAgregar" class="btn btn-success" onclick="mostrarForm(true)"><i class="fa fa-plus-circle"></i> Agregar</button>
                        </h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>

                    <div class="panel-body table-responsive" id="listadoRegistros">
                        <table id="tblListado" class="table table-hover table-bordered table-condensed table-striped">
                            <thead>
                                <th>Nombre</th>
                            </thead>
                            <tbody></tbody>
                            <tfoot>
                                <th>Nombre</th>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
    require 'footer.php';
?>

<script src="scripts/permiso.js"></script>