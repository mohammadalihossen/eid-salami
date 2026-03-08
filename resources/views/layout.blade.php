<!DOCTYPE html>
<html>

<head>

<title>🌙 ঈদি হাব</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background: linear-gradient(135deg,#141e30,#243b55);
font-family: 'Segoe UI';
color:white;
min-height:100vh;
}

/* Navbar */

.navbar{
box-shadow:0 5px 20px rgba(0,0,0,0.3);
}

/* Card UI */

.eid-card{
background: rgba(255,255,255,0.08);
backdrop-filter: blur(10px);
border-radius:20px;
padding:35px;
box-shadow:0 10px 40px rgba(0,0,0,0.4);
}

/* Button */

.btn-eid{
border-radius:30px;
padding:12px;
font-size:18px;
}

/* Moon */

.moon{
position:absolute;
top:60px;
right:80px;
font-size:70px;
opacity:0.3;
}

</style>

</head>

<body>

<div class="moon">🌙</div>

<nav class="navbar navbar-dark bg-success">

<div class="container">

<a class="navbar-brand" href="/">🌙 ঈদি হাব</a>

</div>

</nav>

<div class="container mt-5">

@yield('content')

</div>

<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

</body>

</html>