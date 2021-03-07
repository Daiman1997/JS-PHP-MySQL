<div id="registration_form" class="container__full">
  <div class="register" id="register">
    <form action="includes/form.php" method="post">
      <div class="shell">
        
          <input  type="email" name="email" placeholder="Email" tabindex="1"  required>
        
          
          <input  type="text" name="username" placeholder="login" tabindex="2"  required>
        
          
          <input  type="password" name="password" placeholder="password" tabindex="3"  required>
          
        <div  class="shell__gender">
          <span><input type="radio" name="gender" value="male" tabindex="4">Мужской</span>
          <span><input type="radio" name="gender" value="female" tabindex="4">Женский</span>
        </div>

        <div class="shell__button">
          <button type="submit" tabindex="5">Зарегестрироваться</button>
        </div>

      </div>
    </form>
  </div>
  
  <div class="login-form">
    <form action="includes/form.php" method="post">
      <div class="shell">
        
        <input  type="text" name="username" placeholder="login" tabindex="6"  required>
        
        <input  type="password" name="password" placeholder="password" tabindex="7"  required>

        <div class="shell__button">
          <button type="submit" tabindex="8">Войти</button>
        </div>

      </div>
    </form>
  </div>
</div>