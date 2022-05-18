<link rel="stylesheet" href="zarejestruj.css?dat=<?php echo strtotime(date("H:i:s")) ?>">

       <span class="message-message"></span>
<form id="signupForm">
       <div class="dialog_sign" title="Zarejestruj się">
              <ul class="username_sign" title="Wpisz swój email">
                     <input type="email" placeholder="Podaj email"required>
              </ul>
                            <br>
              <ul class="password_sign" title="Musi mieć 8 liter lub cyfr">
                     <input type="password" placeholder="Podaj hasło" required>
              </ul>
                            <br>
              <ul class="confirm_pass_sign" title=" Powtórz hasło">
                     <input type="password" placeholder="Powtórz hasło" required>
              </ul>
                            <br>
              <button class="sign_przycisk" title="Zarejestruj się" type="submit">Zarejestruj się</button>
              
       </div>
</form>

<script type="text/javascript">
  $(document).ready(function(){
      $("#signupForm").on("submit",function(e){
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url : "register.php",
            type: "POST",
            cache:false,
            data: formData,
            success:function(response){
              data = JSON.parse(response);
              if (data.error == "0") {
                $("#signupForm").trigger("reset");
                $('.message-message').replaceWith('<div class="alert alert-success alert-dismissible" role="alert">'
                 + data.message + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
              }else if(data.error == "1") {
               $('.message-message').replaceWith('<div class="alert alert-danger alert-dismissible" role="alert">'
                 + data.message + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
              }
            }
        });
      });
  });
</script>