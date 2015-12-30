<html>
<head>
    <title>Algolia with JS</title>

    <link rel ="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">


</head>
<body>
<input type ="text"
        v-model = "query"
        v-on:keyup.enter="search">


<div class="results">
    <div v-for="user in users">
        <h2>@{{ user.name }}</h2>
    </div>
</div>

<script src="//cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.js"></script>

<script >

    new Vue({
        el: 'body',

        data: {
            query: '',
            users: []
        },

        ready: function() {
            this.client = algoliasearch("PY8GPW56GA", "6dabc8a9c04052b74d462107700604f6");

            this.index = this.client.initIndex("getstarted_actors");
        },
        methods: {
            search: function () {
                this.index.search(this.query, function (error, results) {

                    this.users = results.hits;

                }.bind(this));
            }
        }
    })


</script>

</body>
</html>
