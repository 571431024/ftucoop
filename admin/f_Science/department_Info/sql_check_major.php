<?php 
    include ("connect.php");

    // //Test
    // $db = "tb_major";
    // $name = "คณะอิสลามศึกษาและนิติศาสตร์";
    $db = $_POST['db'];
    $name = $_POST['name'];

    if($db == "tb_faculty"){

        $sql = "SELECT * FROM tb_faculty"; 
        $dbquery=mysql_query("set names utf-8");
        $query=mysql_query($sql);
        // $data[]=mysql_fetch_assoc($query);
        $rows=mysql_num_rows($query);

        while($res = mysql_fetch_assoc($query)) {
            $data[] = $res;
        }
        echo json_encode($data);

    } else if($db == "tb_major"){

        $sql = "SELECT * FROM tb_faculty WHERE tb_faculty_name = '$name' "; 
        $dbquery=mysql_query("set names utf-8");
        $query=mysql_query($sql);
        // $data[]=mysql_fetch_assoc($query);
        $rows=mysql_num_rows($query);

        while($res = mysql_fetch_assoc($query)) {
            $data = $res['tb_faculty_id'];
        }

        // $faculty = "2";

        $sql2 = "SELECT * FROM tb_major WHERE tb_faculty_id = $data ";

        $dbquery2=mysql_query("set names utf-8");
        $query2=mysql_query($sql2);
        //  $data=mysql_fetch_assoc($query2);
        $rows2=mysql_num_rows($query2);

        while($res2 = mysql_fetch_assoc($query2)) {
            $data2[] = $res2;
        }

        echo json_encode($data2);

    }
?>