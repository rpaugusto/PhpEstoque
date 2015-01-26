
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/docs.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
<!-- script de funcionalidade do dataTables -->
<script src="js/jquery-dataTables.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#lista").dataTable({
            "aScrolly": "400px",
            "bPaginate": false,
            "aaSorting": [[0, "desc"]]
        });
    });
</script>
</body>
</html>