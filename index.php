<?php include "header.php"; ?>
<?php include "menu.php"; ?>
<main>
   <?php
   if (empty($_GET['p'])) {
      $_GET['p'] = 'home';
      include 'pages/main.php';
   } else {
      switch ($_GET['p']) {
         case "home": //หน้าแรก
            include 'pages/main.php';
            break;
         case "login": //ล็อคอิน
            include 'pages/login.php';
            break;
         case "profile": //ข้อมูลส่วนตัว
            include 'pages/profile.php';
            break;
         case "register": //สมัครสมาชิก
            include 'pages/register.php';
            break;
         case "forgetpass": //ลืมรหัสผ่าน
            include 'pages/forgetpass.php';
            break;
         case "list": //รายการเบอร์ทั้งหมด
            include 'pages/list.php';
            break;
         case "faqs": //คำถามที่พบบ่อย
            include 'pages/faqs.php';
            break;
         case "article": //บทความ
            include 'pages/article.php';
            break;
         case "contact": //ติดต่อเรา
            include 'pages/contact.php';
            break;
         case "search": //ค้นหาเบอร์
            include 'pages/search.php';
            break;
         case "horo": //ทำนายเบอร์
            include 'pages/horo_ber.php';
            break;
         //Code By Beam
         case "cart": //ตระกร้า
            include 'pages/cart_mobile.php';
            break;
         default: //หน้า Error
            include 'pages/404.php';
            break;
      }
   }
   ?>
</main>
<?php include "footer.php"; ?>