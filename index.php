<?php
include_once 'config/init.php';

$job = new Job;
$template = new Template('templates/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;
if ($category) { // If there is a category in Search bar
    $template->jobs = $job->getByCategory($category);
    $template->title = 'Jobs In ' . $job->getCategory($category)->name;
} else { // If no category in search is selected
    $template->title = 'Latest Jobs';
    $template->jobs = $job->getAllJobs();
}

$template->categories = $job->getCategories();

echo $template;
