<script src="assets/js/hideMaxListItem-min.js"></script>
<script>
    $(document).ready(function () {
        $('ul.long-list').hideMaxListItems({
            'max': 6,
            'speed': 500,
            'moreText': 'VIEW MORE ([COUNT])',
            'lessText': 'VIEW LESS',
            'moreHTML': '<p class="maxlist-more"><a href="#">MORE OF THEM</a></p>'
        });
    });


</script>