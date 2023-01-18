<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Trip'd</title>
        <link rel="stylesheet" href="backendstyles.css">
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="alllocs.php" style="background-color: #ddd;">All Locations</a></li>
                <li><a href="addloc.php">Add Location</a></li>
            </ul>
        </nav>
        <hero>
            <div class="center">
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "tripd";
                    
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    $inc = 0;
                    $inc2 = 0;
                    $continue = TRUE;
                    $toprint = array();

                    $checklen = "SELECT ID FROM `places` ORDER BY ID DESC LIMIT 1";
                    $send_checklen = $conn->query($checklen);
                    $check_rowlen = $send_checklen->fetch_assoc();
                    $len = $check_rowlen['ID'];

                    while($continue) {
                    $inc += 1;
                    $inc2 += 1;
                    $select = "SELECT * FROM `places` WHERE ID=$inc" ;
                    $result = $conn->query($select);
                    $id_row = $result -> fetch_assoc();
                    
                    $test = $id_row['Name'];

                    if($test!=null) {
                    $inc2 = 0;
                    $placename = $id_row['Name'];
                    $placeaddress = $id_row['Address'];
                    $placeattributes = $id_row['Attributes'];

                    $temp = array(0 => $placename, 1 => $placeaddress, 2 => $placeattributes);
                    array_push($toprint, $temp);

                    } if($inc2>$len) { $continue = FALSE; } 
                    
                }
                $reversed = array_reverse($toprint);

                    foreach($reversed as &$items) {
                        
                        echo    '<ul class="display-locs">
                                    <li>Name:&nbsp'; echo $items[0]; echo '&nbsp</li>
                                    <li>Address:&nbsp'; echo $items[1]; echo '&nbsp</li>
                                    <li>Attributes:&nbsp'; echo $items[2]; echo '&nbsp</li>
                                </ul>';
                        
                    }
                ?>

            </div>
        </hero>
    </body>
</html>
