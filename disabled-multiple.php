<?php
if (isset($_POST['select1'])and ( !empty($_POST['select1']))) {
    print_r($_POST);
}
?>
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

        <form action="" method="post">
            <div class="container">
                

                <div class="page-header">
                    <h2>Selected and Disabled Support</h2>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <h3>Multiple Select</h3>
                        <select data-placeholder="Your Favorite Types of Bear" multiple class="chosen-select" tabindex="8" name="select1[]">
                            <option value=""></option>
                            <option>American Black Bear</option>
                            <option>Asiatic Black Bear</option>
                            <option>Brown Bear</option>
                            <option>Giant Panda</option>
                            <option>Sloth Bear</option>
                            <option disabled>Sun Bear</option>
                            <option selected>Polar Bear</option>
                            <option disabled>Spectacled Bear</option>
                        </select>
                    </div>
                </div>


            </div>


            <input type="submit" class="btn btn-primary" value="Submit" style="margin-top: 40px">   
        </form>

    </body>
</html>
