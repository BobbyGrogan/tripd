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
                <li><a href="alllocs.php">All Locations</a></li>
                <li><a href="addloc.php" style="background-color: #ddd;">Add Location</a></li>
            </ul>
        </nav>
        <hero>
            <div class="center">
                <form action="actions/addloc.php" method="post">
                    <ul>
                        <li><input class="details" type=text name="name" placeholder="Name?"></li>
                        <li><input class="details" type=text name="address" placeholder="Address?"></li>
                        <li><input class="details" type=text name="attributes" placeholder="Attributes?"></li>
                    </ul>
                    <button class="go-trip" type="submit" name="submit">Add New Location</button>
                </form>
            </div>
        </hero>
    </body>
</html>
