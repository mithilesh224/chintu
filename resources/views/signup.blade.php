<h1>Signup</h1>
<form action="/user" method="POST">
    @csrf
    <label>First Name</label><br>
 <input type="text" name="fname" placeholder="enter user first name"><br>
 <label>Last Name</label><br>
 <input type="text" name="lname" placeholder="enter user last name"><br>
 <label>Email</label><br>
 <input type="text" name="email" placeholder="enter user mail"><br>
 <label>Password</label><br>
 <input type="password" name="password" placeholder="enter user password"><br>     
 <button type="submit">signup</button>
</form>
<h4 style="color:blue">Already a member?Log In</h4>