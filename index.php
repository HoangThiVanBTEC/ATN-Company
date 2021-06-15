<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
	<title>Index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<style type="text/css">
		#id1{
			
			height: 100px;
			background-color: red;
			background-image: url(https://canhcoupon.com/images/khuyen-mai/2017/04/tuan-sach-van-hoc-theo-chu-de-giam-den-50-tiki-banner.jpg);
		}

		#id2{
			
			height: 80px;
			align-items: center;
		}
		#id3{
			
			height: 600px;
		}
		#idcon1{
			
			width:30%;
			float: left;
			margin-top: 0px;
		}
		#idcon2{
			
			width: 70%;
			float: right;
			background-color: red;
			margin-top: 20px;
		}
		.cls2{
			
			width: 100px;
			
			padding: 15px;
			float: left;
			text-transform:uppercase;
			margin-top: 5px;
			height: 40px;

		}
		a{
			text-decoration: none;
		}
		.cls2:hover{
			display: block;
			background-color: gray

		}
		
		.cls1{
			width: 160px;
			height: 70px;
			float: left;
		}
		#form{
			border: 2px solid orange;
			height: 40px;
		}
		/*#form2{
			
			background-color: orange;
			height: 40px;


		}*/
		#form #form1{
			width: 78%;
			height: 35px;
			float: left;
		}
		#form #form2{
			width: 20%;
			height: 40px;
			float: right;
			background-color: orange;
			color: white
		}
		
		#id3 li{
			list-style: none;
		}

		#idcon1 .cls3{
    background: #484848; /*tô màu cho menu cha*/
    border-radius: 5px; /* bo góc */
    width: 330px
	}

	#idcon1> ul li{
    
    /* kẻ đường bên trên và bên dưới của li */
    border-top : 1px solid #ccc;
    border-bottom :1px solid #333;
}
#idcon1> ul li a{
    display: block;
    padding: 0px 25px ;
    line-height: 50px;
    color: #f1f2f3;
    text-decoration: none;
}

/* Khi hover đến li, tô màu cho thẻ a */
#idcon1 ul li:hover>a{
    background: red;
    /*opacity: .7;*/
    color: yellow;
}

/*menu con*/
/*Ẩn các menu con cấp 1,2,3*/
#idcon1 li ul{
    display: none;
    min-width: 350px;
    position: absolute;
}

#idcon1 li>ul li{
    
    border: none;
    border-bottom: 1px solid #ccc;
    background-color: #999;
    text-align: left;
}
/*trang trí đường viền cho menu con*/
#idcon1 li>ul li:first-child {
    border-bottom-left-radius: 0px;
    border-top-left-radius: 0px;
}
#idcon1 li>ul li:last-child {
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
}

/*khi hover thì hiện menu con*/
#idcon1 li:hover > ul{
    display:  block;
}

/*Hiển thị menu con cấp 2,3bên cạnh phải*/
#idcon1  ul li  ul {
    margin-left: 290px;
    margin-top: -150px;
}

.cls4{
	width: 100%;
	height: 510px;
}
#logosale{
	width: 1250px;
	height: 235px;
	
}

.clslogo{
	float: left;
	width: 310px;
	height: 233px;
	margin-right: 2px;
	
}
#product{
	width: 1250px;
	height: 600px;
	
}
#hot{
	width: 1250px;
	height: 300px;
	
}
#title{
	width: 1250px;
	height: 70px;
	
	margin-top: 15px; 
	
}
#title1{
	width: 76px;
	height: 68px;
	float: left;

}
#title2{
	width: 1170px;
	height: 68px;
	background-color: orange;
	float: right;

}
.hot2{
	width: 300px;
	height: 400px;
	
	float: left;
	margin: 55px;
	border: 1px solid black
}
#footer{
	width: 1250px;
	height: 350px;
	
}

#footer1{
	width: 425px;
	height: 350px;
	background-color: #CCCCCC	;
	float: left;
}
#footer2{
	width:823px;
	height: 350px;
	background-color: #CCCCCC	;
	float: right;
}
#ft3{
	width: 270px;
	height: 200px;
	
	float: left;
}
#ft4{
	width: 270px;
	height: 200px;
	
	float: left;
	padding-left: 10px
}
#ft5{
	width: 270px;
	height: 200px;
	
	float: right;
}
#ft2{
	width: 823px;
	height: 148px;
	
	margin-top : 202px

}

	</style>
</head>
<body>
	<!--PHẦN HEADER-->
	<div id="HEADER">

	<div id="id1">

	</div>

	
	<div id="id2">
		<ul type="none">
			<li>
				<a href="index.php"><img style="padding: auto;" width="250px" height="70px" class="cls1" src="https://jobseekers.vn/wp-content/uploads/2019/05/Quy-Chuan-Logo.png"></a>
			</li>
			<li class="cls2" style="width: 435px">
			<div id="form">
				<form method="get" action="timkiem.php">
  				<div ><input id="form1"   type="text" placeholder="Search.." name="search"></div>
 				<!--
 				<div ><input id="form2" type="submit" name="submit" value="Search"></div>
 				-->
 				<div><input id="form2" type="submit" name="ok" value="Search"></div>
				</form>
			</div>

