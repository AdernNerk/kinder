<div class="container-fluid nav d-none d-lg-block fixed-top shadow-sm">
<div class="container py-4">
<div class="btn-group">
<a href="./index.php" class="btn"><div class="button float-left">Kinder Polyfarms</div></a>
</div>
<div class="btn-group float-right">
<a href="./shop.php" class="btn shop"><div class="button float-right">Shop</div></a>
</div>
<div class="btn-group float-right">
<a href="./cart.php" class="btn"><div class="button float-right">
	<svg class="bi bi-bag-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M1 4h14v10a2 2 0 01-2 2H3a2 2 0 01-2-2V4zm7-2.5A2.5 2.5 0 005.5 4h-1a3.5 3.5 0 117 0h-1A2.5 2.5 0 008 1.5z"/>
</svg>
	<div id="item-count">0</div>
</div></a>
</div>
<div class="btn-group float-right">
<?php
if(isset($_SESSION['Kinder Polyfarms']))
{
if(isset($_SESSION['Kinder Polyfarms checker']))
{
if($_SESSION['Kinder Polyfarms checker']=="admin")
{
echo'
<a class="btn dropdown-toggle" href="./admin-dashboard.php" id="navLogin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Dashboard
</a>
<div class="dropdown-menu">
<a class="btn dropdown-item text-dark" href="./admin-dashboard.php">Dashboard</a>
<a class="btn dropdown-item text-dark" href="./logout.php">logout</a>
</div>
';
}
else
{
echo'
<a class="btn dropdown-toggle" href="./dashboard.php" id="navLogin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Dashboard
</a>
<div class="dropdown-menu">
<a class="btn dropdown-item text-dark" href="./dashboard.php">Dashboard</a>
<a class="btn dropdown-item text-dark" href="./logout.php">logout</a>
</div>
';
}
}
else
{
echo'
<a class="btn dropdown-toggle" href="#" id="navLogin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Login
</a>
<div class="dropdown-menu">
<a class="btn dropdown-item text-dark" href="./login.php">Login</a>
<a class="btn dropdown-item text-dark" href="./signup.php">Signup</a>
</div>
';
}
}
else
{
echo'
<a class="btn dropdown-toggle" href="#" id="navLogin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Login
</a>
<div class="dropdown-menu">
<a class="btn dropdown-item text-dark" href="./login.php">Login</a>
<a class="btn dropdown-item text-dark" href="./signup.php">Signup</a>
</div>
';
}
?>
</div>
<div class="btn-group float-right">
<a class="btn dropdown-toggle" href="#" id="navContact" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Contact Us
</a>
<div class="dropdown-menu">
<a class="btn dropdown-item text-dark" href="./contact.php">Contact Us</a>
<a class="btn dropdown-item text-dark" href="./faq.php">FAQ</a>
<a class="btn dropdown-item text-dark" href="./contact.php#testimonial">Testimonial</a>
<a class="btn dropdown-item text-dark" href="./feedback.php">Feedback</a>
<a class="btn dropdown-item text-dark" href="./report.php">Report Issue</a>
</div>
</div>
<div class="btn-group float-right">
<a class="btn dropdown-toggle" href="#" id="navAbout" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
More
</a>
<div class="dropdown-menu">
<a class="btn dropdown-item text-dark" href="./about.php">About Us</a>
<a class="btn dropdown-item text-dark" href="./how-to.php">News</a>
<a class="btn dropdown-item text-dark" href="./how-to.php">Blog's</a>
<a class="btn dropdown-item text-dark" href="./how-to.php">Coupon Code's</a>
<a class="btn dropdown-item text-dark" href="./about.php#team">Our Team</a>
</div>
</div>
</div>
</div>


