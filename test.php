<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
 $(document).ready(function() {

   $('.click').on("click", function(e){
        e.preventDefault(); // cancel the default a tag event.

        $.get( "index.html", function( data ) {
          $(".result").html( data );
        });

   });
 });
</script>
</head>
<body>

<a href="#" class="click">click me </a>
<div class="result"></div>

</body>
</html>
