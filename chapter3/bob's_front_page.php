<!DOCTYPE html>

<?php
    $pictures = array('tire.jpg','oil.jpg','spark_plug.jpg,
                      'door.jpg','steering_wheel.jpg',
                      'thermostat.jpg','wiper_blade.jpg',
                      'gasket.jpg','brake_pad.jpg');
    shuffle($pictures) ;                 
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bob's Auto Parts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <h1>Bob's Auto Parts</h1>
    <div align="center">
    <table>
        <tr>
            <?php
                for($i = 0;$i < 3;$i++){
                    echo "<td align=\"center\"><img src=\"$pictures[$i]\" /></td>";
                }
            ?>
        </tr>
    </table>

    </div>
    
</body>
</html>