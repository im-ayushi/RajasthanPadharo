<!Doctype html>
<html>
    <head>
        <title></title>
      <style>
        .container {
  position: relative;
  width: 50%;
}

.image {
  display: inline-block;
  width: 300px;
  height: 200px;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 200px;
  width: 350px;
  opacity: 0;
  transition: .20s ease;
  background-color: darkgrey;
}

.container:hover .overlay {
  opacity: 10;
}

.text {
  color: white;
  font-size: 10px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
           
.container1 {
  position: relative;
  width: 50%;
}

.image1 {
  display: block;
  width: 300px;
  height: 200px;
}

.overlay1 {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 200px;
  width: 300px;
  opacity: 0;
  transition: .5s ease;
  background-color: gold;
}

.container1:hover .overlay1 {
  opacity: 1;
}

.text1 {
  color: black;
  font-size: 10px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}            
.container2 {
  position: relative;
  width: 50%;
}

.image2 {
  display: block;
  width: 500px;
  height: 200px;
}

.overlay2 {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 200px;
  width:500px;
  opacity: 0;
  transition: .5s ease;
  background-color: white;
}

.container2:hover .overlay2 {
  opacity: 1;
}

.text2 {
  color: black;
  font-size: 15px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
           
.container3 {
  position: relative;
  width: 50%;
}

.image3 {
  display: block;
  width: 350px;
  height: 200px;
}

.overlay3 {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 200px;
  width:350px;
  opacity: 0;
  transition: .5s ease;
  background-color: lightgray;
}

.container3:hover .overlay3 {
  opacity: 1;
}

.text3 {
  color: black;
  font-size: 15px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.container4 {
  position: relative;
  width: 50%;
}

.image4 {
  display: block;
  width: 400px;
  height: 200px;
}

.overlay4 {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 200px;
  width:400px;
  opacity: 0;
  transition: .5s ease;
  background-color: orangered;
}

.container4:hover .overlay4 {
  opacity: 1;
}

.text4 {
  color: black;
  font-size: 15px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
} 
      </style>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark"  >
  <a class="navbar-brand" href="index.php">Rajasthapadharo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto" >
      <li class="nav-item active">
        <a class="nav-link" style="color:white;" href="index.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">CONTACT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">GALLERY</a>
      </li>
    </ul>
  </div>
</nav>

<main>
  <section>
    <h3>Welcome to India</h3>
    <h1> Come and visit <span>  </span></h1>
    <p>India once is not enough.....</p>
    <a href="#" class="btn">learn more</a>
    <a href="#" class="btntwo">signup here</a>
  </section>
</main>

<div class="card-group" style="padding-top:100px;">
<div class="container">
  <img src="images/luxury.webp" alt="Avatar" width=30px height=20px class="image" >
  <div class="overlay">
    <div class="text"><center>
        <B><h3>Take A Drive </h3>
        <br>
        Udaipur<br>
        Jodhpur<br>
        Jaipur<br>
        Jaisalmer<br>
        Bikaner<br></B></center>
      </div>
  </div>
</div>

<div class="container1">
  <img src="hotel.jfif" width=20px height=30px class="image1" >
  <div class="overlay1">
    <div class="text1"><center>
        <B><h5>Best Resting Places Available</h5>
        <br>
        The Oberoi Udaivilas, Udaipur<br>
        Umaid Bhawan Palace, Jodhpur<br>
        Fairmont, Jaipur<br>
        Gaji Hotel, Jaisalmer<br>
        The Laxmi Niwas Palace, Bikaner<br></B></center>
      </div>
  </div>
</div>
   <div class="container2">
  <img src="train.jfif" width=20px height=30px class="image2" >
  <div class="overlay2">
    <div class="text2"><center>
        <B><h3>Palace on Wheels<br>
        A luxury tourist train.</h3><br><br>
        Line(s) served: New Delhi - Jaipur - Udaipur - Bharatpur - Agra - New Delhi<br>
       </B></center>
      </div>
  </div>
</div>

<div class="container3">
  <img src="food.jfif" width=30px height=20px class="image3" >
  <div class="overlay3">
    <div class="text3"><center>
        <B>
        Dal baati churma<br>
        Gatte ki subzi<br>
        Laal maans<br>
        Ker sangri<br>
        Bajra ki roti with lasun chutney<br></B></center>
      </div>
  </div>
</div>
 <div class="container4">
  <img src="places.jfif" width=30px height=20px class="image4" >
  <div class="overlay4">
    <div class="text4"><center>
        <B>
       Jain Temple – Ranakpur, Udaipur<br>
        Mehrangarh Fort, Jodhpur<br>
        Amber Fort and Palace, Jaipur<br>
        Jaisalmer Fort, Jaisalmer<br>
        Junagarh Fort, Bikaner<br></B></center>
      </div>
  </div>
</div>


<div  class="card-deck" style="padding-top:120px;padding-left:80px;padding-right:80px; padding-bottom: 30px; background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6v5Eb2lJCwX-W0sZlKUJqdQ6r_uUHdNzfpg&usqp=CAU');background-repeat: no-repeat;
background-size: cover;">
  <div class="card">
    <img class="card-img-top" src="images/fair.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Fairs and Festivals </h5>
      <p class="card-text"> Celebrating the fairs of rajasthan with its sand. In most of these fairs one can spot colourful stalls, elegant artifacts, lipsmacking delicacies and many moree...</p>
      <p class="card-text"><small class="text-muted">Lets have name of some...<br>Beneshwar fair,Pushkar fair, Nagaur fair,Camel Bikaner fair, The Kolayat fair......</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/thali.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Don't leave rajasthan without trying...</h5>
      <p class="card-text">Its cuisine is what it makes distinctive.Your journey to rajasthan is incomplete, if you have not tasted its dishes.</p>
      <p class="card-text"><small class="text-muted">Some popular dihes are<br> Dal bati churma,Rajasthani ghevar,Gujia,Ker sangri...</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/chm.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">places to visit in December</h5>
      <p class="card-text">In winter month of December, Rajasthan becomes more exciting holiday destination. <br>Here are some places to visit in december</p>
      <p class="card-text"><small class="text-muted">Mout Abu, Udaipur, Bharatpur,Mewar,Mandawa</small></p>
    </div>
  </div>
</div>

<div style="background-color:#34495E;height:170px;">
    <p style="color:white;text-align:right;padding-top:100px">@2020Rajasthapadharo</p>
</div>


<section class="my-5">
<div class="container-fluid">
  <div class="row">
    <div class= col-lg-4 col-md-4 col-12>
      <img src="images/me.jpg" class="img-fluid">
      <p background-color:yellow;> Food and restaurant </p>
    </div> 
  </div>
</div>
</section>



</body>
</html>