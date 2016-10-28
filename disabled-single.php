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
                        <h3>Single Select</h3>
                        <select data-placeholder="Your Favorite Type of Bear" class="chosen-select" tabindex="7" name="select1">
                            <option value=""></option>
                            <option value="American Black Bear">American Black Bear</option>
                            <option value="Asiatic Black Bear">Asiatic Black Bear</option>
                            <option value="Brown Bear">Brown Bear</option>
                            <option value="Giant Panda">Giant Panda</option>
                            <option value="Sloth Bear" selected>Sloth Bear</option>
                            <option value="Sun Bear" disabled>Sun Bear</option>
                            <option value="Polar Bear">Polar Bear</option>
                            <option value="Spectacled Bear" disabled>Spectacled Bear</option>
                        </select>
                    </div>

                </div>


            </div>

            <input type="submit" class="btn btn-primary" value="Submit" style="margin-top: 40px">   
        </form>


    </body>
</html>
