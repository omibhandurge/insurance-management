
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/w3css/3/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<body>

<!-- Navigation -->
<nav class="w3-bar w3-black">
  <a href="#home" class="w3-button w3-bar-item">Home</a>
 
   <p align="right">
 <button type="button"><a href="login.php">Admin</button></a>
</p>
</nav>

<!-- Slide Show -->
<section>
  <img class="mySlides" src="1.jpg.jpg"
  style="width:100%">
  <img class="mySlides" src="2.jpg"
  style="width:100%">
  <img class="mySlides" src="3.jpg"
  style="width:100%">
</section>

<!-- Band Description -->

  <h2 class="w3-wide"><marquee>INSURANCE</marquee></h2>
  <p class="w3-opacity"><i>insurance</i></p>
  <p class="w3-justify">Insurance is a means of protection from financial loss. It is a form of risk management, primarily used to hedge against the risk of a contingent or uncertain loss.

An entity which provides insurance is known as an insurer, an insurance company, an insurance carrier or an underwriter. A person or entity who buys insurance is known as a policyholder, while a person or entity covered under the policy is called an insured. Policyholder and insured are often used as but are not necessarily synonyms, as coverage can sometimes extend to additional insureds who did not buy the insurance. The insurance transaction involves the policyholder assuming a guaranteed, known, and relatively small loss in the form of payment to the insurer in exchange for the insurer's promise to compensate the insured in the event of a covered loss. The loss may or may not be financial, but it must be reducible to financial terms, and usually involves something in which the insured has an insurable interest established by ownership, possession, or pre-existing relationship..</p>




<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
 
<center><button type="button"><a href="client.php">Client Registration</button></a></center>
</footer>

<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>

</body>
</html>

