@include('header')

<form action="{{ route('inscription.inscription') }}" method="post">
    {{ csrf_field() }}

    <div class="form-group row"style="margin-top:20px;margin-left:50px">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input name="email" type="email" class="form-control" id="inputEmail" placeholder="email@email.com" value="{{ old('email') }}">
        </div>
    </div>

    @if($errors->has('email'))
        <p>Email est obligatoire!</p>
    @endif

    <div class="form-group row" style="margin-top:20px;margin-left:50px">
        <label for="inputPassword" class="col-sm-2 col-form-label">Mot de passe</label>
        <div class="col-sm-10">
            <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Mot de passe">
        </div>
    </div>

    @if($errors->has('password'))
        <p>Le Mot de passe est obligatoire!</p>
    @endif

    <div class="form-group row" style="margin-top:20px;margin-left:50px">
        <label for="password_confirmation" class="col-sm-2 col-form-label">Confirmer le mot de passe</label>
        <div class="col-sm-10">
            <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Mot de passe">
        </div>
    </div>

    @if($errors->has('password_confirmation'))
        <p>Le Mot de passe est obligatoire!</p>
    @endif

    <input type="submit" value="Créer un compte" class="btn btn-primary mb-2" style="margin-top:20px;margin-left:50px">
</form>
