<?php

session_destroy();

echo "<script>
    window.location = '".BASE_URL."login'
</script>";

?>