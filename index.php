<!DOCTYPE html>
<html>
<head>
    <title>Status</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width">
</head>
<body>
    <div class="text-center">
        <div class="jumbotron">
            <h1>Status</h1>
        </div>
        <div class="container">
            <div class="jumbotron">
                <h1>Site:</h1>
                <?php
                $main = '' // Put your domain here;
                if(gethostbyname($main) != $main ) {
                    // If online
                    echo "<h5>" . $main . " is <span class='online'>online</span>.</h5>\n";
                } else {
                    // If offline
                    echo  "<h5>" . $main . " is <span class='offline'>offline</span>.</h5>\n";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
