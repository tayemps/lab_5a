<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php 
        function calculateArea($length, $width) {
            return $length * $width;
        }

        // Sample values
        $width = 4;
        $length = 2;
        $area = calculateArea($length, $width);
    ?>

    <p><b>The area of a rectangle with a width of <?php echo $width; ?> and <?php echo $length; ?> is <?php echo $area; ?></b></p>
</body>
</html>
