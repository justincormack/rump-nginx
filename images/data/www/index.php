<?php 
date_default_timezone_set('UTC');
?>
<html>
<body style="font-size: 14pt;">
    <img src="logo150.png"/>
    Hello, <?php echo $_SERVER['REMOTE_ADDR']; ?>
    <p>
    It is now <?php echo date(DATE_RFC2822); ?>
    <p>
    Served to you by
    <a href="https://www.hiawatha-webserver.org/">Hiawatha webserver</a>,
    running on a
    <a href="http://rumpkernel.org">rump kernel</a>...
    <p>
    Try <a href="phpinfo.php">phpinfo()</a>.
</body>
</html>
