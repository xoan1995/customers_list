<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
    h1 {
        color: white;
        text-align: center;
        text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>
<body>
<caption><h1>Danh sách khách hàng</h1></caption>
<table border="1">
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
    $customersList = array(
    "1" => array("ten" => "Mai Thanh Hoang",
    "ngay sinh" => "29-03-1995",
    "dia chi" => "Ha Noi",
    "anh" => "images/img1.png"),
    "2" => array("ten" => "Nguyen Thai Hoa",
        "ngay sinh" => "06-03-1995",
        "dia chi" => "Ha Noi",
        "anh" => "images/img2.gif")
    );
    foreach($customersList as $key=> $values){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$values['ten']."</td>";
        echo "<td>".$values['ngay sinh']."</td>";
        echo "<td>".$values['dia chi']."</td>";
        echo "<td><div class='thumbnail'><image src = '".$values['anh']."'/></div></td>";        echo "</tr>";
    }?>
</table>
</body>
</html>
