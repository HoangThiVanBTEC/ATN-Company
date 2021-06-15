<html>
<head><meta charset="utf-8">
  <title>gioithieu</title>
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
  margin-top: 100px;
  width: 1250px;
  height: 350px;
  
}

#footer1{
  width: 425px;
  height: 350px;
  background-color: #CCCCCC;
  float: left;
  margin-top: 75px
}
#footer2{
  width:823px;
  height: 350px;
  background-color: #CCCCCC;
  float: right;
  margin-top: 75px;
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

*{
 
  transition: all 0.3s;
}
#mainnav{
  padding: 10px;
  margin: 10px;
}
#mainnav ul{
  background:white ;
  list-style: none;
  padding: 0px;
  width: 230px;
  text-align: left;
   border-radius: 4px;
}
#mainnav ul li{
  position: relative;
  width: 230px;
  height: 40px;
  line-height: 40px;
  border: 1px solid #DDDDDD;
  
}
#mainnav ul .thefirst{
  background:orange;
}
#mainnav ul li a{
  text-decoration: none;
  color: orange;
  font-weight: bold;
  padding: 0 16px;
  display: block;
}
#mainnav li:hover{
  background: gray;
}



#mainnav1{
  padding: 10px;
  margin: 10px;

}
#mainnav1 ul{
  background:white ;
  list-style: none;
  padding: 0px;
  width: 230px;
  text-align: left;
   border-radius: 4px;
}
#mainnav1 ul li{
  position: relative;
  width: 230px;
  height: 40px;
  line-height: 40px;
  border: 1px solid #DDDDDD;
  
}
#mainnav1 ul .thesecond{
  background:orange;
}
#mainnav1 ul li a{
  text-decoration: none;
  color: orange;
  font-weight: bold;
  padding: 0 16px;
  display: block;
}
#mainnav1 li:hover{
  background: gray;
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
        <form >
          <div ><input id="form1" style="width: 80%; height: 40px"  type="text" placeholder="Search.." name="search"></div>
        <div ><input id="form2" type="submit" name="submit" value="Search"></div>
        </form>
      </div>
      </li>
      <li class="cls2" style="text-align: center;">
        <a target="blank" href="#"><img style="width: 30px; height: 30px" src="https://icons.iconarchive.com/icons/alecive/flatwoken/256/Apps-Google-Keep-icon.png"><p style="font-size:10px;margin-top: 3px; color: orange"> Giới thiệu</p></a>
      </li>
      <li class="cls2" style="width: 100px; text-align: center">
        <a style="color: orange" target="blank" href="admin/quanlisp.html"><img style="width: 30px; height: 30px; background-color: orange" src="https://www.kindpng.com/picc/m/237-2374886_free-vector-warehouse-inventory-warehouse-icon-png-transparent.png"><p style="font-size: 10px; margin-top: 3px;">quản lí sản phẩm</p></a>
      </li>
      <li class="cls2" style="width: 60px; text-align: center;">
        <i style="color: orange" class="fa fa-cart-plus fa-2x"><a href="#"><p style="font-size: 10px; margin-top: 3px;color: orange">Giỏ hàng</p></a></i>
      </li>
      <li class="cls2"  style="width: 60px; text-align: center;">
        <i style="color: orange"  class="fa fa-user fa-2x "><a href="admin/login.html"><p style="font-size: 10px; margin-top: 3px;color: orange">Đăng nhập</p></a></i>
      </li>
      <li class="cls2" style="width: 60px; text-align: center;">
        <i style="color: orange" class="fa fa-bell fa-2x "><a href="#"><p style="font-size: 10px; margin-top: 3px;color: orange">Thông báo</p></a></i>
      </li>
      
    </ul>
  </div>
  </div>
  <!--***********************************************************************-->
  <div id="content">

  <div class="body1" style="width: 1255px;height: 550px" >
    <div class="left" style="float: left;">
    
    <div id="mainnav">
  <ul>
    <li class="thefirst"><a style="color: white" href="#">NHÀ PHÁT HÀNH</a>
      
    </li>
    <li><a href="#">Kim Đồng </a></li>
    <li><a href="#">Nhã Nam</a></li>
    <li><a href="#">Alphabooks</a></li>
    <li><a href="#">NXB Trẻ</a></li>
    <li><a href="#">Thái Hà</a></li>
    <li><a href="#">Hoa Học Trò</a></li>
    <li><a href="#">Quảng Văn</a></li>
    <li><a href="#">First News - Trí Việt</a></li>
    <li><a href="#">Skybooks</a></li>
    <li><a href="#">Newspaper</a></li>
  </ul>
