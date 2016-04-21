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
            @foreach ($results as $user)
                <li class = "list-group-item">
                  {{ $user['name'] }} : {{ $user['rating'] }}
                </li>
                @endforeach
        </ul>

    </div>
  </body>






<script src="http://code.jquery.com/jquery.js"> </script>
<script src="//cdn.jsdelivr.net/typeahead.js/0.11.1/typeahead.jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.js"></script>

<script>

var client = algoliasearch("PY8GPW56GA", 'c3f14bd4b9f17040253591ee98cf70c3');
var index = client.initIndex('materials');
index.search('something', function(success, hits) {
console.log(success, hits)
}, { hitsPerPage: 10, page: 0 });


</script>

  </html>
</DOCTYPE>