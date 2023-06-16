<?php
$url = "http://localhost/fullstack/apirest-MIguelSilva/controllers/clientes.php?op=getAll";
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$output = json_decode(curl_exec($curl));

?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Datos de Clientes</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Constructora</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($output as $out => $val){
                ?>
                <tr>
                    <td><?php echo $val->nombre; ?></td>
                    <td><?php echo $val->constructora_id; ?></td>
                    <td><?php echo $val->direccion; ?></td>
                    <td><?php echo $val->telefono; ?></td>
                </tr>
                <?php }?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>