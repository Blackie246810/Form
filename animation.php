<html>
<head>
<title>
Form
</title>
</head>
<body>
<script>
setInterval(function(){
setTimeout(function(){
document.getElementById("connect").innerHTML = "Connected."
document.getElementById("connect").style.color = "lime"
}, 500);
setTimeout(function(){
document.getElementById("connect").innerHTML = "Connected.."
document.getElementById("connect").style.color = "lime"
}, 1000);
setTimeout(function(){
document.getElementById("connect").innerHTML = "Connected..."
document.getElementById("connect").style.color = "lime"
}, 1500);
setTimeout(function(){
document.getElementById("connect").innerHTML = "Connected"
document.getElementById("connect").style.color = "lime"
}, 2000);
}, 2000);
</script>