<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php  echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>

<button>Get data</button>
<ul></ul>

<script>
    $("button").click(function(){
        $.getJSON("json_data.json",function(obj){
            $.each(obj, function(key,value){
                $("ul").append("<li>"+value.name+"</li>");
            });
        });
    });
</script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


</body>

</html>