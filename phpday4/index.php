<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta htpp-equiv="x-ua-compatible" content="ie=edge">
    <title>AJAX and JSON Example</title>
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/minty/bootstrap.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>HELLO</h1>
        <div>
            <h2>Type pikachu, charmander or squirtle</h2>
            <div class="form-inline">
                Input:
                <input class="form-control ml-2" type="text" id="myInput" name="">
                <input class="btn btn-primary ml-2" type="submit" name="submit" value="Submit" id="myButton">
            </div>
            <div id="jsonSection"></div>
            <div id="outputSection"></div>
            <hr>
        </div>
        <hr>
        <div>
            <input type="submit" class="btn btn-primary ml-2" id="viewUsers">
            <div id="usersSection"></div>
        </div>
        <hr>
        <div>
            <input class="form-control ml-2" type="text" id="myUsername" name="">
            <input class="form-control ml-2" type="text" id="myPassword" name="">
            <input type="submit" class="btn btn-primary ml-2" id="validateButton">
            <div id="validateSection"></div>
        </div>
        <hr>
        <div>
        	<input class="form-control" type="text" name="" id="searchName">
        	<div id="suggestionsBox"></div>
        </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function() {

        $('#myButton').click(function() {
            var myInput = $('#myInput').val();
            $.ajax({
                'url': 'assets/lib/server.php',
                'data': { 'pokemon': myInput },
                'type': 'GET',
                'success': editHTML
            });
            // alert(myInput);
        });

        function editHTML(jsonData) {
            $('#jsonSection').html("Received: " + jsonData);
            if (jsonData != "") {
                data = JSON.parse(jsonData);
                htmlstr = "<hr>";
                htmlstr += "Name: " + data.name + "<br>";
                htmlstr += "Type: " + data.type + "<br>";
                htmlstr += "Basic Move: " + data.moves.basic + "<br>";
                htmlstr += "Advance Move: " + data.moves.special + "<br>";
                $('#outputSection').html(htmlstr);
            } else {
                $('#outputSection').html("<br>Pokemon info not found");
            }
        }

        $('#viewUsers').click(function() {
            $.get('assets/lib/get.php', function(data, status) {
                var users = JSON.parse(data);
                // console.log(users['users']);
                var userhtml = "";
                for (var i = 0; i < users['users'].length; i++) {
                    userhtml += "<li>Name: " + users['users'][i]['name'] + "</li>";
                    userhtml += "<li>Email: " + users['users'][i]['email'] + "</li>";
                    userhtml += "<li>Password: " + users['users'][i]['password'] + "</li><br>";
                }
                $("#usersSection").html(userhtml);
            });
        });

        $('#validateButton').click(function() {
            var username = $('#myUsername').val();
            var password = $('#myPassword').val();
            $.post('assets/lib/post.php', {
                    username: username,
                    password: password
                },
                function(data) {
                    console.log(data);
                    $('#validateSection').html(data);
                });
        });

        $('#searchName').keyup(function(){
        	$.ajax({
        		url: 'assets/lib/name-suggestion.php',
        		type: 'POST',
        		data: {name: $('#searchName').val()},
        		success: function(data){
        			if(data != ""){
        				// data = JSON.parse(jsonData);
        				$('#suggestionsBox').html(data);
        			} else {
        				$('#suggestionsBox').html('');
        			}
        		}
        	});

        	
        });
    });
    </script>
</body>

</html>