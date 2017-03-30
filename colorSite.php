<?php
	$title="Forside";
	$description="Velkommen";
	include("includes/head.inc.php");
include("includes/header.inc.php");
?>


<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1 class="text-center">Hvad er din favorit farve</h1>
    </div>
  </div>
  <hr>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-3" id="red" onclick="createCookie('color',id,7)"></div>
      <div class="col-md-3" id="blue" onclick="createCookie('color',id,7)"></div>
      <div class="col-md-3" id="green" onclick="createCookie('color',id,7)"></div>
      <div class="col-md-3" id="yellow" onclick="createCookie('color',id,7)"></div>
  </div>
</div>
<!--

<button onclick="something()">vælg favorit farve</button>
-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>

<script src="js/functions.js"></script>
<!--
<script src="js/jscolor.js"></script>

<input class="jscolor" id="jscolor" value="ab2567">




<script>

    function something(){
        var yy = $("#jscolor").attr( "value" );
        console.log(yy+" h");
        createCookie('color',yy,7);
    }

</script>

-->


<?php
include("includes/footer.inc.php");
?>