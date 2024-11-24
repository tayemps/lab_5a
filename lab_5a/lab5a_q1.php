<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name = "WAN HASYRAF BIN ABD RAHMAN";
        $matricNumber = "CI230079";
        $course = "Bachelor of Computer Science";
        $yearOfStudy = "Year 2";
        $address = "123 Jalan Universiti, KOKDIANG";
    ?>

    <table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td> 
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
    
</body>
</html>
