<div class="section full otherdiners"  id="diners">
	<div class="more-label">
		<h1>More Diners</h1>
	</div>
    <?php
        $dinerlist = array_diff(scandir($path . "/diners",1), array('..', '.', '.DS_Store','error_log'));
        $current = basename(getcwd()); 
		$dinerlist = array_diff($dinerlist, [$current]);
        include($path . "/elements/dinercard.php");
    ?> 
    
</div>