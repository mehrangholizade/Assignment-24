<?php
//اتصال به پایگاه داده
$connection = mysqli_connect("localhost", "root", "", "happy_family");

mysqli_query($connection, "SET CHARACTER SET utf8");

//تست اتصال
if(mysqli_connect_errno() == 0){
   // echo"همه چی آرومه، ما چقدر خوشبختیم";
}
else{
    echo "خطایی رخ داده";
    echo mysqli_connect_errno();
}

?>