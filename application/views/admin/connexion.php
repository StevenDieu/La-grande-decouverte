<div class="content admin-connexion">
	<h1>login admin</h1>
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
   <div class="text-center"><img src="http://wsnippets.com/wp-content/uploads/2013/10/logo_180.png?8885a5" /></div>
   <h1 class="heading text-center">One account. All of WSnippets.com.</h1>
   <p class="heading-desc text-center">Sign in to continue to WSnippets</p>
     <form class="form-signin">
    <img data-src="holder.js/140x140" src="https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-ash2/v/t1.0-9/227195_1822656659212_2785457_n.jpg?oh=967e9871062e8a01f5582877271955a3&oe=55C2E856&__gda__=1440067899_690db98a7b0d8757cd68a1311a2ce13f" class="img-circle">

    <input type="text" class="form-control" placeholder="Email" autofocus>
        <input type="password" class="form-control" placeholder="Password">
     <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <label class="checkbox pull-left">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
    <a href="#" class="pull-right help">Besoin d'aide ? </a><span class="clearfix"></span> 

      </form>
    <a href="#" class="text-center account-creation">Create an account </a>
    </div>

    <style>
    body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #fff;
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
    margin-top: 10px;
}
.account-creation
{
    display: block;
    margin-top: 10px;
}</style>
