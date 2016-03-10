<?php

function isValidLogin() {
    if (empty($_POST['username'])) {
        return false;
    }

    if (empty($_POST['password'])) {
        return false;
    }

    if ($_POST['username'] != 'admin') {
        return false;
    }

    if ($_POST['password'] != 'ciccio') {
        return false;
    }

    return true;
}