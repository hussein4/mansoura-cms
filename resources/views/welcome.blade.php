<html>
	<head>
		<title>Algolia</title>
		<link rel ="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">


	</head>
	<body>
    <div class="container">
        <h1>Search Results</h1>
        <ul class="list-group">

            @foreach($results as $user)
                <li class="list-group-item">
                    {{ $user['name'] }} : {{ $user['alternative_name'] }}
                </li>
                @endforeach

        </ul>
    </div>

	</body>
</html>
