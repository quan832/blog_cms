<?php
include "includes/database.php";
include "includes/header.php";

?>


<?php include "includes/navgiation.php" ?>
<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <h1 class="page-header">
                Page Heading
                <small>Secondary Text</small>
            </h1>
            <?php




            if (isset($_POST['submit'])) {

                $search = $_POST['search'];

                // query to search
                $query = "SELECT * FROM posts ";
                $query .= "WHERE post_tags LIKE '%$search%'";

                $search_query = mysqli_query($connection, $query);

                if (!$search_query) {

                    die("QUERY FAILED" . mysqli_error($connection));
                }

                $count = mysqli_num_rows($search_query);

                if ($count == 0 || $search == "") {
                    echo "<h2>No Result</h2>";
                } else {

                    while ($row = mysqli_fetch_assoc($search_query)) {

                        // get data in table
                        $post_title = $row['post_title'];
                        $post_author = $row['post_author'];
                        $post_date = $row['post_date'];
                        $post_image = $row['post_image'];
                        $post_content = $row['post_content'];
                    }
            ?>
                    <!-- First Blog Post -->
                    <h2>
                        <a href="#"><?php echo $post_title; ?></a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php"><?php echo $post_author; ?></a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date; ?></p>
                    <hr>
                    <img class="img-responsive" src="images/<?php echo $post_image ?> " alt="error">
                    <hr>
                    <p><?php echo $post_content; ?></p>
                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <hr>


            <?php
                }
            };

            ?>
            





            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="#">&larr; Older</a>
                </li>
                <li class="next">
                    <a href="#">Newer &rarr;</a>
                </li>
            </ul>

        </div>
        <!-- Blog Sidebar Widgets Column -->
        <?php include "includes/sideBar.php"; ?>

    </div>
    <!-- /.row -->

    <hr>


    <?php include "includes/footer.php"; ?>