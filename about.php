
  <?php
 session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <style type="text/css">
  th, td{
    padding: 8px;
    text-align: left;
  }
  tr{
    padding: 2px;
  }
  
</style>
  <title>Central Library</title>
  <link rel="stylesheet" type="text/css" href="nag.css">
 </head>
 <body style="background-color: #e0e0d1"> 
 <div class="heading">
 <h1 style="text-align: center;">Library</h1>
 <div class ="message" style="display: none; float:right;margin-top: -50px;background-color: rgb(54, 216, 62); border:1px solid green;">
<?php echo  'Welcome, ' .$_SESSION['id']  .'!';
?>
 </div>
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
  <?php
  if($_SESSION){
  echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    
       
        $(".message").show();
        
    
  });
  </script>';
  echo '<li style="float:right;"><a href="studentlogout.php">Logout</a></li>';
} else{
  echo '<li style="float: right" class="dropdown">
    <a href="#" class="dropbtn">Login/Sign-up</a>
    <div class="dropdown-content">
      <a href="login.php" target="_self">Login</a>
          <a href="signup.php" target="_self">Signup</a> 
        </div>
  </li>';
 }
 ?>
 </ul>
</div>
<h1 style="margin-left: 20px;">HISTORY</h1>
<div style="width: 45%;margin-left: 20px;margin-top: 20px; ">
<p style="font-style: italic; font-size: 100%;"> This central library was established in 2017 by the students of NITC as a  Web Programming Project. The Central library is shifted to Independent Building infront of Institute Main Guest House.<br><br>

In view of latest development and future needs, the Institute decided to build Millennium Library Building with state-of-the-art facilities infont of Administrative Building. The first phase of Millennium Library Building was inaugurated by the admins,the creator 
of the library (<b>Nagarjuna ,Bhanu Prakash and Chandra sai)</b>and the Second Phase of Millennium Library Building and Digital Knowledge Center - a unique facility with 101 computer systems facilitating access to large number of e-resources on Level-II of the Central Library was inaugurated by our Web Programming course teacher, <b>Suvya</b>.<br><br>

The Central LIbrary has also implemented Integrated RFID Technology, Smart Card, ISO-9001:2000 Standards, Contactless Smart Card Enabled Access Control System, Virtual Reference Desk, Electronic Book Drop System, Auto Check in and Check out Systems, Z39.50, Web Portal, Research Carrels, Media Resource Center with 200 seating capacity, Students Discussion Hall, Automatic Bindery and world-class facilities, services, multi format resources. </p><br><br>
</div>

<div class="suv">
<img src="glib1.jpg" alt="library">


	</div>
	<h2>LIBRARY TIMINGS</h2><br>



	<table style="border-collapse: collapse;width: 100%" border="2" align="center">
  <tr>
    <th></th>
    <th>Monday to Friday</th> 
    <th>Sat, Sun</th>
  </tr>
  <tr>
    <td>Study/ Ref.</td>
    <td>08:00 AM - 12:00 AM</td>
    <td>09:00 AM - 05:30 PM</td>
  </tr>
  <tr>
    <td>Issue-Ret.</td>
    <td>08:30 AM - 08:30 PM</td>
    <td>09:00 AM - 05:00 PM</td>
  </tr>
  <tr>
    <td>Enquiries</td>
    <td>08:00 AM - 11:30 PM</td>
    <td>09:00 AM - 05:00 PM</td>
  </tr>
  <tr>
    <td>Stacks</td>
    <td>08:00 AM - 12:00 AM</td>
    <td>09:00 AM - 05:00 PM</td>
  </tr>
</table>

<h2>InterLibrary Loan</h2>
<p> The books / journals not available in the collections, are arranged by the Central Library on request from external sources under resource sharing arrangements. </p>


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