<!DOCTYPE html>
<html>
<body>

<h1> My first PHP page </h1>

<?php
echo "Hello Mr Cooolllll!";
?>
<input type="text" id="name">
<br>
<input type="text" id="school">
<br>
<input type="button" value="Ok" onclick="display()">

<script type="text/javascript">
      function display(){
       	 	var name = document.getElementByID('name').value;
       	 	var school = document.getElementByID('school').value;
       	 	alert('wellcome '+ name + ' from school '+ school);
      }
</script>
</body>
</html> 