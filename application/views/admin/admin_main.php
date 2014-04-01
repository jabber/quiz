<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$sPath =  dirname(dirname(__FILE__)). '/common/page_header.php';
if($sPath) { require_once $sPath;}
?>

    <div class="container">

      <div class="masthead">
        <h3 class="text-muted">ADMIN SYSTEM</h3>
        
      </div>

      
    </div> <!-- /container -->



<?php
$sPath =  dirname(dirname(__FILE__)) . '/common/page_footer.php';
if($sPath) { require_once $sPath; }
?>