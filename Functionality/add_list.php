<?php
if (isset($_POST['submit'])) {
    AddList($conn, $_POST['name']);
}