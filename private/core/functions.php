<?php

function get_var($key, $default = '')
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }
    return $default;
}
function get_select($key, $value)
{
    if (isset($_POST[$key])) {
        if ($_POST[$key] == $value) {
            return "selected";
        }
    }
    return '';
}
function esc($val)
{
    return htmlspecialchars($val);
}

function random_string($length)
{
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    $text = '';
    for ($i = 0; $i < $length; $i++) {
        $random = rand(0, 61);
        $text .= $arr[$random];
    } {
        $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
        $text = '';
        for ($i = 0; $i < $length; $i++) {
            $random = rand(0, 61);
            $text .= $arr[$random];
        }

        return $text;
    }
    return $text;
}

function get_date($date)
{
    return date('jS M, Y', strtotime($date));
}


function printError($error, $field)
{
    if (array_key_exists('errors', $error)) {
        $error = $error['errors'];
        $div = "<div class=\"assistive-text ";
        $div .= (!isset($error)) ? 'display-none' : '';
        $div .= "\">";
        $div .= (isset($error) && array_key_exists($field, $error)) ? $error[$field] : '';
        $div .= "</div>";

        return $div;
    }
}


function is_set($data)
{
    if (isset($data)) {
        return $data;
    }
    return '';
}

