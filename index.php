<?php
    require_once('database.php');



    // Get name for current category
    $query ="SELECT firstName, lastName FROM customers order by lastName;";
    $customers = $db->query($query);
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
    <div id="page">

    <div id="header">
        <h1>Customer list</h1>
    </div>

    <div id="main">

        <h1>Product List</h1>

       1

        <div id="content">
            <!-- display a table of products -->
            <table>
                <tr>
                    <th>Semester</th>

                </tr>
                <?php foreach ($customers as $semesterName) : ?>
                <tr>
                    <td><?php echo $customers['semesterName']; ?></td>

                    
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

    <div id="footer">
        <p>&copy; <?php echo date("Y"); ?> Assignment 1, Inc.</p>
    </div>

    </div><!-- end page -->
</body>
</html>