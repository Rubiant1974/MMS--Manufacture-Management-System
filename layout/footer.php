<?php

declare(strict_types=1);
?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    document.querySelectorAll('.js-select2').forEach((el) => {
        if (window.jQuery && window.jQuery.fn.select2) {
            window.jQuery(el).select2();
        }
    });
</script>
</body>
</html>
