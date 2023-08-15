<script>
    $(document).ready(function() {
        $('#capres').change(function() {
            if ($(this).prop('checked', true)) {
                $('#btn-capres').removeClass('disabled');
            } else {
                $('#btn-capres').addClass('disabled');


            }
        });
    });
</script>
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>