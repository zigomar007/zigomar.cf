﻿

<script> function getServerTime() {
  return $.ajax({async: false}).getResponseHeader( 'Date' );
}
console.log('Server Time: ', getServerTime());
console.log('Locale Time: ', new Date(getServerTime()));
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<?php
date_default_timezone_set(**YOUR DEFAULT TIMEZONE**); //e.g. date_default_timezone_set('Asia/Kolkata');
echo date("H:i:s A");
?>