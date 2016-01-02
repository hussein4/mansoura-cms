@extends('app')


@section('htmlheader_title')
    Supplier
@endsection


@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">

                    <title>Algolia with JS</title>

                    <link rel ="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
                    <!--
                                                           <input id ="typeahead"
                                                                  type ="text"
                                                                  v-model = "query"
                                                                  v-on:keyup="search | key 'enter'">
                                                   debounce="500">     -->

                    <div class="results">
                        <div v-for="user in users">
                            <h2>@{{ user.name }}</h2>
                        </div>
                    </div>
                    <script src="http://code.jquery.com/jquery.js"> </script>
                    <script src="//cdn.jsdelivr.net/typeahead.js/0.11.1/typeahead.jquery.min.js"></script>
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

                                this.index = this.client.initIndex("mrs");

                                $('#typeahead')
                                        .typeahead({hint: false}, {
                                            source: this.index.ttAdapter(),
                                            displayKey: 'alternative_name',
                                            templates: {
                                                suggestion: function(hit) {
                                                    return (
                                                    '<div>' +
                                                    '<h3 class = "name" >'+ hit._highlightResult.name.value + '</h3>' +
                                                    '<h4 class= "alternative_name">' + hit._highlightResult.name.value + '</h4>'
                                                    )
                                                }
                                            }

                                        })
                                        .on('typeahead:select', function(e,suggestion){
                                            this.query= suggestion.alternative_name;
                                        }.bind(this));

                            },
                            methods: {
                                search: function () {
                                    //  if (this.query.length < 3) return;
                                    this.$log('query');

                                    this.index.search(this.query, function (error, results) {

                                        this.users = results.hits;

                                    }.bind(this));
                                }
                            }
                        })

                    </script>

                </div>
            </div>
        </div>
    </div>

@endsection

