<?php include "./includes/header.php" ?>
<div id="wrapper">

    <!-- Navigation -->
    <?php include "./includes/navigation.php" ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Admin Page
                        <small>Author</small>
                    </h1>

                    <div class="row">
                        <div class="col-xs-6">
                            <form action=" ">
                                <div class="form-group">

                                    <label for="cat-title">Add Category </label>
                                    <input type="text" class="form-control" name="cat_title">

                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                </div>

                            </form>
                        </div>
                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Category Title</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>

                                    </tr>

                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php include "./includes/footer.php" ?>