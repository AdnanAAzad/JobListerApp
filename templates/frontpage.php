<?php include 'inc/header.php'; ?>



<div class="container py-4">

    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Find A Job</h1>
            <form method="GET" action="index.php">
                <select name="category" class="form-control" id="">
                    <option value="0">All Jobs</option>
                    <?php foreach ($categories as $category) : ?>
                        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                    <?php endforeach; ?>
                </select>
                <br />
                <input type="submit" class="btn btn-primary btn-lg" type="button" value="Search">
            </form>
        </div>
    </div>
    <h2> <?php echo $title; ?></h2>
    <?php foreach ($jobs as $job) : ?>
        <div class="row align-items-md-stretch">
            <div class="col-md-10">
                <div class="h-100 p-5 text-white bg-dark rounded-3">
                    <h2><?php echo $job->job_title; ?></h2>
                    <p> <?php echo $job->description; ?> </p>
                    <a class="btn btn-outline-light" type="button" href="job.php?id=<?php echo $job->id ?>">View Posting</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>






    <?php
    include 'inc/footer.php'; ?>