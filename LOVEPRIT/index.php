<?php
$title= 'Index';
require_once 'includes/header.php'
?>

<div class="container">
<br>
<h1 class="text-center">Registration for IT Conference </h1>
</br>

<form>

  <div class="form-group">
    <label for="FirstName">First Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your First Name">
  </div>


  <div class="form-group">
    <label for="LastName">Last Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Your Last Name">
  </div>

 
  <div class="form-group">
  <label for="DateofBirth">Date of Birth</label>
    <input id="datepicker" width="276" />
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
    </div>
    
 
  <div class="form-group">
  <label for="Specialty">Specialty</label>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
  Database Admin
  </label>
  </div>
  

  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
  Software Developer
  </label>
  </div>

  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
  Web Administrator
  </label>
  </div>
  </div>

  <div class="form-group">
    <label for="Email">Email Address </label>
    <input type="email" class="form-control" id="inputEmail4"  placeholder="Your Email Address">
  </div>
 
  <div class="form-group">
    <label for="contact">Contact Number</label>
    <input type="text" class="form-control" id="contact1" placeholder="Your Contact Number">
  </div>
  
 
  <br>
  <button type="button" class="btn btn-primary btn-lg btn-block">SUBMIT</button>
  </br>

</form>
<br>
<?php require_once 'includes/footer.php' ?>
</br>
</div>