</div>
</div>



<div class="right">
  <img style="width: 950px; height: 500px; float: right;padding-right: 20px; margin-top: 30px" src="https://cdn0.fahasa.com/media/wysiwyg/Thang-12-2019/MERRY-CHRISTMAS-920x420.jpg">
</div>

  </div>
  
  <div class="body2" >
    <div class="left1" style="float: left;">
       <div id="mainnav1" style="padding-top: 0px;">
  <ul>
    <li class="thesecond"><a style="white" href="#">TÁC GIẢ</a>
      
    </li>
    <li><a href="#">Nguyễn NHật Ánh </a></li>
    <li><a href="#">Trang Hạ</a></li>
    <li><a href="#">Tony Buổi Sáng</a></li>
    <li><a href="#">Agatha Christie</a></li>
    <li><a href="#">J.K.Rowling</a></li>
    <li><a href="#">Hoa Học Trò</a></li>
    <li><a href="#">Quảng Văn</a></li>
    <li><a href="#">First News - Trí Việt</a></li>
    <li><a href="#">Skybooks</a></li>
  </ul>
</div>
    </div>
    <div class="right1" style="float: right;  width: 960px;">
      
      <h2 style="padding-left: 10px">Giới thiệu </h2>
      <hr style="background-color: black; size: 4px" >
      <br>
      <table>
        <tr>
          <td>
            <img style="width: 500px; height: 260px" src="https://azoka.vn/files/2020/09/lich-nghi-tet-nguyen-dan-tan-suu-nam-2021.jpg">
          </td>
          <td>
            <p><h3>Thông Báo Nghỉ Tết Kỷ Hợi 2019</h3>

                
                Pibook xin thông báo đến các bạn lịch nghỉ tết Kỷ Hợi 2019: từ ngày 01/02 (tức ngày 27 âm) đến ngày 11/02 (tức ngày mùng 7 âm). Trong thời gian nghỉ tết, Pibook sẽ tạm thời ngưng gửi đơn hàng, trả lời hotline, email và tin nhắn trên fanpage. Mọi thắc mắc về đơn hàng hay sách sẽ được giải đáp đầy đủ và nhanh chóng khi chúng mình quay trở lại ạ.</p>
          </td>
        </tr>
      </table>
      <br>
      <hr style="size: 4px; background-color: black">
      <br>
      <table>
         <tr>
          <td>
            <img style="width: 500px; height: 260px" src="https://cdn0.fahasa.com/media/wysiwyg/Thang-12-2019/don-giang-sinh-920x420.jpg">
          </td>
          <td>
            <p><h3>Đợt sale khủng Noel 2020</h3>
                FAHASA trân trọng gửi đến Quý khách hàng chương trình khuyến mãi cực lớn từ ngày 01.12 - 31.12.2017 với với mức giảm giá lên đến 50% cho gần 100.000 sản phẩm văn phòng phẩm, dụng cụ học sinh từ các nhà cung cấp lớn trong và ngoài nước. 
                Hứa hẹn chương trình khuyến mãi của FAHASA nhân dịp cuối năm sẽ như lời cám ơn dành cho Quý khách hàng và Quý doanh nghiệp đã luôn yêu mến và đồng hành với FAHASA trong suốt một năm qua.
                </p>
          </td>
        </tr>

      </table>
    </div>
  </div>
</div>

  <div id="footer" >
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


</div>

</body>
