<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
            crossorigin="anonymous"></script>

    <title>Task 1</title>
</head>
<body>
<p></p>
<div class="container">
    <h1>Task 1</h1>
    <table class="table table-bordered col-md-2">
        <tr>
            <th>&&</th>
            <th><?php echo (int)false;?></th>
            <th><?php echo (int)true;?></th>
        </tr>
        <tr>
            <th><?php echo (int)false;?></th>
            <td><?php echo (int)(false && false);?></td>
            <td><?php echo (int)(true && false);?></td>
        </tr>
        <tr>
            <th><?php echo (int)true;?></th>
            <td><?php echo (int)(true && false);?></td>
            <td><?php echo (int)(true && true);?></td>
        </tr>
    </table>
    <table class="table table-bordered col-md-2">
        <tr>
            <th>||</th>
            <th><?php echo (int)false;?></th>
            <th><?php echo (int)true;?></th>
        </tr>
        <tr>
            <th><?php echo (int)false;?></th>
            <td><?php echo (int)(false || false);?></td>
            <td><?php echo (int)(true || false);?></td>
        </tr>
        <tr>
            <th><?php echo (int)true;?></th>
            <td><?php echo (int)(true || false);?></td>
            <td><?php echo (int)(true || true);?></td>
        </tr>
    </table>
    <table class="table table-bordered col-md-2">
        <tr>
            <th>xor</th>
            <th><?php echo (int)false;?></th>
            <th><?php echo (int)true;?></th>
        </tr>
        <tr>
            <th><?php echo (int)false;?></th>
            <td><?php echo (int)(false xor false);?></td>
            <td><?php echo (int)(true xor false);?></td>
        </tr>
        <tr>
            <th><?php echo (int)true;?></th>
            <td><?php echo (int)(true xor false);?></td>
            <td><?php echo (int)(true xor true);?></td>
        </tr>
    </table>
</div>
</body>
</html>