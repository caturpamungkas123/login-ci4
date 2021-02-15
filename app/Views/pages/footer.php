<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url() ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url() ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url() ?>/js/sb-admin-2.min.js"></script>
<script type="text/javascript">
    var el = document.getElementById("audioNotifikasi");

    function playAudio() {
        el.play();
    }

    function pauseAudio() {
        el.pause();
    }
</script>
</body>

</html>