$(document).ready(function()
{
    $('#searchbox').selectize({
        valueField: 'url',
        labelField: 'name',
        searchField: ['vname'],
        maxOptions: 10,
        options: [],
        create: false,
        render: {
            option: function (item, escape) {
                return '<div><img src="' + item.icon + '">' + escape(item.name) + '</div>';
            }
        },
        optgroups: [
            {value: 'suppliers', label: 'suppliers'},
            {value: 'materials', label: 'materials'}
        ],
        optgroupField: 'class',
        optgroupOrder: ['suppliers', 'materials'],
        load: function (query, callback) {
            if (!query.length) return callback();
            $.ajax({
                url: root + '/api/search',
                type: 'GET',
                dataType: 'json',
                data: {
                    q: query
                },
                error: function () {
                    callback();
                },
                success: function (res) {
                    callback(res.data);
                }
            });
        },
        onChange: function () {
            window.location = this.items[0];
        }
    });
});
