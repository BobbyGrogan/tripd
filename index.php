<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Trip'd</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="index.html"><strong>Trip'd</strong></a></li>
                <li class="right"><a href="###">Your Trips</a></li>
            </ul>
        </nav>
        <hero>
            <div class="center">
                <ul>
                    <div class="place-option-box">
                        <div class="scrollable" id="#scrollable">
                            <select size="6" multiple="multiple">
                                <option value="1" selected>Boston</option>
                                <option value="2">Other</option>
                            </select>
                        </div>   
                    </div>
                    <li><input class="where-to info" id="where-to" type=text placeholder="Where to?"></li>
                </ul>
                <ul>
                    <li><input class="when info" type=date placeholder="When?"></li>
                    <li><input class="how-much info" type=number placeholder="Budget?"></li>
                    <li><input class="how-many info" type=number placeholder="# of people?"></li>
                </ul>
                <button class="go-trip" type="submit"><a href="itinerary.php">Get Tripping!</a></button>
            </div>
        </hero>
    </body>
</html>