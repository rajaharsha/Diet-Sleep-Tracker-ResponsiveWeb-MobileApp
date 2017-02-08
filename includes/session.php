<?php
session_start();
function message() {
if (isset($_SESSION["message"])) {
$output = "<div class=\"alert alert-danger\" role=\"alert\">";
$output .= "<i class=\"fa fa-exclamation-circle\"></i>";
$output .= htmlentities($_SESSION["message"]);
$output .= "</div>";
$_SESSION["message"] = null;
return $output;
}
}
function errors() {
if (isset($_SESSION["errors"])) {
$errors = $_SESSION["errors"];
$_SESSION["errors"] = null;
return $errors;
}
}
?>