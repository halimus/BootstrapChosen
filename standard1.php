<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap Chosen</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!--bootstrap-chosen-->
        <link rel="stylesheet" href="assets/plugins/bootstrap-chosen/bootstrap-chosen.css">
        <script src="assets/plugins/bootstrap-chosen/chosen.jquery.min.js"></script>
        
        <script type="text/javascript">
            $(function () {
                $('.chosen-select').chosen();
                $('.chosen-select-deselect').chosen({allow_single_deselect: true});
            });
        </script>
    </head>
    <body>


        <div class="container">
            <header>
                <h1>Bootstrap + Chosen</h1>
            </header>

            <div class="page-header">
                <h2>Standard Select</h2>
            </div>

            
            <div class="row">
                <div class="col-lg-3">
                    <select class="form-control" bame="select1">
                        <option>Ordinary select box</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </div>
            </div>
            
            
        </div>

    </body>
</html>
