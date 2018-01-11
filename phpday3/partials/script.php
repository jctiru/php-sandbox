<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
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
<!-- Check availbale username -->
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
    };
</script>