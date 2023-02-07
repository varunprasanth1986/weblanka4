@if ($errors->any())
    <ul>
        {!! implode('',$errors->all('<li>:message</li>')) !!}
    </ul>
@endif
<form method="POST" action="/RegistrationAction">
    <label for="">Name<input type="text" name="name"></label>
    <label for="">Email<input type="text" name="email"></label>
    <label for="">Phone<input type="text" name="phone"></label>
    <label for="">Address<input type="text" name="address"></label>
    <label for="">Password<input type="password" name="password"></label>
    <label for="">Confirm Password<input type="password" name="password_confirmation"></label>
    <input type="submit" value="Register">
    @csrf
</form>