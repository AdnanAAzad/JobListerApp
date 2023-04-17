
<?php
include_once 'config/init.php';

$job = new Job;

// check to see if job-create.php submitted data
if (isset($_POST['submit'])) {
    echo 'test';
    // Data Array
    // setting input from submit that comes from job-create.php
    // into an array
    $data = array();
    $data['job_title'] = $_POST['job_title'];
    $data['company'] = $_POST['company'];
    $data['category_id'] = $_POST['category'];
    $data['description'] = $_POST['description'];
    $data['location'] = $_POST['location'];
    $data['salary'] = $_POST['salary'];
    $data['contact_user'] = $_POST['contact_user'];
    $data['contact_email'] = $_POST['contact_email'];

    // Job posting Success/Failure
    if ($job->create($data)) {
        redirect('index.php', 'You Job has been Listed', 'Success');
    } else {
        redirect('index.php', 'Something Went Wrong...', 'Error');
    }
}
$template = new Template('templates/job-create.php');
$template->categories = $job->getCategories();

echo $template;
