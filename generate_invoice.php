<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $bookNumber = $_POST['book_number'];
    $invoiceNumber = $_POST['invoice_number'];
    $date = $_POST['date'];
    $sellerName = $_POST['seller_name'];
    $sellerAddress = $_POST['seller_address'];
    $customerName = $_POST['customer_name'];
    $items = $_POST['item_description'];
    $quantities = $_POST['item_quantity'];
    $units = $_POST['item_unit'];
    $prices = $_POST['item_price'];
    $totals = $_POST['item_total'];
    $totalAmount = $_POST['total_amount'];
    $receiverName = $_POST['receiver_name'];
    $senderName = $_POST['sender_name'];

    echo "<h1>ใบส่งของ</h1>";
    echo "<p>เล่มที่: $bookNumber</p>";
    echo "<p>เลขที่: $invoiceNumber</p>";
    echo "<p>วันที่: $date</p>";
    echo "<p>ผู้ขาย: $sellerName</p>";
    echo "<p>ที่อยู่: $sellerAddress</p>";
    echo "<p>ชื่อลูกค้า: $customerName</p>";

    echo "<h2>รายละเอียดสินค้า</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ลำดับที่</th><th>รายการ</th><th>จำนวน</th><th>หน่วย</th><th>ราคา/หน่วย</th><th>รวมเงิน</th></tr>";
    foreach ($items as $index => $item) {
        echo "<tr>";
        echo "<td>" . ($home + 1) . "</td>";
        echo "<td>$item</td>";
        echo "<td>{$quantities[$index]}</td>";
        echo "<td>{$units[$index]}</td>";
        echo "<td>{$prices[$index]}</td>";
        echo "<td>{$totals[$index]}</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<p>รวมเป็นเงิน: $totalAmount</p>";
    echo "<p>ลงชื่อผู้รับของ: $receiverName</p>";
    echo "<p>ลงชื่อผู้ส่งของ: $senderName</p>";
}
?>
