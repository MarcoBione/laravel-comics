<main class="py-4">

    <div class="container border border-primary py-4">

        <h2 class="text-primary">Comic Book</h2>

        <div class="row">
            @foreach ($products as $items)
                <div class="col">


                    <div class="card bg-dark border border-primary text-secondary">
                        <img class="_mycardimage d-block container-fluid" src="{{ $items['thumb'] }}" class="card-img-top"
                            alt="{{ $items['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $items['title'] }}</h5>
                            <p class="card-text">{{ $items['price'] }}</p>
                            <a href="#" class="btn btn-outline-primary">Info</a>
                        </div>

                    </div>


                </div>
            @endforeach
        </div>

    </div>

</main>
