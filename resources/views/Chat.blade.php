<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .search-container  {
            height:200px;
            width:200px;

        }
        input[type=text] {
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
        }

        .search-container button {
            float: right;
            padding: 6px;
            margin-top: 8px;
            margin-right: 16px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }

        .search-container button:hover {
            background: #ccc;
        }

    </style>
</head>
<body>


<div class="search-container">
    <form method='POST' action='{{url('/messages')}}'>
        <input type="text" placeholder="message.." name="message" >
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        <button type="submit">send</button>
    </form>
</div>



</body>
</html>
