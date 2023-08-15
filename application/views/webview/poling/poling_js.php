<script>
    var span = document.getElementById('request_id');

    function time() {
        var d = new Date();
        var formatted = d.toISOString().split('T')[0].replace(/\-/g, '').slice(2, 8) - 0;
        var s = d.getSeconds();
        var m = d.getMinutes();
        var h = d.getHours();
        span.textContent =
            formatted + ("0" + h).substr(-2) + ("0" + m).substr(-2) + ("0" + s).substr(-2);
    }

    setInterval(time, 1000);
</script>