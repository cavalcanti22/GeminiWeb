  

<body>

  <div id="bg"></div>

  <form method="POST" ">

    <label for="email">Email</label>
    <input type="text" name="email" id="" placeholder="Email" class="email">
    
    <label for="senha">Senha</label>
    <input type="password" name="senha" id="" placeholder="Senha" class="pass">
    
    <button type="submit">Login</button>
<div style="margin-top: 2em; ">
          <?php if (isset($_SESSION['feedback']))
  {
   echo $_SESSION['feedback'];
   session_unset($_SESSION['feedback']);
  } 
 ?>
</div>
  </form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  

