<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Itech Test</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 600;
            height: 100vh;
            margin: 0;
            padding: 10px;
        }        
        h2 {
            color: #000000; 
            padding-left: 90px;
        }
        code {
            color: red;
        }       
    </style>
</head>
<body>
    <div class="content">
        <code>
            <h2>Map in JS</h2>
            <pre>
                Example: 
                const Array = [1, 2, 3, 4, 5]; 
                const newArray = Array.map(number => number + 1); 
                console.log(newArray);
                Output: [2, 3, 4, 5, 6]
            </pre>
        </code>
    </div>
</body>
</html>
