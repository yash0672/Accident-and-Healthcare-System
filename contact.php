<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
<!--font awesome bootstrap CDN-->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" href="style.css">

  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <style>
.card {
    position: absolute;
    top: 50%;
    left: 20%;
    transform: translate(-50%,-50%);
    width: 360px;
    height: 360px;
    background: #000;
}
.card .image {
    width: 100%;
    height: 100%;
    overflow: hidden;
}
.card .image img {
    width: 100%;
    transition: .5s;
}
.card:hover .image img {
    opacity: .5;
    transform: translateX(30%);/100%/
}
.card .details {
    position: absolute;
    top: 0;
    left: 0;
    width: 70%;/100%/
    height: 100%;
    background: #ffc107;
    transition: .5s;
    transform-origin: left;
    transform: perspective(2000px) rotateY(-90deg);
}
.card:hover .details {
    transform: perspective(2000px) rotateY(0deg);
}
.card .details .center {
    padding: 20px;
    text-align: center;
    background: #fff;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}
.card .details .center h1 {
    margin: 0;
    padding: 0;
    color: #ff3636;
    line-height: 20px;
    font-size: 20px;
    text-transform: uppercase;
}
.card .details .center h1 span {
    font-size: 14px;
    color: #262626;
}
.card .details .center p {
    margin: 10px 0;
    padding: 0;
    color: #262626;
}
.card .details .center ul {
    margin: 10px auto 0;
    padding: 0;
    display: table;
}
.card .details .center ul li {
    list-style: none;
    margin: 0 5px;
    float: left;
}
.card .details .center ul li a {
    display: block;
    background: #262626;
    color: #fff;
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    transform: .5s;
}
.card .details .center ul li a:hover {
    background: #ff3636;
}

.card-2 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 360px;
    height: 360px;
    background: #000;
}
.card-2 .image {
    width: 100%;
    height: 100%;
    overflow: hidden;
}
.card-2 .image img {
    width: 100%;
    transition: .5s;
}
.card-2:hover .image img {
    opacity: .5;
    transform: translateX(30%);/100%/
}
.card-2 .details {
    position: absolute;
    top: 0;
    left: 0;
    width: 70%;/100%/
    height: 100%;
    background: #ffc107;
    transition: .5s;
    transform-origin: left;
    transform: perspective(2000px) rotateY(-90deg);
}
.card-2:hover .details {
    transform: perspective(2000px) rotateY(0deg);
}
.card-2 .details .center {
    padding: 20px;
    text-align: center;
    background: #fff;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}
.card-2 .details .center h1 {
    margin: 0;
    padding: 0;
    color: #ff3636;
    line-height: 20px;
    font-size: 20px;
    text-transform: uppercase;
}
.card-2 .details .center h1 span {
    font-size: 14px;
    color: #262626;
}
.card-2 .details .center p {
    margin: 10px 0;
    padding: 0;
    color: #262626;
}
.card-2 .details .center ul {
    margin: 10px auto 0;
    padding: 0;
    display: table;
}
.card-2 .details .center ul li {
    list-style: none;
    margin: 0 5px;
    float: left;
}
.card-2 .details .center ul li a {
    display: block;
    background: #262626;
    color: #fff;
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    transform: .5s;
}
.card-2 .details .center ul li a:hover {
    background: #ff3636;
}

.card-3 {
    position: absolute;
    top: 50%;
    left: 80%;
    transform: translate(-50%,-50%);
    width: 360px;
    height: 360px;
    background: #000;
}
.card-3 .image {
    width: 100%;
    height: 100%;
    overflow: hidden;
}
.card-3 .image img {
    width: 100%;
    transition: .5s;
}
.card-3:hover .image img {
    opacity: .5;
    transform: translateX(30%);/100%/
}
.card-3 .details {
    position: absolute;
    top: 0;
    left: 0;
    width: 70%;/100%/
    height: 100%;
    background: #ffc107;
    transition: .5s;
    transform-origin: left;
    transform: perspective(2000px) rotateY(-90deg);
}
.card-3:hover .details {
    transform: perspective(2000px) rotateY(0deg);
}
.card-3 .details .center {
    padding: 20px;
    text-align: center;
    background: #fff;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}
.card-3 .details .center h1 {
    margin: 0;
    padding: 0;
    color: #ff3636;
    line-height: 20px;
    font-size: 20px;
    text-transform: uppercase;
}
.card-3 .details .center h1 span {
    font-size: 14px;
    color: #262626;
}
.card-3 .details .center p {
    margin: 10px 0;
    padding: 0;
    color: #262626;
}
.card-3 .details .center ul {
    margin: 10px auto 0;
    padding: 0;
    display: table;
}
.card-3 .details .center ul li {
    list-style: none;
    margin: 0 5px;
    float: left;
}
.card-3 .details .center ul li a {
    display: block;
    background: #262626;
    color: #fff;
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    transform: .5s;
}
.card-3 .details .center ul li a:hover {
    background: #ff3636;
}
  </style>
</head>

<body background="images/cont.jpg" style="width: 100%;">

<h1 style="text-align: center; margin-top: 70px; font-size: 73; color: white ">Contact Us</h1>
  <div class="card">
    <div class="image">
      <img src="images/sparsh.jpg"/>
    </div>
    <div class="details">
      <div class="center">
        <h1>Sparsh Tiwari<br><span>Web Developer</span></h1>
        <ul>
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="card-2">
    <div class="image">
      <img src="images/viral.jpeg"/>
    </div>
    <div class="details">
      <div class="center">
        <h1>Viral Khatri<br><span>Web Designer</span></h1>
        <ul>
          <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          <li><a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="card-3">
    <div class="image">
      <img src="images/yash.jpg"/>
    </div>
    <div class="details">
      <div class="center">
        <h1>Yash Yadav<br><span>Database Administrator</span></h1>
        <ul>
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>