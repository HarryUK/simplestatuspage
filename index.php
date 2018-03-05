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
                $hostname = ""; // server hostname
                $timeout = 4; // timeout in seconds

                $ip = gethostbyname($hostname);
                $checker = fsockopen($ip, '80', $errno, $errstr, $timeout); 

                if ($checker) {
                    fclose($checker);
                    echo "<h5>" . $hostname . " is online.</h5>\n";
                } else {
                    echo  "<h5>" . $hostname . " is offline.</h5>\n";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
