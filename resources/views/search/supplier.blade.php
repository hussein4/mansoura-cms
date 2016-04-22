<!DOCTYPE html>
<html>
<head>
    <title> Suppliers Search</title>
    <link rel ="stylesheet" href="/css/search.css">


</head>
<body>
<div class = "results">
    <input id ="typeahead"
           type ="text"
           v-model = "query"
           v-on:keyup="search | key 'enter'"
           debounce="500">


    <!--
          <article v-for="user in users">
              <h2>@{ user._highlightResult.name.value }}}</h2>
              <h4>@{ user.rating }}</h4>


          </article>
          -->
</div>
<script src="http://code.jquery.com/jquery.js"> </script>
<script src="//cdn.jsdelivr.net/typeahead.js/0.11.1/typeahead.jquery.min.js"></script>
<script src="http://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.js"></script>

<script>


    new Vue({
        el:'body',

        data : {
            query: '',
            users: []
        },

        ready : function(){
            this.client = algoliasearch("PY8GPW56GA", 'c3f14bd4b9f17040253591ee98cf70c3');
            this.index = this.client.initIndex('suppliers');

            $('#typeahead')
                    .typeahead({hint:false} ,{
                        source : this.index.ttAdapter(),
                        displayKey :'vname',
                        templates : {
                            suggestion : function(hit){
                                return (
                                '<div>' +
                                '<h3 class = "name">' + hit._highlightResult.vname.value + '</h3>' +
                                '<h4 class = "vservice">' + hit.vservice + '</h4>'
                                )
                            }
                        }

                    })
                    .on('typeahead:select',function(e,suggestion){

                        this.query = suggestion.vservice;

                    }.bind(this));
        },


        methods: {
            search: function () {
                this.$log('query');

                //   if (this.query.length < 3) return ;

                this.index.search(this.query, function(error, results) {
                    console.log(results);
                    this.users=results.hits;

                }.bind(this));
            }
        }

    });




</script>

</div>


</body>







</html>
</DOCTYPE>