<h1>User login</h1>
<form action="/user" method="POST">
    @csrf 
    <!--Cross site request forgery-->
 <input type="text" name="email" placeholder="enter user name"><br><br>
 <input type="password" name="password" placeholder="enter user password"><br><br>     
 <button type="submit">login</button>
</form>
<h4 style="color:blue">forget password</h4>