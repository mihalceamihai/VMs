<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div class="quantity buttons_added">
  <input id="minus" type="button" class="minus" value="-">
  <input id="theInput" type="number" size="4" class="input-text qty text" title="Qty" value="1" min="0" step="1">
  <input id="plus" type="button" class="plus" value="+">
</div>
<script>
var input = document.getElementById('theInput');
document.getElementById('plus').onclick = function(){
    input.value = parseInt(input.value, 10) +1
}
document.getElementById('minus').onclick = function(){
    input.value = parseInt(input.value, 10) -1
}
</script>
</body>
</html>
