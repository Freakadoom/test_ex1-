<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
    <style>
    
    header {
        width: 100%;
        height: 300px;
        background: url(stubby.jpg) no-repeat center;
    } 

    h1{
        text-align: center;
    }
    article{
        margin: 0 auto;
        width: 30%;
        border: 1px solid brown;
    }
    p{
    font-size: 18px;
    }
    </style>
</head>
<body>
<header></header>
<h1><?=$title?></h1>		
	<?
		include $content;
	?>
</body>
</html>