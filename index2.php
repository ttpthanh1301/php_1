<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $param= "Hello World";
    $hello= "Hello";
    $world= 'World';
    echo "1: Số từ trong chuỗi " .$param." là:" .(strlen($param))."</br>";
    echo "2: Số dếm số từ trong chuỗi " .$param." là:" .(str_word_count($param))."</br>";
    echo "3: đảo ngược trong chuỗi " .$param." là:" .(strrev($param))."</br>";
    echo "4: Tìm kiếm từ Hello trong chuỗi " .$param." là: " .(strpos($param,'Hello'))."</br>";
    echo "5: Thay thế từ Hello trong chuỗi " .$param." thành Hi là: " .(str_replace('Hello','Hi',$param))."</br>";
    echo "6: Kiểm tra chuỗi " .$param." có bắt đầu bằng chuỗi ".$hello." là: " .(strcmp($param, $hello))."</br>";
    echo "7: Chuyển đổi chuỗi " .$param." thành chữ in hoa là: " .(strtoupper($param))."</br>";
    echo "8: Chuyển đổi chuỗi " .$param." thành chữ in thường là: " .(strtolower($param))."</br>";
    echo "9: In hoa chữ cái đầu tiên " .(strtolower($param))." là: " .(ucwords($param))."</br>";
    echo "10: Loại bỏ khoảng trắng đầu và cuối trong chuỗi " .$param." là: " .(trim($param))."</br>";
    echo "11: Loại bỏ ký tự đầu tiên trong chuỗi " .$param." là: " .(ltrim($param,'Hello'))."</br>";
    echo "12: Loại bỏ ký tự cuối trong chuỗi " .$param." là: " .(rtrim($param,"World"))."</br>";
    echo "13: Tách chuỗi " .$param." thành mảng các phần từ là: " ;
    print_r(explode(" ",$param));
    echo"</br>";
    $arr = array('Hello','World!','Beautiful','Day!');
    echo "14: Gộp chuỗi " .$param." là: ".(implode(" ",$arr))."</br>"; 
    echo "15: Thêm vào cuối chuỗi " .$param."đề đủ độ dài 20 là: " .(str_pad($param,20,'.'))."</br>";
    echo "16: Kiểm tra chuỗi" .$param."có kết thúc bằng chuỗi ". $world. " là: " .(strrchr($param,$world))."</br>";
    echo "17: Kiểm tra chuỗi " .$param." có chứa chuỗi ". $world. " là: " .(strstr($param,$world))."</br>";
    $param = "happy birthday";
    echo "18: Thay thế " . $param . " là: " . preg_replace('/h/', 'Hello', $param) . "<br>";
    $a = 32;
    echo " 19: a is " . is_int($a) . "<br>";
    $email = 'a@gmail.com';
    echo "20: Kiểm tra chuỗi " .$email." là email hợp lệ không: " .(filter_var($email))."</br>";


    
    
    
    
    ?>
</body>
</html>