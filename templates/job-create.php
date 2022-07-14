<?php include 'inc/header.php'; ?>
<div class="container">
    <h2 class="page-header">Create A Job Listing</h2>
    <form method="post" action="create.php">
        <div class="form-group">
            <label for="">Job Title</label>
            <input type="text" class="form-control" name="job_title" id="">
        </div>
        <div class="form-group">
            <label for="">Salary</label>
            <input type="text" class="form-control" name="salary" id="">
        </div>
        <div class="form-group">
            <label for="">Company</label>
            <input type="text" class="form-control" name="company" id="">
        </div>
        <div class="form-group">
            <label for="">Location</label>
            <textarea type="text" class="form-control" name="location" id=""></textarea>
        </div>
        <div class="form-group">
            <label for="">Job Description</label>
            <textarea type="text" class="form-control" name="description" id=""></textarea>
        </div>
        <div class="form-group">
            <label for="">Contact Name</label>
            <textarea type="text" class="form-control" name="contact_user" id=""></textarea>
        </div>
        <div class="form-group">
            <label for="">Contact Email</label>
            <textarea type="text" class="form-control" name="contact_email" id=""></textarea>
        </div>
        <div class="form-group">
            <label for="">Job Category</label>
            <select class="form-control" name="category">
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <br />
        <input type="submit" name="submit" class="btn btn-primary btn-lg" type="button" value="Submit">
    </form>
</div>
<?php include 'inc/footer.php'; ?>