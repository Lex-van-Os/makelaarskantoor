<?php
function wrap($string) {
    $new_string = "'" . $string . "'";
    return $new_string;
}
?>

<script>
    function confirm_action() {
        console.log(document.getElementsByClassName('input-validation').value)
        if (document.getElementsByClassName('input-validation').value === "") {
            return confirm(choose_input());
        } else {
            return confirm(confirm_message());
        }
    }

    function confirm_message() {
        return "Are you sure you want to perform this action?";
    }

    function choose_input() {
        return "Please input a value";
    }
</script>
