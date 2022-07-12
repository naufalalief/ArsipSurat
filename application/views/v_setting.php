<!DOCTYPE html>
<html>
<style>
body, html {
    height: 100%;
    margin: 0;
}

.bgimg {
    background-image: url('<?php echo base_url() ?>assets/img/123.jpg');
    height: 100%;
    background-position: center;
    background-size: cover;
    position: relative;
    color: white;
    font-family: "Courier New", Courier, monospace;
    font-size: 25px;
}

.topleft {
    position: absolute;
    top: 0;
    left: 16px;
}

.bottomleft {
    color: black;
    position: absolute;
    bottom: 0;
    left: 16px;
}

.middle {
    color: black;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}
hr {
    margin: auto;
    width: 100%;
}
    input{
        text-align: center;
        border-radius: 4px;
    }
    input:hover{
        border-color: black;
    }
    button{
        text-align: center;
        background-color: rgb(234,244,220); 
        border-radius: 4px;
        width: 150px;
    }
    button:hover{
        border-color: black;
    }
::-webkit-input-placeholder {
   color: #808080;
   text-align: center;

}

:-moz-placeholder {
   color: #808080;
   text-align: center;

}
</style>
<title>Coming Soon</title>
<body class="bgimg">

<div class="bgimg">
  <div class="middle">
    <h1>COMING SOON</h1>
    <hr>
    <p id="demo"></p>
  </div>
  <div class="bottomleft">                        
    &copy; Naufal Dragneel <?php
    $copyYear = 2018; // Set your website start date
    $curYear = date('Y'); // Keeps the second year updated
    echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
    ?>

</div>
<script>
// Set the date we're counting down to
var countDownDate = new Date("Mar 31, 2018 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

</body>
</html>
