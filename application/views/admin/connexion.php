<div class="content admin-connexion">
  <?php echo validation_errors(); ?>
   <?php echo form_open('admin/index/login'); ?>
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="passowrd" name="password"/>
     <br/>
     <input type="submit" value="Login"/>
   </form>
</div>

<div class="container">
   <div class="text-center"><img src="<?php echo asset_url(''); ?>images/header/finalogo_blanc.png" /></div>
     <form class="form-signin">
    <input type="text" class="form-control" placeholder="Email" autofocus>
        <input type="password" class="form-control" placeholder="Mot de passe">
     <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
        <label class="checkbox pull-left">
          <input type="checkbox" value="remember-me"> 
          Se souvenir de moi
        </label>
    <a href="#" class="pull-right help">Besoin d'aide ? </a><span class="clearfix"></span> 
      </form>
    </div>

    <style>
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #000;
      }

      .form-signin .form-control:active{
        border-color : #000;
      }

      .form-signin .form-control:focus{
        border-color : #000;
      }

      .btn-primary{
        color : #fff;
        background-color: #000;
        border-color : #fff;
      }

      .btn-primary:hover{
        color : #fff;
        opacity : 0.9;
        background-color: #000;
        border-color : #fff;
      }

      .text-center{
        margin-bottom: 50px;
      }
      .form-signin {
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
         background-color: #f7f7f7;
          -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
          -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
          box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      }

      .form-signin img{
      margin:0 25% 0 25%;
      }

      .heading{
        font-size:25px;
      }
      .heading-desc{
        font-size:18px;
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-left: 15px;
        margin-bottom: 10px;
      }
      .form-signin .checkbox {
        font-weight: normal;
      }

      .form-signin .form-control {
        position: relative;
        font-size: 16px;
        height: auto;
        padding: 10px;
        -webkit-box-sizing: border-box;
           -moz-box-sizing: border-box;
                box-sizing: border-box;
      }
      .form-signin .form-control:focus {
        z-index: 2;
      }
      .form-signin input[type="text"] {
        margin-bottom: -1px;
        border-radius: 0;

      }
      .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-radius: 0;
      }
      .help
      {
          color : #000;
          margin-top: 10px;
      }
      .account-creation
      {
          display: block;
          margin-top: 10px;
      }</style>
