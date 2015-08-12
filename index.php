<?php

/* ----------------- FTP 1 --------------- */
/* get disk space free (in bytes) */
$ftp1_f = disk_free_space("/var/www/html/directlink/FTP1");
/* and get disk space total (in bytes)  */
$ftp1_t = disk_total_space("/var/www/html/directlink/FTP1");
/* now we calculate the disk space used (in bytes) */
$du1 = $ftp1_t - $ftp1_f;
/* percentage of disk used - this will be used to also set the width % of the progress bar */
$dp1 = sprintf('%.2f',($du1 / $ftp1_t) * 100);

/* and we formate the size from bytes to MB, GB, etc. */
$ftp1_f = formatSize($ftp1_f);
$du1 = formatSize($du1);
$ftp1_t = formatSize($ftp1_t);
/* ----------------- FTP 1 --------------- */


/* ----------------- FTP 2 --------------- */
/* get disk space free (in bytes) */
$ftp2_f = disk_free_space("/var/www/html/directlink/FTP2");
/* and get disk space total (in bytes)  */
$ftp2_t = disk_total_space("/var/www/html/directlink/FTP2");
/* now we calculate the disk space used (in bytes) */
$du2 = $ftp2_t - $ftp2_f;
/* percentage of disk used - this will be used to also set the width % of the progress bar */
$dp2 = sprintf('%.2f',($du2 / $ftp2_t) * 100);

/* and we formate the size from bytes to MB, GB, etc. */
$ftp2_f = formatSize($ftp2_f);
$du2 = formatSize($du2);
$ftp2_t = formatSize($ftp2_t);
/* ----------------- FTP 2 --------------- */


/* ----------------- FTP 3 --------------- */
/* get disk space free (in bytes) */
$ftp3_f = disk_free_space("/var/www/html/directlink/FTP3");
/* and get disk space total (in bytes)  */
$ftp3_t = disk_total_space("/var/www/html/directlink/FTP3");
/* now we calculate the disk space used (in bytes) */
$du3 = $ftp3_t - $ftp3_f;
/* percentage of disk used - this will be used to also set the width % of the progress bar */
$dp3 = sprintf('%.2f',($du3 / $ftp3_t) * 100);

/* and we formate the size from bytes to MB, GB, etc. */
$ftp3_f = formatSize($ftp3_f);
$du3 = formatSize($du3);
$ftp3_t = formatSize($ftp3_t);
/* ----------------- FTP 3 --------------- */






/* ----------------- FTP 4 --------------- */
/* get disk space free (in bytes) */
$ftp4_f = disk_free_space("/var/www/html/directlink/FTP4");
/* and get disk space total (in bytes)  */
$ftp4_t = disk_total_space("/var/www/html/directlink/FTP4");
/* now we calculate the disk space used (in bytes) */
$du4 = $ftp4_t - $ftp4_f;
/* percentage of disk used - this will be used to also set the width % of the progress bar */
$dp4 = sprintf('%.2f',($du4 / $ftp4_t) * 100);

/* and we formate the size from bytes to MB, GB, etc. */
$ftp4_f = formatSize($ftp4_f);
$du4 = formatSize($du4);
$ftp4_t = formatSize($ftp4_t);
/* ----------------- FTP 4 --------------- */




function formatSize( $bytes )
{
        $types = array( 'B', 'KB', 'MB', 'GB', 'TB' );
        for( $i = 0; $bytes >= 1024 && $i < ( count( $types ) -1 ); $bytes /= 1024, $i++ );
                return( round( $bytes, 2 ) . " " . $types[$i] );
}

?>

<style type='text/css'>

body {
  background: #f3f3f3;
}

/* ----------------- FTP 1 --------------- */
.progress1 {
        border: 1px solid black;
        box-shadow: 1.5px 1.5px 1px #888888;
        height: 32px;
        width: 540px;
        margin: 30px auto;
        font-family: helvetica;
        font-size: 12px;
        font-weight: bold;
}

.progress1 .prgbar1 {
        background: silver;
        width: <?php echo $dp1; ?>%;
        position: relative;
        height: 32px;
        z-index: 999;
}



.progress1 .prgtext1 {
        color: black;
        text-align: center;
        font-size: 12px;
        padding: 9px 0 0;
        width: 540px;
        position: absolute;
        z-index: 1000;
}
.progress1 .prginfo1 {
        margin: 5px 0;
}
/* ----------------- FTP 1 --------------- */


/* ----------------- FTP 2 --------------- */
.progress2 {
        border: 1px solid black;
        box-shadow: 1.5px 1.5px 1px #888888;
        height: 32px;
        width: 540px;
        margin: 30px auto;
        font-family: helvetica;
        font-size: 12px;
        font-weight: bold;
}

.progress2 .prgbar2 {
        background: silver;
        width: <?php echo $dp2; ?>%;
        position: relative;
        height: 32px;
        z-index: 999;
}



.progress2 .prgtext2 {
        color: black;
        text-align: center;
        font-size: 12px;
        padding: 9px 0 0;
        width: 540px;
        position: absolute;
        z-index: 1000;
}
.progress2 .prginfo2 {
        margin: 5px 0;
}
/* ----------------- FTP 2 --------------- */

/* ----------------- FTP 3 --------------- */
.progress3 {
        border: 1px solid black;
        box-shadow: 1.5px 1.5px 1px #888888;
        height: 32px;
        width: 540px;
        margin: 30px auto;
        font-family: helvetica;
        font-size: 12px;
        font-weight: bold;
}

