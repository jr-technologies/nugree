/**
 * Created by nomantufail on 29/10/2016.
 */
var client = algoliasearch(ALGOLIA_APPLICATION_ID, ALGOLIA_API_KEY);
var index = client.initIndex('nugree_locations');
$(".ajax-locations-select").select2({
    placeholder: 'search for locations',
    ajax: {
        dataType: 'json',
        delay: 250,
        transport: function (params) {
            var q = params.data.query;
            delete params.data.query;
            var city_id = $("#cities-select option:selected").val();
            if(city_id != ""){
                params.data.filters = 'city_id='+city_id
            }
            index.search(q, params.data).then(function (content) {
                params.success(content);
            });
        },
        data: function (term, page) {
            return {query: term, hitsPerPage: 10, page: (page - 1)};
        },
        processResults: function (data, params) {
            // parse the results into the format expected by Select2
            // since we are using custom formatting functions we do not need to
            // alter the remote JSON data, except to indicate that infinite
            // scrolling can be used
            params.page = params.page || 1;

            return {
                results: data.hits,
                pagination: {
                    more: (params.page * 30) < data.nbHits
                }
            };
        },
        cache: true
    },
    multiple:true,
    escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
    minimumInputLength: 1,
    formatResult: function(location) {
        return "<div class='select2-user-result'>" +
            location.location +
            '<br />' +
            '<small class="text-muted">' + location.city_id + '</small>' +
            "</div>";
    },
    formatSelection: function(location) {
        return location.location;
    }
});
$(document).on('change', '#cities-select', function(){
    $(".ajax-locations-select").select2('data',null);
});
