<?php include('connection.php');
session_start();
ini_set('mysql.connect_timeout',300);
ini_set('default_socket_timeout',300);


            if(isset($_POST['sumit']))
            {
                if(getimagesize($_FILES['image']['tmp_name']) == FALSE)
                {
                    echo "Please select an image.";
                }
                else
                {
                    $image= addslashes($_FILES['image']['tmp_name']);
                    $name= $_SESSION['username'];
                    $image= file_get_contents($image);
                    $image= base64_encode($image);
                    saveimage($name,$image);
                }
            }
           // displayimage();
            function saveimage($name,$image)
            {
                include('connection.php');
                echo "$name \n";
                echo "$image \n";
                 $qry="INSERT INTO `userinfoimage` (`userName`, `userImage`) VALUES ('$name', '$image' );";
                 echo $qry;
                
                $result = mysqli_query( $conn, $qry);
                if($result)
                {
                    echo "<br/>Image uploaded.";
                }
                else
                {
                    echo "<br/>Image not uploaded.";
                }
            }
            function displayimage()
            {
                $con=mysql_connect("localhost","root","");
                mysql_select_db("kstark",$con);
                $qry="select * from images";
                $result=mysql_query($qry,$con);
                while($row = mysql_fetch_array($result))
                {
                    echo '<img height="300" width="300" src="data:image;base64,'.$row[2].' "> ';
                }
                mysql_close($con);   
            }