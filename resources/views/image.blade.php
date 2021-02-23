@include('header')


<form action="{{ route('image.showImage') }}" method="post" class="form-inline">
        {{csrf_field()}}

        <div class="form-group mb-2">
            <label name="title" class="sr-only"> {{ $image->title }} </label>
        </div>

        <div class="form-group mb-2">
            <img src="{{ $image->url_image }}" class="card-img-top img-fluid" alt="Responsive image" width=200 height=100/>
        </div>

        <a href="/modifyProfil"><input type="button" class="btn btn-primary mb-2" value="Modifier le profil"></a>

    </form>
