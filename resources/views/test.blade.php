<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="root">
        
    </div>
    <script>
        const root = document.getElementById("root");
        fetch('https://laptrinhcautruc-api.herokuapp.com/product')
        .then((res) => res.json())
        .then(data => console.log(data));
    </script>
</body>
</html>