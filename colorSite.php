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
    <div class="col-md-3" id="red"></div>
      <div class="col-md-3" id="blue"></div>
      <div class="col-md-3" id="green"></div>
      <div class="col-md-3" id="yellow"></div>
  </div>
</div>
<?php
include("includes/footer.inc.php");
?>