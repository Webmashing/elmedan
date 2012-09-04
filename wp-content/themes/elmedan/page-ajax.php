<?php
header('Content-type: application/json');if(isset($_GET['post_id'])):echo to_json($_GET['post_id']);endif;
?>