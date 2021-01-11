<h1>User Account</h1>
<form class="" action="usercontroller" method="post">
    <label for="Email">Email:</label>
    <input type="text" name="email">
    {{@csrf_field()}}
    <br>
    <br>
    <label for="Password">Password:</label>
    <input type="password" name="password">
    <br>
    <br>
    <input type="submit" value="Submit">

</form>
