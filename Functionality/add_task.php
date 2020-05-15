<?php
if (isset($_POST['submit'])) {
    AddTask($conn, $_GET['id'], $_POST["name"], $_POST["description"], $_POST["duration"], $_POST["status"]);
}