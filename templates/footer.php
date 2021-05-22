<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    footer {
  text-align: center;
  border-radius: 6px;
  padding: 2%;
  background-color: rgb(20, 19, 19);
  color: white;
}

  .social-menu{
    display: flex;
    justify-content: space-around;
  }
  .social-menu li {
    display: flex;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: relative;
    font-size: 50px;
    transform: rotate(45deg);
    overflow: hidden;
    transition: all .5s ease-in;
  }
  .social-menu li:before {
    content:'';
    display: block;
    width: 50%;
    height: 100%;
    position: absolute;
    z-index: -2;
  }
  .social-menu li:after {
    content:'';
    display: block;
    width: 100%;
    height: 100%;
    border-radius: 50%;
  position: absolute;
    top: 0;
    right: 50%;
    z-index: -3;
    transition: all .5s ease-in-out;
    opacity: .5;
  }
  .social-menu li a {
    color: white;
    
   
    text-shadow: 0 2px 0 rgb(2,2,2);
    transform: rotate(-45deg);
    transition: all .5s ease-in;
  }
  
  .social-menu li:hover {
    transform: rotate(765deg);
  }
  .social-menu li:hover:after {
    right: 0%;
  }
  .social-menu li:hover a {
     transform: rotate(-765deg);
  }
  .social-menu li:nth-of-type(2):before,
  .social-menu li:nth-of-type(2):after {
    background: #f08a99;

  }
  .social-menu li:nth-of-type(1):before,
  .social-menu li:nth-of-type(1):after {
    background: #4d8acf;
  }
  .social-menu li:nth-of-type(3):before,
  ul li:nth-of-type(3):after {
    background: #FFFC00;
  }
  .social-menu li:nth-of-type(4):before,
  .social-menu li:nth-of-type(4):after {
    background: #36bd14;
  }
  .cp-text{
       color: white;
        text-shadow: 0 1px rgba(255, 255, 255, 0.1);
    }

</style>
 <footer>
     
    <!-- <body style="background:#777; text-align: center; padding:5%;"> -->
        
<ul class="social-menu">
    <li><a href="https://www.facebook.com/narmin.shirwan.9"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Finstagram.com%2Fposhin.online%3Figshid%3Dy1pwpvknooe7%26fbclid%3DIwAR2fJbGofUgNGP6MG2c-Ckx2OTzE_k7Pgwi7DIr9eVfKlQx6bom7SM7sjNs&h=AT32AsYvsjVMjC-GIqhvn0OY7asEQYgB7RpQ6NMofjbLkun4Zr8mq1jH6nVWS2pstnrMhZdGWKIMVx9IsE4m0oPq3eY9I4AhlVuiyqnFzdSy8QfaO54DX8NpG1T6nHu6ETIe8A"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href=""><i class="fa fa-snapchat" aria-hidden="true"></i></a></li>
          <li><a href=""><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
        </ul>
      

       <b class="cp-text"> پۆشین بازار: 2020-<?php echo date("Y");?> ©</b>
        
        
    </footer>