<!--******************************************************************************************-->

			<?php
        // Nếu người dùng submit form thì thực hiện
        if (isset($_REQUEST['ok'])) 
        {
            // Gán hàm addslashes để chống sql injection
            $search = addslashes($_GET['search']);
 
            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
            } 
            else
            {
                // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                $query = "select * from product where name like '%$search%'";
 
                // Kết nối sql
                mysql_connect("localhost", "root", "", "bookshop");
 
                // Thực thi câu truy vấn
                $sql = mysql_query($query);
 
                // Đếm số đong trả về trong sql.
                $num = mysql_num_rows($sql);
 
                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                if ($num > 0 && $search != "") 
                {

                    // Dùng $num để đếm số dòng trả về.
                    echo "<script>window.open('timkiem.php','_blank')</script>";

                    echo "$num ket qua tra ve voi tu khoa <b>$search</b>";
 
                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                    echo '<table border="1" cellspacing="0" cellpadding="10">';
                    while ($row = mysql_fetch_assoc($sql)) {

                    	
        				
                        echo '<tr>';
                            echo "<td>{$row['product_id']}</td>";
                            echo "<td>{$row['name']}</td>";
                            echo "<td>{$row['price']}</td>";
                            echo "<td>{$row['author']}</td>";
                            echo "<td>{$row['quanlity']}</td>";
                        echo '</tr>';
                    }
                    echo '</table>';
                } 
                else {
                    echo "Khong tim thay ket qua!";
                }
            }
        }
        ?>   


<!--***************************************************************************************-->


			</li>
			<li class="cls2" style="text-align: center;">
				<a target="blank" href="gioithieu.php"><img style="width: 30px; height: 30px" src="https://icons.iconarchive.com/icons/alecive/flatwoken/256/Apps-Google-Keep-icon.png"><p style="font-size:10px;margin-top: 3px; color: orange"> Introduction</p></a>
			</li>
			<li class="cls2" style="width: 100px; text-align: center">
				<a style="color: orange" target="blank" href="admin/quanlisp.html"><img style="width: 30px; height: 30px; background-color: orange" src="https://www.kindpng.com/picc/m/237-2374886_free-vector-warehouse-inventory-warehouse-icon-png-transparent.png"><p style="font-size: 10px; margin-top: 3px;">Product managing</p></a>
			</li>
			<li class="cls2" style="width: 60px; text-align: center;">
				<i style="color: orange" class="fa fa-cart-plus fa-2x"><a href="#"><p style="font-size: 10px; margin-top: 3px;color: orange">Cart</p></a></i>
			</li>
			<li class="cls2"  style="width: 60px; text-align: center;">
				<i style="color: orange"  class="fa fa-user fa-2x "><a href="admin/login.php"><p style="font-size: 10px; margin-top: 3px;color: orange">Login</p></a></i>
			</li>
			<li class="cls2" style="width: 60px; text-align: center;">
				<i style="color: orange" class="fa fa-bell fa-2x "><a href="#"><p style="font-size: 10px; margin-top: 3px;color: orange">Notification</p></a></i>
			</li>
			
		</ul>
	</div>
	</div>

