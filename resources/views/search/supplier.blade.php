<DOCTYPE html>
    <html>
    <head>
        <title> Materials Search</title>
        <link rel ="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    </head>
    <body>
    <div class ="container">
        <h1>Search Results</h1>
        <ul class ="list-group">
            @foreach($results as $supplier)
                <li class = "list-group-item">
                    {{ $supplier['vname'] }} : {{ $supplier['vservice'] }}
                </li>
            @endforeach
        </ul>

    </div>
    </body>
</html>
    </doctype>