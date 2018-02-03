<!DOCTYPE html>
 <html>
 <head>
  <title>Central Library</title>
  <link rel="stylesheet" type="text/css" href="Home page2.css">
  <script type="text/javascript">
  function verify(pwd) {
  var str=pwd.value;
      var len=pwd.value.length;
      var up=0,low=0,num=0,ss=0;
            if(len<8||len>15){
              alert("Password should contain min 8 characters and max 15");
              return;
            }
      if(str[0]>='A'&&str[0]<='Z'||str[0]>='a'&&str[0]<='z'){
      for (var i = 0; i <len; i++) {
        if(str[i]>='A'&&str[i]<='Z'){up++;}
        else if(str[i]>='a'&&str[i]<='z'){low++;}
        else if(str[i]>='0'&&str[i]<='9'){num++;}
        else{ss++;}
      }
    }
    else{
      alert("First character must be a alphabet");
      return;
    }
    if(up==0){
      alert("Password must contain atleast one upper case");
      return;
    }
    if(low==0){
      alert("Password must contain atleast one lower case");
      return;
    }
    if(num==0){
      alert("Password must contain atleast one number");
      return;
    }
    if(ss==0){
      alert("Password must have atleast one special symbol");
    }
    }
    
  </script>
 </head>
 <body style="background-color: #e0e0d1"> 
 <div class="heading">
 <h1 style="text-align: center;">Library</h1>
 </div>
 <div class="bhanu">
 <ul>
  <li><a href="samplepage.php"> Home</a></li>
  <li  class="dropdown">
    <a href="#" class="dropbtn">Services</a>
    <div class="dropdown-content" style="width:100px">
        
        <a href="catalog.php" >Catalog</a>
        <a href="renewal.php">Book Renewal</a>
        <a href="return.php">Book Return</a>
        <a href="eb.php">E-books</a>
        <a href="viewmybooks.php">View My Books</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Journals</a>
    <div class="dropdown-content">
      <a href="j17.php">2017</a>
      <a href="j16.php">2016</a>
      <a href="j15.php">2015</a>
    </div>
  </li>
  <li><a href="gallery.php">Gallery</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
  <li style="float: right" class="dropdown">
    <a href="#" class="dropbtn">Login/Sign-up</a>
    <div class="dropdown-content">
      <a href="login.php" target="_self">Login</a>
          <a href="signup.php" target="_self">Signup</a> 
        </div>
  </li>
</ul>
</div>
<div style="background-image: url(back1.jpg); background-size: 100% 100%">
<div class="login-page">
  <div class="form">
      <h1 style="text-align: center; position: absolute; top: -20px; left: 120px; padding-top:5px; padding-bottom: 0px;">SIGN-UP</h1>
      <form class="login-form" method="POST" action="signupaction.php">
      <input type="text" placeholder="First name" name="fname" required />
      <input type="text" placeholder="Last name" name="lname" required/>
      <input type="text" placeholder="E-mail" name="email" required />
      <input type="text" placeholder="ID" name="id" required/>
      <input type="password" placeholder="password" name="password"required/>
      <button>Signup</button>
      <p class="message">Already registered? <a href="login.php"> Log in</a></p>
    </form>
  </div>
</div>
<br>
</div>

<div id="fot">

  <p id="prod"> PRODUCT </p>
  <ul id="ulc0">
  <li> <a href="#" id="lif"> Business </a> </li>
  <br>
  <li> <a href="#" id="lif"> Compare </a> </li>
  <br>
<li> <a href="#" id="lif"> Feature </a> </li>
 <br>
<li> <a href="#" id="lif"> Pricing </a> </li>
 </ul>

 <p id="comp"> COMPANY </p>
  <ul id="ulc">
  <li> <a href="#" id="lif1"> About Us </a> </li>
  <br>
  <li> <a href="#" id="lif1"> Blog </a> </li>
  <br>
<li> <a href="#" id="lif1"> News </a> </li>
 <br>
<li> <a href="#" id="lif1"> Contact Us </a> </li>
 </ul>

 <p id="learn"> LEARN MORE </p>
  <ul id="ulc3">
  <li> <a href="#" id="lif9"> Support </a> </li>
  <br>
  <li> <a href="#" id="lif9"> Developers </a> </li>
  <br>
<li> <a href="#" id="lif9"> Affillate Program </a> </li>
 <br>
<li> <a href="#" id="lif9"> Referral Program </a> </li>
 </ul>
 <hr>

<p id="copyri"> &#169 Central Library 2017 Design Room,Inc. All Rights Reserverd. </p> 

</div>
</body>
</html>

 