<div class="container-fluid nav medium-nav d-md-block d-none d-lg-none fixed-top">
<div class="container py-4">
<div class="btn-group">
<a href="./index.php" class="btn"><div class="button float-left">Kinder Polyfarms</div></a>
</div>
<div class="btn-group float-right nav-view-extended" data-toggle="collapse" href="#collapseExample">
<svg class="bi bi-list" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M4.5 13.5A.5.5 0 015 13h10a.5.5 0 010 1H5a.5.5 0 01-.5-.5zm0-4A.5.5 0 015 9h10a.5.5 0 010 1H5a.5.5 0 01-.5-.5zm0-4A.5.5 0 015 5h10a.5.5 0 010 1H5a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
</svg>
</div>
<div class="btn-group float-right">
<a href="./bidding.php" class="btn"><div class="button float-right">Bidding</div></a>
</div>
<div class="btn-group float-right">
<a class="btn dropdown-toggle" href="#" id="navNews" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
News
</a>
<div class="dropdown-menu">
<a class="btn dropdown-item text-dark" href="./news.php">News</a>
<a class="btn dropdown-item text-dark" href="./index.php#current">Current Rates</a>
<a class="btn dropdown-item text-dark" href="./blog.php">Blog</a>
</div>
</div>
</div>
<div class="container-fluid d-lg-none extend-nav py-2 d-none collapse" id="collapseExample">
<div class="container">
<div class="container btn" data-toggle="modal" data-target="#exampleModal">Search</div>
<a href="./contact.php#request"><div class="container btn">Request Call Back</div></a>
<a href="./how-to.php"><div class="container btn">How to Use</div></a>
<a href="./about.php"><div class="container btn">About Us</div></a>
<a href="./contact.php"><div class="container btn">Contact Us</div></a>
<?php
if(isset($_SESSION['Kinder Polyfarms']))
{
if(isset($_SESSION['Kinder Polyfarms checker']))
{
if($_SESSION['Kinder Polyfarms checker']=="admin")
{
echo'
<a href="./admin-dashboard.php.php"><div class="container btn">Dashboard</div></a>
<a href="./logout.php"><div class="container btn">Logout</div></a>
';
}
else
{
echo'
<a href="./dashboard.php.php"><div class="container btn">Dashboard</div></a>
<a href="./logout.php"><div class="container btn">Logout</div></a>
';
}
}
else
{
echo'
<a href="./login.php"><div class="container btn">Login</div></a>
<a href="./signup.php"><div class="container btn">Signup</div></a>
';
}
}
else
{
echo'
<a href="./login.php"><div class="container btn">Login</div></a>
<a href="./signup.php"><div class="container btn">Signup</div></a>
';
}
?>
</div>
</div>
</div>


<div class="container-fluid nav small-nav d-sm-block d-lg-none d-md-none d-xl-none fixed-top">
<div class="container py-4">
<div class="row">
<div class="col-3 text-center">
<a href="./index.php">
<svg class="bi bi-house" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M9.646 3.146a.5.5 0 01.708 0l6 6a.5.5 0 01.146.354v7a.5.5 0 01-.5.5h-4.5a.5.5 0 01-.5-.5v-4H9v4a.5.5 0 01-.5.5H4a.5.5 0 01-.5-.5v-7a.5.5 0 01.146-.354l6-6zM4.5 9.707V16H8v-4a.5.5 0 01.5-.5h3a.5.5 0 01.5.5v4h3.5V9.707l-5.5-5.5-5.5 5.5z" clip-rule="evenodd"/>
<path fill-rule="evenodd" d="M15 4.5V8l-2-2V4.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z" clip-rule="evenodd"/>
</svg>
</a>
</div>
<div class="col-3 text-center">
<a href="./index.php#current">
<svg class="bi bi-calendar" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M16 2H4a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2zM3 5.857C3 5.384 3.448 5 4 5h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H4c-.552 0-1-.384-1-.857V5.857z" clip-rule="evenodd"/>
<path fill-rule="evenodd" d="M8.5 9a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
</svg>
</a>
</div>
<div class="col-3 text-center">
<a href="./bidding.php">
<svg class="bi bi-inboxes" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M2.125 13.17A.5.5 0 012.5 13H8a.5.5 0 01.5.5 1.5 1.5 0 003 0 .5.5 0 01.5-.5h5.5a.5.5 0 01.496.562l-.39 3.124A1.5 1.5 0 0116.117 18H3.883a1.5 1.5 0 01-1.489-1.314l-.39-3.124a.5.5 0 01.121-.393zm.941.83l.32 2.562a.5.5 0 00.497.438h12.234a.5.5 0 00.496-.438l.32-2.562H12.45a2.5 2.5 0 01-4.9 0H3.066zM5.81 2.563A1.5 1.5 0 016.98 2h6.04a1.5 1.5 0 011.17.563l3.7 4.625a.5.5 0 11-.78.624l-3.7-4.624A.5.5 0 0013.02 3H6.98a.5.5 0 00-.39.188l-3.7 4.624a.5.5 0 11-.78-.624l3.7-4.625z" clip-rule="evenodd"/>
<path fill-rule="evenodd" d="M2.125 7.17A.5.5 0 012.5 7H8a.5.5 0 01.5.5 1.5 1.5 0 003 0A.5.5 0 0112 7h5.5a.5.5 0 01.496.562l-.39 3.124A1.5 1.5 0 0116.117 12H3.883a1.5 1.5 0 01-1.489-1.314l-.39-3.124a.5.5 0 01.121-.393zm.941.83l.32 2.562a.5.5 0 00.497.438h12.234a.5.5 0 00.496-.438L16.933 8H12.45a2.5 2.5 0 01-4.9 0H3.066z" clip-rule="evenodd"/>
</svg>
</a>
</div>
<div class="col-3 text-center nav-view-extended" data-toggle="collapse" href="#collapseExample">
<svg class="bi bi-list" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M4.5 13.5A.5.5 0 015 13h10a.5.5 0 010 1H5a.5.5 0 01-.5-.5zm0-4A.5.5 0 015 9h10a.5.5 0 010 1H5a.5.5 0 01-.5-.5zm0-4A.5.5 0 015 5h10a.5.5 0 010 1H5a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
</svg>
</div>
</div>
</div>
<div class="container-fluid d-lg-none extend-nav py-2 d-none collapse" id="collapseExample">
<div class="container">
<div class="container btn" data-toggle="modal" data-target="#exampleModal">Search</div>
<a href="./contact.php#request"><div class="container btn">Request Call Back</div></a>
<a href="./blog.php"><div class="container btn">Blog</div></a>
<a href="./news.php"><div class="container btn">News</div></a>
<a href="./how-to.php"><div class="container btn">How to Use</div></a>
<a href="./about.php"><div class="container btn">About Us</div></a>
<a href="./contact.php"><div class="container btn">Contact Us</div></a>
<?php
if(isset($_SESSION['Kinder Polyfarms']))
{
if(isset($_SESSION['Kinder Polyfarms checker']))
{
if($_SESSION['Kinder Polyfarms checker']=="admin")
{
echo'
<a href="./admin-dashboard.php.php"><div class="container btn">Dashboard</div></a>
<a href="./logout.php"><div class="container btn">Logout</div></a>
';
}
else
{
echo'
<a href="./dashboard.php.php"><div class="container btn">Dashboard</div></a>
<a href="./logout.php"><div class="container btn">Logout</div></a>
';
}
}
else
{
echo'
<a href="./login.php"><div class="container btn">Login</div></a>
<a href="./signup.php"><div class="container btn">Signup</div></a>
';
}
}
else
{
echo'
<a href="./login.php"><div class="container btn">Login</div></a>
<a href="./signup.php"><div class="container btn">Signup</div></a>
';
}
?>
</div>
</div>
</div>

