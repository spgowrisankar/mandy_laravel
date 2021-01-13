<h1>User Account</h1>
<!-- @if($errors->any())
<div>
    <ul>
        @foreach($errors->all() as $err)
        <li>{{$err}}</li>
        @endforeach
    </ul>
</div>
@endif -->
<form action="usercontroller" method="post">
    <label for="Email">Email:</label>
    <input type="text" name="email">
    <br>
    @error('email')
    <span style="color:red;">{{$message}}</span>
    @enderror
    <br>
    <br>
    <label for="Password">Password:</label>
    <input type="password" name="password">
    <br>
    @error('password')
    <span style="color:red;">{{$message}}</span>
    @enderror
    <br>
    @csrf    
    <br>
    <input type="submit" value="Submit">

</form>
