<?php
	$title="Forside";
	$description="Velkommen";
	include("includes/head.inc.php");
include("includes/header.inc.php");
?>


<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1 class="text-center">Color site</h1>
    </div>
  </div>
  <hr>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-3" id="red" onclick="savecolor(id)"></div>
      <div class="col-md-3" id="blue" onclick="savecolor(id)"></div>
      <div class="col-md-3" id="green" onclick="savecolor(id)"></div>
      <div class="col-md-3" id="yellow" onclick="savecolor(id)"></div>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>

<script src="js/functions.js"></script>
<?php
include("includes/footer.inc.php");
?>