<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php // echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>



<div id="form-area">
    <h2>Get</h2>
    <input type="submit" id="get" value="GET">
</div>







<script>
var container = $('div.container');
$('input#get').click(function(){
    $.ajax({
        type: 'GET',
        url:'api/json_data.json',
        dataType:'json',
        success:function(data){
            $.each(data, function(index, item){
                $.each(item,function(key,value){
                    container.append(key+ ": "+value+"<br>");
                });
            });
        }
    });
});
</script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


</body>

</html>