
<script type="text/javascript" src="<?php echo URL?>public/assets/tabla/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo URL?>public/assets/tabla/datatables-bootstrap/dataTables.bootstrap.js"></script>
  
<script type="text/javascript">
    $(document).ready(function () {
        $('#example').DataTable( {
        "order": [[ 0, "desc" ]],
        "columns": [
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    { "orderable": false }
                  ]
    });
});
</script>
