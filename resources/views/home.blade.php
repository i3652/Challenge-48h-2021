<body>
    @include('header')

    <form action="/search" method="post" role="search">
        {{ csrf_field() }}

        <div class="input-group">
            <label class="col-sm-2 col-form-label">Sélection de tag</label>
            <div class="col-sm-10">
                <input name="select" type="text" class="form-control" id="select" placeholder="Rechercher">
                <input type="submit" value="Rechercher" class="btn btn-primary mb-2">
                    <span class="glyphicon glyphicon-search"><span>
                </input>
            </div>
            
        </div>

        <h1 class="h1-images">Liste des images:</h1>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="produits/super_man.jpg" class="card-img-top img-fluid" alt="Responsive image" />
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
                            <img src="produits/krusty_simpsons.jpg" class="card-img-top img-fluid"
                                alt="Responsive image" />
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
                            <img src="produits/goonies.jpg" class="card-img-top img-fluid" alt="Responsive image" />
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    >
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="produits/star_trek_kirk.jpg" class="card-img-top img-fluid"
                                alt="Responsive image" />
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="produits/little_miss_sunshine.jpg" class="card-img-top img-fluid"
                                alt="Responsive image" />
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="produits/hulk.jpg" class="card-img-top img-fluid" alt="Responsive image" />
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="produits/simpsons.jpg" class="card-img-top img-fluid" alt="Responsive image" />
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="produits/happy.jpg" class="card-img-top img-fluid" alt="Responsive image" />
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="produits/wonder_woman.jpg" class="card-img-top img-fluid"
                                alt="Responsive image" />
                            <div class="card-body">
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
