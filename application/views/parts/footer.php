</div>
  <script src="<?php echo base_url();?>assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/js/main.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/lib/theme-switcher/theme-switcher.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/lib/skycons/skycons.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/lib/countup/countUp.min.js" type="text/javascript"></script>

  <script type="text/javascript">
    $(document).ready(function(){
    
      
      console.log("tess");
      $('#btnNext').on('click', function () {
        <?php
        // $isiMateri = $materi[0]->materi;
        // $isiMateri = str_replace(array("\r\n", "\n"), "", $myField);
        ?>
        var materi    = "<?php echo $materi[0]->materi;  ?>";
        var jmlMateri = <?php count($materi); ?>
        // $('#result').load(namaMobil);
        
      	$('#isi-materi').append(materi);
      
      });
    });
  </script>

</body>
</html>