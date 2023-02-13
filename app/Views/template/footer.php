 <!-- Essential javascripts for application to work-->
 <script src="<?= base_url() ?>/Assets/js/jquery-3.3.1.min.js"></script>
 <script src="<?= base_url() ?>/Assets/js/popper.min.js"></script>
 <script src="<?= base_url() ?>/Assets/js/bootstrap.min.js"></script>
 <script src="<?= base_url() ?>/Assets/js/main.js"></script>
 <!-- The javascript plugin to display page loading on top-->
 <script src="<?= base_url() ?>/Assets/js/plugins/pace.min.js"></script>
 <!-- Page specific javascripts-->
 <script type="text/javascript" src="<?= base_url() ?>/Assets/js/plugins/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="<?= base_url() ?>/Assets/js/plugins/dataTables.bootstrap.min.js"></script>

 <script type="text/javascript" src="<?= base_url() ?>/Assets/js/plugins/sweetalert/sweetalert2.all.min.js"></script>
 <script type="text/javascript" src="<?= base_url() ?>/Assets/js/helpers.js"></script>
 <script type="text/javascript" src="<?= base_url() ?>/Assets/js/plugins/jspdf.min.js"></script>
 <script type="text/javascript" src="<?= base_url() ?>/Assets/js/plugins/jspdf.plugin.autotable.min.js"></script>
 <script type="text/javascript" src="<?= base_url() ?>/Assets/js/plugins/chart.js"></script>

 <?php
    if (isset($functions_js)) {
    ?>
     <script src="<?= base_url() ?>/Assets/js/<?= $functions_js ?>"></script>
 <?php
    }
    ?>

 </body>

 </html>