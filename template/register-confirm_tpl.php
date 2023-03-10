<script>

var timeleft = 10;
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
    setTimeout('Redirect()', 11500);   

</script>

<div class="d-flex justify-content-md-center" >
<img src="/img/pages-content/loading.webp" class="img-fluid" alt="Loading...">
</div>
<br>
<div class="d-flex justify-content-md-center" >
<div class="alert alert-dismissible alert-success">
  <center><h4 class="alert-heading">User Has Been Created!</h4></center>
  <center><p><div id="countdown"></div></p></center>
</div>
    </div>
	<br>