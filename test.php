<html>
        <head>
                <title>PHP TEST</title>
        </head>
<body>
<?php
if(shell_exec('echo foobar') == 'foobar'){
    echo 'shell_exec works';
} else {
    echo 'shell_exec off';
}
?>
</body>
</html>
