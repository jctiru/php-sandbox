<?php
$todos = file_get_contents('assets/todo.json');
$todos = json_decode($todos, true);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/sketchy/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <title>PHP To-Do List</title>
    </head>

    <body>
        <div class="container">
            <div class="card border-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">
                    <h1>To-Do List</h1>
                </div>
                <div class="card-body text-primary">
                    <h4 class="card-title"><input id="newTask" class="form-control" type="text" placeholder="Add New Task"></h4>
                    <p class="card-text">
                        <ul>
                            <?php foreach($todos as $key=>$todo): ?>
                            <li id="<?php echo $key; ?>" class='<?php echo ($todo["done"])? "completed" : "";?>'>
                                <span><i class="fa fa-trash"></i><?php echo $todo['task'] ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="assets/lib/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="assets/js/todos.js"></script>
    </body>

    </html>