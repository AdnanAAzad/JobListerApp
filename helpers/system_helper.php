<?php
// Taking in a path and redirect using header and using messages into session variables
// to redirect first then display the message
function redirect($page = FALSE, $message = NULL, $message_type = NULL)
{
    if (is_string($page)) {
        $location = $page;
    } else {
        $location = $_SERVER['SCRIPT_NAME'];
    }

    // check for messages
    if ($message != NULL) {
        // set message
        $_SESSION['message'] = $message;
    }

    // Checking for data type
    if ($message_type != NULL) {
        $_SESSION['message_type'] = $message_type;
    }

    // redirect
    header('Location: ' . $location);
    exit;
}

// Display message
function displayMessage($page = FALSE, $message = NULL, $message_type = NULL)
{
    if (!empty($_SESSION['message'])) {
        // assign message variable
        $message = $_SESSION['message'];

        if (!empty($_SESSION['message_type'])) {
            // assign type variable
            $message_type = $_SESSION['message_type'];

            // create an output
            if ($message_type == 'error') {
                echo '<div class="alert alert-danger">' . $message . '</div>';
            } else {
                echo '<div class="alert alert-success">' . $message . '</div>';
            }
        }
        // unset and clear message
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);
    } else {
        echo '';
    }
}