<script type="text/javascript">
$(".nav-view-extended").click(function(){
if($(".extend-nav").hasClass("d-none"))
{
$(".nav-view-extended").html('<svg class="bi bi-x" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.646 5.646a.5.5 0 000 .708l8 8a.5.5 0 00.708-.708l-8-8a.5.5 0 00-.708 0z" clip-rule="evenodd"/><path fill-rule="evenodd" d="M14.354 5.646a.5.5 0 010 .708l-8 8a.5.5 0 01-.708-.708l8-8a.5.5 0 01.708 0z" clip-rule="evenodd"/></svg>');
$(".extend-nav").removeClass("d-none");
$(".extend-nav").addClass("d-block");
}
else
{
$(".extend-nav").addClass("d-none");
$(".extend-nav").removeClass("d-block");
$(".nav-view-extended").html('<svg class="bi bi-list" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.5 13.5A.5.5 0 015 13h10a.5.5 0 010 1H5a.5.5 0 01-.5-.5zm0-4A.5.5 0 015 9h10a.5.5 0 010 1H5a.5.5 0 01-.5-.5zm0-4A.5.5 0 015 5h10a.5.5 0 010 1H5a.5.5 0 01-.5-.5z" clip-rule="evenodd"/></svg>');
}
});
</script>


<script type="text/javascript">
$(function () {
$('[data-toggle="tooltip"]').tooltip()
})
</script>


<style type="text/css">
#alertModal .modal-content
{
font-weight: 500;
letter-spacing: 1px;
color: #333;
background-color: #ffe7c1;
}
#alertModal .modal-footer
{
text-align: center;
background-color: #fff;
border:none;
}
#alertModal .modal-body
{
background-color: #fff;
}
#alertModal .btn
{
border:none;
color: #fff;
background-color: #639e6f;
height: 40px;
padding:5px;
width: 150px;
letter-spacing: 2px;
text-align: center;
border-radius: 5px;
}
</style>
<!-- Modal -->
<div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle">Message</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body text-center" id="alertModalBody">
...
</div>
<div class="modal-footer">
<button type="button" class="btn m-auto btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>


<script type="text/javascript">

// The function actually applying the offset
function offsetAnchor() {
if(location.hash.length !== 0) {
window.scrollTo(window.scrollX, window.scrollY - 100);
}
}

// This will capture hash changes while on the page
window.addEventListener("hashchange", offsetAnchor);

// This is here so that when you enter the page with a hash,
// it can provide the offset in that case too. Having a timeout
// seems necessary to allow the browser to jump to the anchor first.
window.setTimeout(offsetAnchor, 1); // The delay of 1 is arbitrary and may not always work right (although it did in my testing).
</script>