<!--PHẦN CONTENT -->
	<div id="id3">
		
		<div id="idcon1">
			<ul class="cls3">
			<li style="background-color: orange"><h3 align="center" style="color: white"><b>Category</b></h3></li>
            <li><a target="_blank" href="list_economicbook.php" title="">Economic book</a></li>
            <li><a href="#" title="Sách nước ngoài">Foreign book</a></li>
            <li><a href="#" title="Dụng cụ">Specialized book</a>
                <!-- menu con sổ xuống cấp 1 -->
                <ul >
                    <li><a href="#" title="Lập trình C/C++">Lập trình C/C++</a></li>
                    <li><a href="#" title="Lập trình Web PHP&MySQL">Lập trình Web với PHP&MySQL</a></li>
                    <li>
                        <a href="#" title="Lập trình Web ASP.NET">Lập trình Web với ASP.NET MVC 5</a>
                        <!-- menu con sổ ngang cấp 2 -->
                        <ul >
                            <li><a href="#" title="Lập Trình hướng đối tượng với C# (30h)">1. Lập trình hướng đối tượng với C#(30h)</a></li>
                            <li><a href="#" title="Lập trình cơ sở dữ liệu SQL Server (20h)">2. Lập trình cơ sở dữ liệu SQL Server (20h)</a></li>
                            <li><a href="#" title="Lập trình giao diện web với HTML5 (30h)">3. Lập trình giao diện web với HTML5 (30h)</a></li>
                            <li><a href="#" title="Lập trình ứng dụng với ASP.NET MVC 5 (20h)">4. Lập trình ứng dụng ASP.NET MVC 5 (20h)</a></li>
                            <li>
                                <a href="#" title="Xây dựng dự án với ASP.NET MVC 5(30h)">5. Xây dựng dự án với ASP.NET MVC 5(30h)</a>
                                <!-- menu con sổ ngang cấp 3 -->
                                

                            </li>
                        </ul>
                    </li>
                    <li><a href="#" title="Lập trình Web Java Spring">Lập trình Web Java Spring Framework</a></li>
                </ul>
            </li>
            <li><a href="#" title="Dịch vụ">Services</a></li>
            <li><a href="#" title="Liện hệ">Contact</a></li>
            <li><a href="#">Party card</a></li>
            <li><a href="#">Decoration</a></li>
            <li><a href="#">Bookshafe</a></li>
            <li><a href="#"> Onlion library</a></li>
        
        </ul>
		</div>

		<div id="idcon2">
			
			<img class="cls4" src="https://image.freepik.com/free-vector/christmas-website-template-with-christmas-book-snow-globe-candle_7993-601.jpg" alt="banner">
		</div>
	</div>
	<div id="category">
		<div id="logosale">
			<div style="background-color: red" class="clslogo">
				<img style="width: 310px; height: 233px" src="https://salt.tikicdn.com/ts/categoryblock/28/43/2e/808cdbef17859cbe085a0a6560b1eaa3.jpg">
			</div>
			<div style="background-color: black" class="clslogo">
				<img style="width: 310px; height: 233px" src="https://www.leafdesign.vn/wp-content/uploads/2017/09/15440457_1182575661850645_7884522294553014564_o-1170x600.jpg">
			</div>
			<div style="background-color: yellow" class="clslogo">
				<img style="width: 310px; height: 233px" src="https://media.bizwebmedia.net/sites/99870/data/Upload/2015/12/banner.jpg">
			</div> 
			<div style="background-color: pink" class="clslogo">
				<img style="width: 310px; height: 233px" src="https://shop.scholastic.com/content/dam/Commerce/Parents/Squares/sales-bargains-books-under-5-square.jpg">
			</div>
		</div>

		<div id="product">
			<div id="hot">
				<div id="title">
					<div id="title1"><img style="width: 75px; height: 68px" src="https://www.nicepng.com/png/detail/10-101646_borrow-library-books-book-stack-books-icon.png"></div>
					<div id="title2"><p style="color: white; font-size: 25px">CÁC SẢN PHẨM ĐANG BÁN CHẠY NHẤT</p></div>
				</div>
				<div id="hot1">
					<?php
			$connect=mysqli_connect('localhost','root','','bookshop');
			if(!$connect){
				echo "kết nối k thành công";
			}
			
			$sql="select * from product order by product_id ASC limit 3";
			$result=mysqli_query($connect,$sql);
			while ($row_pro=mysqli_fetch_array($result)) {
				$product_id=$row_pro['product_id'];
				$product_name=$row_pro['name'];
				$product_price=$row_pro['price'];
				$product_suppliers=$row_pro['author'];
				$category_id=$row_pro['category_id'];
				$product_img=$row_pro['img'];

				echo "
			
				<div class='hot2'>

						
						<img style='width: 200px; height: 280px; padding-left: 50px' src='img/$product_img'>
						<h3 align='center'>$product_name</h3>
						<p style='text-align: center'>Price:$product_price</p>
						<a style='padding-left: 50px' href='details.php?product_id=$product_id'>Details</a>
						<a style='float: right ;padding-right: 50px'>
							<input  type='button' name='but' id='button' value='Add to cart'>
						</a>

					</div>

				";


				
			}

			?>
					
					
				</div>
			</div>
		</div>
	</div>

	<div id="footer">
	<div id="footer1">
		<img style="width: 355px; height: 90px" src="https://jobseekers.vn/wp-content/uploads/2019/05/Quy-Chuan-Logo.png">
		<p style="padding-left: 20px">Floor 5, 387-389 Hai Ba Trung, District 3, HCMCHo Chi Minh City Book Release Joint Stock Company - FAHASA <br>60 - 62 Le Loi, District 1, City. HCM City, Vietnam <br>Fahasa.com accepts online orders and delivery. Does NOT support ordering and receiving goods directly at the office as well as all Fahasa Systems nationwide.</p><br>
		
	</div>
		<div id="footer2">
			<div id="ft1">
				<div id="ft3">
					<p style="padding-left: 10px">
						<b>SERVICE</b><br><br>
							terms of use<br><br>
							Privacy Policy<br><br>
							Introducing Fahasa<br><br>
							Central system - bookstore
					</p>
				</div>
				<div id="ft4">
					<p>
						<b>SUPPORT</b><br><br>
						Change - pay - refund policy<br><br>
						Wholesale policy<br><br>
						Mode of transportation<br><br>
						Payment method and contract issuance
					</p>
				</div>
				<div id="ft5">
					<p>
						<b>MY ACCOUNT</b><br><br>
						Login / Create new account<br><br>
						Change of customer address<br><br>
						Account details<br><br>
						Purchase history
					</p>
				</div>
			</div>

			<div id="ft2">
				
<p style="padding-left: 20px">CONTACT Address: 60-62 Le Loi, District 1, City. HCM City    Email:info@fahasa.com  Phone:1900636467</p>
			</div>
		</div>
	</div>

	
</body>
</html>
