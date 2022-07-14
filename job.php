
<?php
include_once 'config/init.php';

$job = new Job;
$template = new Template('templates/job-single.php');

// get ID
$job_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->job = $job->getJob($job_id);
echo $template;
