<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Prompt">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จองห้องประชุม</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="test.js">
</head>
<body  style="font-family: Prompt;" background = "picture/background/BG2.jpg">
        
        <div class="topnav">
            <a class="active" href="index.php"><b>ปฏิทินการประชุม</b></a>
            <a href="#"><b>จองห้องประชุม</b></a>
            <a href="#"><b>ค้นหาชื่อวาระการประชุม</b></a>
            <a href="#"><b>ตรวจสอบสถานะประธาน</b></a>
            
            <div class="topnav-right">
                <div class="dropdown">
                    <button class="dropbtn"><b>ผู้ใช้งาน <i class="arrow"></i></b></button>
                    <div class="dropdown-content">
                        <a href="profile.html">จัดการข้อมูล</a>
                        <a href="logout.php">ออกจากระบบ</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="centerSlide" style="max-width:500px" >
            <img class="mySlides" src="picture/1.jpg" style="width:100%">
            <img class="mySlides" src="picture/2.jpg" style="width:100%">
            <img class="mySlides" src="picture/3.png" style="width:100%">
        </div>
        <script>
            var myIndex = 0;
            carousel();
            
            function carousel() {
              var i;
              var x = document.getElementsByClassName("mySlides");
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              myIndex++;
              if (myIndex > x.length) {myIndex = 1}    
              x[myIndex-1].style.display = "block";  
              setTimeout(carousel, 3000); 
            }
            </script>

        <br><div class="footer">
            <br><h3>ผู้จัดทำ</h3>
            <div style="opacity: 60%;">
                Narawit Khomsan<br>
            </div><br>
        </div>
    </body>
</html>