<?php
    $conn = new mysqli('localhost','root','','quanlybanxe') or die('Ket noi that bai');
    session_start();
    if (isset($_POST['nameAdminCategory']))
    {
        $name=$_POST['nameAdminCategory'];
        if($name == 'all-order'){
            $sql = "SELECT * FROM `dathang`";
        }else if($name =='unconfirmed-order'){
            $sql = "SELECT * FROM `dathang` WHERE Trangthai = 'unconfirmed'";
        }else{
            $sql = "SELECT * FROM `dathang` WHERE Trangthai = 'confirmed'";
        }
        $query = mysqli_query($conn,$sql);
        echo '<table border="1" cellspacing="0">
                <tr>
                    <td class = "product-text">MSKH</td>
                    <td class = "product-text">Tên Khách Hàng</td>
                    <td class = "product-text">SDT</td>
                    <td class = "product-text">MSHH</td>
                    <td class = "product-text">Tên Hàng hóa</td>
                    <td class = "product-text">Trạng thái</td>
                    <td class = "product-text">Hóa đơn</td>
                </tr>';
        if(mysqli_num_rows($query)){

            while($r = mysqli_fetch_assoc($query)){
                $mskh = $r['MSKH'];
                $status=$r['Trangthai'];
                $result = mysqli_query($conn,"SELECT * FROM dathang");
    
                    if($row = $result->fetch_assoc()){
    
                        echo '<tr>
                            <td class = "product-text">'. $mskh .'</td>
                            <td class = "product-text">'.$row['TenKH'].'</td>
                            <td class = "product-text">'. $row['SDT'] .'</td>
                            <td class = "product-text">'. $row['MSHH'] .'</td>
                            <td class = "product-text">'. $row['TenHH'] .'</td>';
                            if($status == 'unconfirmed'){
                                echo '<td class = "product-text">
                                <form method="POST" action="php/adminconfirm.php">
                                    <button type="submit" class="btn btn--primary">Xác nhận</button>
                                    
                                </form>
                                </td>
                                <td class = "product-text"><a href="bill.html"><button>In hóa đơn</button></a></td>';
                            }else{
                                echo '<td class = "product-text">Đã xác nhận</td>
                                <td class = "product-text"><a href="bill.html"><button>In hóa đơn</button></a></td>';
                            }                        
                            echo '</tr>';
                        
                    }
                }
        }else{
            echo '<tr>
            <td class = "product-text" colspan="8">Không có đơn đơn hàng</td>
            </tr>';
        }
            echo '</table>';
        }
        
    
?>