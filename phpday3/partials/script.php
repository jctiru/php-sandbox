<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script> -->
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<!-- Compare passwords  -->
<script type="text/javascript">
    $('#registerPassword, #registerPassword2').on('keyup', function() {
        if ($('#registerPassword').val() == $('#registerPassword2').val()) {
            $('#registerButton').attr('disabled', false);
            $('#match').html('Match');
            // $('#match').css('color', 'green');
            $('#match').css('color', '#56CC9D');
        } else {
            $('#registerButton').attr('disabled', true);
            $('#match').html('Not Match');
            // $('#match').css('color', 'red');
            $('#match').css('color', '#FF7851');

        }
        if (($('#registerPassword').val() == "") && ($('#registerPassword2').val() == "")) {
            $('#match').html('');
        }
    });
</script>
<!-- Check available username -->
<script type="text/javascript">
    var timer;
    $('#registerUsername').on('keyup', function(){
        clearTimeout(timer);
        var username = $(this).val();
        timer = setTimeout(function(){
            checkUsernameAjax(username);
        }, 1000);
    });
    function checkUsernameAjax(username){
        if (username != '') {
            $.ajax({
                type: 'POST',
                url : 'register-authenticate.php',
                data: $('#registerUsername').serialize(),
                success: function(data){
                    $('#usercheck').html(data);
                    if(data == 'Username available'){
                        // $('#usercheck').css('color', 'green');
                        $('#usercheck').css('color', '#56CC9D');
                    } else {
                        // $('#usercheck').css('color', 'red');
                        $('#usercheck').css('color', '#FF7851');
                    }
                }
            });
        } else {
            $('#usercheck').html('');
        }   
    }
</script>
<!-- Authenticate sign in -->
<script type="text/javascript">
    $('#signInButton').on('click', function(e){
        if(($('#loginUsername').val().trim().length == 0) || ($('#loginPassword').val().trim().length == 0)){
            // 
        } else {
            $.ajax({
                url: 'authenticate.php',
                type: 'POST',
                data: $('#signInForm').serializeArray(),
                success: function(data){
                    $('#signInStatus').html(data);
                    if(data == "Success"){
                        $('#signInStatus').css('color', '#56CC9D');
                        location.reload();
                    } else {
                        $('#signInStatus').css('color', '#FF7851');
                    }                   
                }
            });
            e.preventDefault();           
        }
    });
</script>
<!-- Modal -->
<script type="text/javascript">
    $(".modalButton").click(function(){
        var index = $(this).data('index');
        $.ajax({
            url: 'partials/modal.php',
            type: 'POST',
            data: {index: index},
            success: function(data){
                var jsonData = JSON.parse(data);
                $('#modalForm').attr('action', 'edit.php?index=' + index);
                $('#modalItemImage').attr('src', jsonData.img);
                $('#modalItemTitle').val(jsonData.name);
                $('#modalItemCategory').val(jsonData.category);
                $('#modalItemDescription').html(jsonData.description);
                $('#modalItemPrice').val(jsonData.price);
            }
        });       
    });
</script>