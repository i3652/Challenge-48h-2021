

@include('header')

<form action="{{ route('connexion.connexion') }}" method="post" class="form-inline">
    {{csrf_field()}}

    <div class="form-group mb-2" style="margin-top:20px;margin-left:100px">
        <label for="staticEmail2" class="sr-only">email</label>
        <div class="col-sm-10">
            <input name="email" type="email" class="form-control" id="inputEmail" placeholder="email@email.com">
        </div>
    </div>

    @if($errors->has('email'))
        <p>Email est erroné!</p>
    @endif

    <label for="inputPassword2" class="sr-only" style="margin-top:20px;margin-left:100px">Mot de passe</label>
    <div class="col-sm-10" style="margin-top:15px;margin-left:100px">
        <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Mot de passe">
    </div>

    @if($errors->has('password'))
        <p>Mot de passe erroné!</p>
    @endif

    <input type="submit" class="btn btn-primary mb-2" value="Se Connecter" style="margin-left:-750px;margin-top:20px">

</form>
