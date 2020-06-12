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
            <h2>Callback in JS</h2>
            <pre>
                Syntax:
                var Array = array.filter(function(item) {
                  return condition;
                });

                Example: 
                var family_members = [
                    {name: 'Milon', franchise: 'Dhaka'},    
                    {name: 'Arifullah', franchise: 'Sirajraj'},
                    {name: 'Sohag', franchise: 'Sylhet'},
                    {name: 'Atik', franchise: 'Sirajraj'}
                ];

                var filter_result =  family_members.filter(function(member) {
                    return member.franchise == 'Sirajraj';
                });
                console.log(filter_result);
                Output: [
                    {name: "Arifullah", franchise: "Sirajraj"}, 
                    {name: "Atik", franchise: "Sirajraj"}
                ]
            </pre>
        </code>
    </div>
</body>
</html>
