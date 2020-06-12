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
        table, h4 {
            margin-left: 45px;
        }

        td {
            border: 1px solid #eee;
            padding: 3px;
            text-align: center;
        }
        code {
            color: #007b00;
        }
        a {
            color: red;
        }
    </style>
</head>
<body>
    <div class="content">       
        <h4>The Buyer, who has taken the second highest total items.</h4>
        <table>
            <tr>
                <th>Buyer id</th>
                <th>Buyer Name</th>
                <th>Total Diary Taken</th>
                <th>Total Pen Taken</th>
                <th>Total Eraser Taken</th>
                <th>Total items Taken</th>
            </tr>
            <tr>
                <td>{{ $second_buyer_eloquent->id }}</td>
                <td>{{ $second_buyer_eloquent->name }}</td>
                <td>{{ $second_buyer_eloquent->total_diary_taken }}</td>
                <td>{{ $second_buyer_eloquent->total_pen_taken }}</td>
                <td>{{ $second_buyer_eloquent->total_eraser_taken }}</td>
                <td>{{ $second_buyer_eloquent->total_items_taken }}</td>
                
            </tr>           
        </table>        
    </div>
</body>
</html>
