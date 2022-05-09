<?php include_once 'sesiones.php'; ?>
<?php include_once 'templates/principalsinanim.php';?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- daterange picker -->
<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- Select2 -->
<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<!-- Bootstrap4 Duallistbox -->
<link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
<!-- BS Stepper -->
<link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
<!-- dropzonejs -->
<link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">

<?php
try {
   require_once('../include/funciones/bd_conexion.php');
   $sql = "SELECT * FROM maestros";
   $sql1 = "SELECT * FROM alumnos";
   $sql2 = "SELECT * FROM clasesibem";
   $sql3 = "SELECT a.asignacion_id as Asignacion, b.nombre as Maestro, c.nombre as Alumno, d.nombre as Clase FROM asignacion_clases a inner join maestros b on a.maestro_id = b.maestro_id inner join alumnos c on a.alumno_id = c.alumno_id inner join clasesibem d on a.clase_id = d.clase_id";
   $resultado = $conn->query($sql);
   $resultado1 = $conn->query($sql1);
   $resultado2 = $conn->query($sql2);
   $resultado3 = $conn->query($sql3);
} catch (\Exception $e) {
  echo $e->getMessage();
}

 ?>

 <div class="col-md-6" style="margin-left: 280px; margin-top: 100px;" >
   <!-- /.card-header -->
   <!-- form start -->
   <div class="col-md-12">
     <!-- jquery validation -->
     <div class="card card-light">
       <div class="card-header">
         <h3 class="card-title">Asignacion de clases</h3>
       </div>


 <form role="form" name="asignacion" id="asignacion" method="post" action="insertar-admin.php">
   <div class="card-body">
     <div class="row">
       <div class="col-md-4">
         <div class="form-group">
           <label>Seleccione al Maestro:</label>
           <select class="form-control select2bs4" style="width: 100%;">
             <?php while ($maestros = $resultado->fetch_assoc()) { ?>
             <option value="<?php echo $maestros['maestro_id']; ?>"><?php echo $maestros['nombre'] ?></option>
             <?php } ?>
           </select>
         </div>
       </div>


       <div class="col-md-4">
         <div class="form-group">
           <label>Seleccione al Alumno:</label>
           <select class="form-control select2bs4" style="width: 100%;">
             <?php while ($alumnos = $resultado1->fetch_assoc()) { ?>
             <option value="<?php echo $alumnos['alumno_id'] ?>"><?php echo $alumnos['nombre'] ?></option>
             <?php } ?>
           </select>
         </div>
     </div>

     <div class="col-md-4">
       <div class="form-group">
         <label>Seleccione la clase:</label>
         <select class="form-control select2bs4" style="width: 100%;">
           <?php while ($clase = $resultado2->fetch_assoc()) { ?>
           <option value="<?php echo $clase['clase_id'] ?>"><?php echo $clase['nombre'] ?></option>
           <?php } ?>
         </select>
       </div>
   </div>
   </div>
   </div>
   <!-- /.card-body -->
   <div class="card-footer">
     <input type="hidden" name="asignacioninput" value="1">
     <button type="submit"  class="btn btn-success">Crear</button>
   </div>
 </form>
    </div>
    </div>
    </div>

    <div class="col-md-8" style="margin-left: 280px;">
    <div class="card-body">
      <table id="listausuarios" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>ID</th>
          <th>Maestro</th>
          <th>Alumno</th>
          <th>Clase</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
        </thead>
        <tbody>
          <?php while ($asignacionclase = $resultado3->fetch_assoc()) { ?>
        <tr>
          <td> <?php echo $asignacionclase['Asignacion']?></td>
          <td> <?php echo $asignacionclase['Maestro']?></td>
          <td><?php echo $asignacionclase['Alumno']?></td>
          <td><?php echo $asignacionclase['Clase']?></td>
          <td><a href="editarusuario.php?usuario_id=<?php echo$asignacionclase['Asignacion'];?>"><button type="button" class="btn btn-warning">
            Editar
          </button></td>
          <td><a href="#" data-href="eliminarclass.php?id=<?php echo $asignacionclase['Asignacion']; ?>" data-toggle="modal" data-target="#confirm-delete"><button type="button" class="btn btn-danger">
            Eliminar
          </button></a></td>
        </tr>
        <?php } ?>
        </tbody>
        <tfoot>
          <tr>
            <th>ID</th>
            <th>Maestro</th>
            <th>Alumno</th>
            <th>Clase</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
    </div>

    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    			<div class="modal-dialog">
    				<div class="modal-content">

    					<div class="modal-header">
    						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
    					</div>

    					<div class="modal-body">
    						¿Desea eliminar este registro?
    					</div>

    					<div class="modal-footer">
    						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
    						<a class="btn btn-danger btn-ok">Delete</a>
    					</div>
    				</div>
    			</div>
    		</div>





    <?php
    $conn->close();
     ?>



<?php include_once 'templates/footer2.php';?>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="plugins/dropzone/min/dropzone.min.js"></script>
<script type="text/javascript">
$('#confirm-delete').on('show.bs.modal', function(e) {
  $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

  $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
});
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
