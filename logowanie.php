<link rel="stylesheet" href="logowanie.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
       
<form id="loginForm">
       <div class="dialog" title="Zaloguj się">
              <div class="form-group">
                     <ul class="username" title="Wpisz swój email"><input type="text" placeholder="Podaj email"required></ul>     
              </div>
                     <br>
              <div class="form-group">
                     <ul class="password" title="Wpisz swoje hasło"><input type="password" placeholder="Podaj hasło" required>
              </div>
                     <br>
              <div class="form-group">
                     <ul class="remember" title="Zapamietamy Cie">Zapamietaj mnie  <input type="checkbox"></ul>
              </div>
                     <br>
              <div class="form-group">
                     <div class="signup" title="Nowe konto"><span>Nie masz konta?</span><span class="okno_sign"> Stwórz je tu</span></div>
              </div>              
                     <br>
              <button class="zaloguj_przycisk" title="Zaloguj się">Zaloguj się</button>
       </div>
</form>

