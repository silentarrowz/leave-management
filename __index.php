<?php
include 'database.php';

$db = new Database();
$con = $db->database_connect();

$type = $_GET['type'];

switch ($type) {
    case 'insert':
        {
            $sql = "insert into user (email, password) values('a@g.com', '1234')";
            if(!mysqli_query($con, $sql)) {
                die('Error: '. mysqli_error($con));
            } else {
                echo mysqli_insert_id($con);
            }
        }
        break;

    case 'selectall':
    {
        $sql = "select * from user";
        $result = mysqli_query($con, $sql);

        echo "Total rows: ". mysqli_num_rows($result). "<br/>";

        while($row = mysqli_fetch_assoc($result)) {
            echo $row['email']. "<br/>";
        }

    }
    break;

    case 'select':
    {
        $sql = "select * from user where id = 0";
        $result = mysqli_query($con, $sql);

        echo "Total rows: ". mysqli_num_rows($result). "<br/>";

        $row = mysqli_fetch_assoc($result);
        echo $row['email']. "<br/>";

    }
    break;

    case 'update':
        {
            $sql = "update user set email = 'b@g.com' where id = 2";
            if(!mysqli_query($con, $sql)) {
                die('Error: '. mysqli_error($con));
            } else {
                echo mysqli_affected_rows($con);
            }
        }
        break;

    case 'delete':
            {
                $sql = "delete from user where id = 10";
                if(!mysqli_query($con, $sql)) {
                    die('Error: '. mysqli_error($con));
                } else {
                    echo mysqli_affected_rows($con);
                }
            }
            break;

    default:
        // code...
        break;
}

?>