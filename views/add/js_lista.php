
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


    $('.detalle').click(function(){
        valor = $(this).val();
        url = "<?php echo URL?>index/pdf?id="+valor;
        window.open(url, '_blank');
    });
    
    $('.edita').click(function(){
        var valor = $( this ).val();
        window.location='<?php echo URL?>vende/edita?val='+valor;      
        
        
    });
</script>
