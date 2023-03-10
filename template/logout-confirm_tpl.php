<script>

var timeleft = 5;
var downloadTimer = setInterval(function(){
  if(timeleft <= 0){
    clearInterval(downloadTimer);
    document.getElementById("countdown").innerHTML = "Redirecting.....";
  } else {
    document.getElementById("countdown").innerHTML = "Redirecting: " + timeleft;
  }
  timeleft -= 1;
}, 1000);

function Redirect() 
    {  
        window.location="login"; 
    } 
    setTimeout('Redirect()', 5150);   

</script>

<div class="d-flex justify-content-md-center" >
<img src="/img/pages-content/loading.webp" class="img-fluid" alt="Loading...">
</div>
<br>
<div class="d-flex justify-content-md-center" >
<div class="alert alert-dismissible alert-success">
  <center><h4 class="alert-heading">Log Out</h4></center>
  <center><p>Successful!</p></center>
  <center><p><div id="countdown"></div></p></center>
</div>
    </div>
	<br>