@include('header')

<form action="{{ route('inscription.inscription') }}" method="post">
    {{ csrf_field() }}

    <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input name="email" type="email" class="form-control" id="inputEmail" placeholder="email@email.com" value="{{ old('email') }}">
        </div>
    </div>

    @if($errors->has('email'))
        <p>Email est obligatoire!</p>
    @endif

    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Mot de passe</label>
        <div class="col-sm-10">
            <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Mot de passe">
        </div>
    </div>

    @if($errors->has('password'))
        <p>Le Mot de passe est obligatoire!</p>
    @endif

    <div class="form-group row">
        <label for="confirmPassword" class="col-sm-2 col-form-label">Confirmer le mot de passe</label>
        <div class="col-sm-10">
            <input name="confirmPassword" type="password" class="form-control" id="confirmPassword" placeholder="Mot de passe">
        </div>
    </div>

    @if($errors->has('confirmPassword'))
        <p>Le Mot de passe est obligatoire!</p>
    @endif

    <input type="submit" value="Créer un compte" class="btn btn-primary mb-2">
</form>
