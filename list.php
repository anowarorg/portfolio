<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        table,tr,td,th{
            border: 1px solid black;
            border-collapse: collapse;
        }
        </style>
</head>
<body>
    
</body>
</html>


<?php
    
    include 'connect.php';

    $query = 'SELECT * FROM lab05';
    $run = mysqli_query($con, $query);

    if(mysqli_num_rows($run) > 0)

    { 
        echo '<table>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                </tr>';



        while($row = mysqli_fetch_assoc($run))
        {
            echo '<tr>
                    <td>'.$row['name'].'</td>
                    <td>' .$row['gender'].'</td>
                    <td>' .$row['email'].'</td>
                    <td>' .$row['phone'].'</td>
                    <td>' .$row['address'].'</td>
                    <tr>';
                    
            //echo '<br>';
            //echo $row['name'].' '.$row['gender'].' '.$row['email'].'<br>';
            
        }
        echo'</table>';
    }
?>