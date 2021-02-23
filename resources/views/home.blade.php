<body>
    @include('header')

    <form action="/search" method="post" role="search">
        {{ csrf_field() }}

        <div class="input-group" style="margin-top:20px;margin-left:50px">
            <label class="col-sm-2 col-form-label">Sélection de tag</label>
            <div class="col-sm-10">
                <input name="select" type="text" class="form-control" id="select" placeholder="Rechercher">
                <input type="submit" value="Rechercher" class="btn btn-primary mb-2" style="margin-top:20px">
                    <span class="glyphicon glyphicon-search"></span>
                </input>
            </div>
        </div>

        <h1 class="h1-images">Liste des images:</h1>

        @if(isset($details))
            @foreach($details as $image)
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img src="{{ $image->url_image }}" class="card-img-top img-fluid" alt="{{ $image->titre }}" />
                                <div class="card-body">
                                    <p class="card-text">
                                        <br />
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="/image" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @endif

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="img/1006_Cuisse_de_canard_de_Barbarie_VF_280_380_g.jpg" class="card-img-top img-fluid" alt="Responsive image" width=200 height=100/>
                            <div class="card-body">
                                <p class="card-text">
                                    <br />
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="/image" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="img/42557-3-RC.jpg" class="card-img-top img-fluid"
                                alt="Responsive image" width=200 height=100/>
                            <div class="card-body">
                                <p class="card-text">
                                    <br />
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="img/AdobeStock_176962345.jpg" class="card-img-top img-fluid" alt="Responsive image" width=200 height=100/>
                            <div class="card-body">
                                <p class="card-text">
                                    <br />
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="/image" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="img/20089-Ciboulette_coupee_500_g_PassionFroid.jpg" class="card-img-top img-fluid"
                                alt="Responsive image" width=200 height=100/>
                            <div class="card-body">
                                <p class="card-text">
                                    <br />
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="img/223038.jpg" class="card-img-top img-fluid"
                                alt="Responsive image" width=200 height=100/>
                            <div class="card-body">
                                <p class="card-text">
                                    <br />
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="img/31493_Eclair_parfum_vanille_45_g_Pasquier.jpg" class="card-img-top img-fluid" alt="Responsive image" width=200 height=100/>
                            <div class="card-body">
                                <p class="card-text">
                                    <br />
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="img/Filet_saumon_TRIM_E.jpg" class="card-img-top img-fluid" alt="Responsive image" width=200 height=100/>
                            <div class="card-body">
                                <p class="card-text">
                                    <br />
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="img/Fotolia_14473560_Subscription_XXL.jpg" class="card-img-top img-fluid" alt="Responsive image" width=200 height=100/>
                            <div class="card-body">
                                <p class="card-text">
                                    <br />
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="img/160253-2.jpg" class="card-img-top img-fluid"
                                alt="Responsive image" width=200 height=100/>
                            <div class="card-body">
                                <p class="card-text">
                                    <br />
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    @include('footer')
</body>

</html>