.progress3 .prgbar3 {
        background: silver;
        width: <?php echo $dp3; ?>%;
        position: relative;
        height: 32px;
        z-index: 999;
}



.progress3 .prgtext3 {
        color: black;
        text-align: center;
        font-size: 12px;
        padding: 9px 0 0;
        width: 540px;
        position: absolute;
        z-index: 1000;
}
.progress3 .prginfo3 {
        margin: 5px 0;
}
/* ----------------- FTP 3 --------------- */




/* ----------------- FTP 4 --------------- */

.progress {
        border: 1px solid black;
        box-shadow: 1.5px 1.5px 1px #888888;
        height: 32px;
        width: 540px;
        margin: 30px auto;
        font-family: helvetica;
        font-size: 12px;
        font-weight: bold
}
.progress .prgbar {
        background: silver;
        width: <?php echo $dp4; ?>%;
        position: relative;
        height: 32px;
        z-index: 999;
}



.progress .prgtext {
        color: black;
        text-align: center;
        font-size: 12px;
        padding: 9px 0 0;
        width: 540px;
        position: absolute;
        z-index: 1000;
}
.progress .prginfo {
        margin: 5px 0;
}
/* ----------------- FTP 4 --------------- */








</style>


<div class='progress1'>
        <div class='prgtext1'><?php echo $dp1; ?>% Disk Used</div>
        <div class='prgbar1'></div>
        <div class='prginfo1'>
                <span style='float: right; color: black;  padding: 4px'><?php echo "$du1 of $ftp1_t used"; ?></span>
                <span style='float: left; color: black; padding: 4px'><?php echo "FTP1"; ?></span>

                <span style='clear: both;'></span>
        </div>
</div>

</br>

<div class='progress2'>
        <div class='prgtext2'><?php echo $dp2; ?>% Disk Used</div>
        <div class='prgbar2'></div>
        <div class='prginfo2'>
                <span style='float: right; color: black;  padding: 4px'><?php echo "$du2 of $ftp2_t used"; ?></span>
                <span style='float: left; color: black; padding: 4px'><?php echo "FTP2"; ?></span>

                <span style='clear: both;'></span>
        </div>
</div>

</br>

<div class='progress3'>
        <div class='prgtext3'><?php echo $dp3; ?>% Disk Used</div>
        <div class='prgbar3'></div>
        <div class='prginfo3'>
                <span style='float: right; color: black; padding: 4px'><?php echo "$du3 of $ftp3_t used"; ?></span>
                <span style='float: left; color: black; padding: 4px'><?php echo "FTP3"; ?></span>

                <span style='clear: both;'></span>
        </div>
</div>

</br>





<div class='progress'>
        <div class='prgtext'><?php echo $dp4; ?>% Disk Used</div>
        <div class='prgbar'></div>
        <div class='prginfo'>
                <span style='float: right; color: black; padding: 4px'><?php echo "$du4 of $ftp4_t used"; ?></span>
                <span style='float: left; color: black; padding: 4px'><?php echo "FTP4"; ?></span>
                <span style='clear: both;'></span>
        </div>
</div>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html dir="ltr" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<title>FTP Drive Info</title>
	<style type="text/css">
		@import "domtab.css";
	</style>
<!--[if gt IE 6]>
	<style type="text/css">
		html>body ul.domtabs a:link,
		html>body ul.domtabs a:visited,
		html>body ul.domtabs a:active,
		html>body ul.domtabs a:hover{
			height:3em;
		}
	</style>
<![endif]-->
	<script type="text/javascript" src="domtab.js"></script>
	<script type="text/javascript">
		document.write('<style type="text/css">');    
		document.write('div.domtab div{display:none;}<');
		document.write('/s'+'tyle>');    
    </script>
</head>
<body>



<div class="domtab">
	<ul class="domtabs">
		<li><a href="#what">Raw DiskInfo</a></li>
		<li><a href="#how">bCache FTP1</a></li>
		<li><a href="#pr">bCache FTP2</a></li>
		<li><a href="#style">bCache FTP3</a></li>
		<li><a href="#dl">bCache FTP4</a></li>
	</ul>
	<div>
		<h2><a name="what" id="what"></a></h2>
		<p></p>
		<?php
		$output = shell_exec('df -h');
		echo "<pre>$output</pre>";
		?>

		
	</div>
	<div>
		<h2><a name="how" id="how"></a></h2>
		<?php
		$bcache0 = shell_exec('tail /sys/block/bcache0/bcache/stats_total/*');
		echo "<pre>$bcache0</pre>";
		?>
	</div>
	<div>
		<h2><a name="pr" id="pr"></a></h2>
		<?php
		$bcache1 = shell_exec('tail /sys/block/bcache1/bcache/stats_total/*');
		echo "<pre>$bcache1</pre>";
		?>
	</div>
	<div>
		<h2><a name="style" id="style"></a></h2>
		<?php
		$bcache2 = shell_exec('tail /sys/block/bcache2/bcache/stats_total/*');
		echo "<pre>$bcache2</pre>";
		?>
	</div>
	<div>
		<h2><a name="dl" id="dl"></a></h2>
		<?php
		$bcache3 = shell_exec('tail /sys/block/bcache3/bcache/stats_total/*');
		echo "<pre>$bcache3</pre>";
		?>
	</div>
</div>


</body>
</html>

