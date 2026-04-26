<!-- Javascript -->
<script src="<?php echo base_url(); ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php echo base_url(); ?>assets/bundles/vendorscripts.bundle.js"></script>

<script src="<?php echo base_url(); ?>assets/bundles/chartist.bundle.js"></script>
<script src="<?php echo base_url(); ?>assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->
<script src="<?php echo base_url(); ?>assets/bundles/flotscripts.bundle.js"></script> <!-- flot charts Plugin Js -->
<script src="<?php //echo base_url(); ?>assets/vendor/toastr/toastr.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/flot-charts/jquery.flot.selection.js"></script>

<script src="<?php echo base_url(); ?>assets/bundles/mainscripts.bundle.js"></script>
<script src="<?php echo base_url(); ?>assets/js/index.js"></script>



<script src="<?php echo base_url(); ?>assets/bundles/datatablescripts.bundle.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>

<script src="<?php echo base_url(); ?>assets/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js --> 



<script src="<?php echo base_url(); ?>assets/js/pages/tables/jquery-datatable.js"></script>


<script src="<?php echo base_url(); ?>assets/vendor/jquery-validation/jquery.validate.js"></script> <!-- Jquery Validation Plugin Css -->
<script src="<?php echo base_url(); ?>assets/vendor/jquery-steps/jquery.steps.js"></script> <!-- JQuery Steps Plugin Js -->


<script src="<?php echo base_url(); ?>assets/js/pages/forms/form-wizard.js"></script>

<script src="<?php echo base_url(); ?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/parsleyjs/js/parsley.min.js"></script>

<script src="<?php echo base_url('assets/js/select2.min.js'); ?>"></script>
<script src="<?php //echo base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?php echo base_url() ?>assets/js/cropper.min.js"></script>
<script>
    $('.select2').select2();
</script>
</body>
</body>

<!-- PWA Service Worker & Install Prompt -->
<script>
if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
        navigator.serviceWorker.register('<?php echo base_url(); ?>sw.js')
            .then(function(reg) { console.log('SW registered:', reg.scope); })
            .catch(function(err) { console.warn('SW registration failed:', err); });
    });
}

var deferredPrompt;
window.addEventListener('beforeinstallprompt', function(e) {
    e.preventDefault();
    deferredPrompt = e;
    var banner = document.getElementById('pwa-install-banner');
    if (banner) banner.style.display = 'flex';
});
document.addEventListener('DOMContentLoaded', function() {
    var btn = document.getElementById('pwa-install-btn');
    var dismiss = document.getElementById('pwa-install-dismiss');
    if (btn) {
        btn.addEventListener('click', function() {
            if (deferredPrompt) {
                deferredPrompt.prompt();
                deferredPrompt.userChoice.then(function() { deferredPrompt = null; });
            }
            document.getElementById('pwa-install-banner').style.display = 'none';
        });
    }
    if (dismiss) {
        dismiss.addEventListener('click', function() {
            document.getElementById('pwa-install-banner').style.display = 'none';
        });
    }
});
window.addEventListener('appinstalled', function() {
    var banner = document.getElementById('pwa-install-banner');
    if (banner) banner.style.display = 'none';
});
</script>

<!-- Mirrored from www.wrraptheme.com/templates/lucid/hospital/light/index.html by HTTraQt Website Copier/1.x [Karbofos 2012-2017] J2, 22 Mac 2020 05:59:42 GMT -->
</html>
