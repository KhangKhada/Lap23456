/* The provided code is an HTML document that includes PHP code snippets. Here's a breakdown of what
the code is doing: */
<!DOCTYPE html>
<html>

    <head>
        <title>PHP Object Oriented Programming</title>
        <!-- Unicode Vietnamese -->
        <meta charset="utf-8">
        <meta name="author" content="HuynhThaiHung.com" />
        <!-- css definition file -->
        <link href="../lap1/style.css" rel="stylesheet" />
    </head>

    <body>
        <div id="wrapper">
            <div class="row">
                <?php
                // Include the PHP file containing the member class definition
                 require_once("thanhvien.php");
                // Create a new member object with name "Nguyen Van A" and email "email1@gmail.com"
                $sv = new member("Nguyen Van A", "email1@gmail.com");
                //output user info
                echo "<h2>-- Member information --</h2>";
                echo "Code: ".$sv -> get_id()."<br/>";
                echo "Fullname: ".$sv -> get_fullname()."<br/>";
                echo "Email: ".$sv -> get_email()."<br/>";
                ?>
                <?php
                // Create another member object with name "Tran Van B" and email "email2@gmail.com"
                $sv2 = new member("Tran Van B", "email2@gmail.com");
                echo "<h2>---More information--</h2>";
                echo "Code: ".$sv2 -> get_id()."<br/>";
                echo "Fullname: ".$sv2 -> get_fullname()."<br/>";
                echo "Email: ".$sv2 -> get_email()."<br/>";
                ?>
            </div>
                <!-- Staff information -->
                <?php
                // Include the PHP file containing the staff class definition
                include("staff.php");
                // Create a new staff object with name "Nguyen Van A", staff code 5678, and position "Ceo"
                $nhanvat = new staff("Nguyen Van A", 5678, "Ceo");
                echo "<h2>--- Add: Object Oriented PHP --</h2>";
                echo "Full name: " . $nhanvat->get_fullname() . "<br/>";
                echo "Country code: " . $nhanvat->get_countrycode() . "<br/>";
                ?>
                <?php
                // Include the PHP file containing the staff class definition
                $staff = new staff("Nguyen Van B", 1234, "Guard");
                echo "<h2>---Staff--</h2>";
                echo "Mã nhân viên: " . $staff->get_staffcode() . "<br/>";
                echo "Họ tên: " . $staff->get_fullname() . "<br/>";
                echo "Mã QG: " . $staff->get_countrycode() . "<br/>";
                echo "Bộ phận: " . $staff->get_part() . "<br/>"
                ?>
</body>
        <footer>
        <p>Trendemy: <a href="trendemy.com">trendemy@gmail.com</a>.</p>
        </footer>
    </body>

</html>