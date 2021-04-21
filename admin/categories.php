<?php include "./includes/admin_header.php" ?>
<div id="wrapper">

    <!-- Navigation -->
    <?php include "./includes/admin_navigation.php" ?>

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
                            <?php
                            //    add categories
                            if (isset($_POST['submit'])) {

                                $cat_title = $_POST['cat_title'];

                                if ($cat_title == "" || empty($cat_title)) {

                                    echo "This field should not be empty";
                                } else {

                                    $query = 'INSERT INTO categories(cat_title)';
                                    $query .= "VALUE('{$cat_title}')";

                                    // add categories
                                    $create_category_query = mysqli_query($connection, $query);

                                    // if it don't happen
                                    if (!$create_category_query) {

                                        die('QUERY FAILED' . mysqli_error($connection));
                                    }
                                }
                            }
                            ?>
                            <form action=" " method="post">
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
                            <?php

                            $query = "SELECT * FROM categories LIMIT 3 ";

                            $select_categories_sidebar = mysqli_query($connection, $query);

                            ?>
                            <table class="table table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Category Title</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($select_categories_sidebar)) {

                                        // get name in table
                                        $cat_id = $row['cat_id'];
                                        $cat_title = $row['cat_title'];
                                        // display li
                                        echo "<tr>";
                                        echo "<th scope='row'>{$cat_id}</th>";
                                        echo "<td>{$cat_title}</td>";
                                        echo "</tr>";
                                    }
                                    ?>

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

<?php include "./includes/admin_footer.php" ?>