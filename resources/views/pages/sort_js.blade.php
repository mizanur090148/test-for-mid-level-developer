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
            <h2>Sort in JS</h2>
            <pre>
                // for numbers
                var numbers = [2, 9, 5, 8, 1, 4]
                numbers.sort(function(a, b) {
                   return a - b;  // a - b for ascending, 
                  // return b - a; // b - a for descending
                 });
                console.log(numbers);

                Input: [2, 9, 5, 8, 1, 4]
                Output: [1, 2, 4, 5, 8, 9]
            

                // for strings
                let strings = [
                    'A','D','C','B'
                ];
                strings.sort(function (a, b) {
                    let x = a.toUpperCase(),
                        y = b.toUpperCase();
                    return x == y ? 0 : x > y ? 1 : -1; // for ascending order
                   // return x == y ? 0 : x > y ? -1 : 1; // for descending order
                });
                console.log(strings)

                Input: [2, 9, 5, 8, 1, 4]
                Output: ["A", "B", "C", "D"]
            </pre>
        </code>

        
    </div>
</body>
</html>
