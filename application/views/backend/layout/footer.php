<script src="<?= base_url('asset/backend/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('asset/backend/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('asset/backend/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('asset/backend/js/sb-admin-2.min.js') ?>"></script>
<!-- SweetAlert -->
<script src="<?= base_url('asset/backend/vendor/Swift-Alert/dist/sweetalert2.all.min.js') ?>"></script>

<!-- Script running sweetalert2 -->
<script src="<?= base_url('asset/backend/vendor/Swift-Alert/dist/pesan1.js') ?>"></script>

<!-- Jquery Validation Forms -->
<script src="<?= base_url('asset/backend/vendor/jquery-validation/dist/jquery.validate.min.js') ?>"></script>
<script src="<?= base_url('asset/backend/vendor/jquery-validation/dist/additional-methods.min.js') ?>"></script>

<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>

</body>

</html>