<!Doctype html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
   
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Rajasthapadharo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
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

<div>
<hr style="border: 2px solid black;">
<h1 style="text-align: center;padding-top: 70px;">CONTACT</h1>
<p style="text-align: center; padding-top:9px;">Don’t hesitate to reach out with the contact information below, or send a message using the form.</p>
</div>

<h3 style="text-align:center; padding-top:50px;padding-bottom: 30px;">Send your Query...</h3>

<div class="container">
  <form action="userinfo.php" method="post">
    <label for="fname">First Name</label>
    <input type="text" name="firstname" placeholder="Your name.." >

    <label for="lname">Last Name</label>
    <input type="text"  name="lastname" placeholder="Your last name.." >

    <label for="country">Country</label>
    <input type="text"  name="country" placeholder="Your country.." >

    <label for="email">Email</label>
    <input type="text"  name="email" placeholder="Your email.." >

    <label for="comment">Comment</label>
    <textarea id="comment" name="comment" placeholder="Write something.." style="height:200px" ></textarea>

    <input type="submit" value="Submit">
    <input type="hidden" name="id" value="<?= $id ?>" />
  </form>
</div>

<div style="background-color:black;height:170px;">
    <p style="color:white;text-align:right;padding-top:100px">@2020Rajasthapadharo</p>
</div>
</body>
</html>