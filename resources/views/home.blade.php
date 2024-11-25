@extends("app")


@section("slot")
    <div class="container">
        <h2 class="title text-center">AQUARIUM MONITORING</h2>


        {{-- SUHU --}}
        <div class="d-flex flex-column align-items-center wrapper">
            <div class="card card-monitoring">
                <div class="row g-0">
                    <div class="col d-flex flex-colum align-items-center offset-2">
                        <img src="{{ asset("assets/temparature 1.png") }}" class="img-fluid rounded-start monitoring-icon"
                             alt="...">
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title">{{ $sensor->temperature ?? 0 }} <sup>&deg;c</sup></h5>
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="card-monitoring-subtitle">TEMPERATUR</h4>
        </div>

        {{-- PH --}}
        <div class="d-flex flex-column align-items-center wrapper">
            <div class="card card-monitoring">
                <div class="row g-0">
                    <div class="col d-flex flex-colum align-items-center offset-2">
                        <img src="{{ asset("assets/ph 1.png") }}" class="img-fluid rounded-start monitoring-icon"
                             alt="...">
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $sensor->ph ?? 0 }} <sup>pH</sup>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="card-monitoring-subtitle">PH</h4>
        </div>


        {{-- TURBIDITY --}}
        <div class="d-flex flex-column align-items-center wrapper">
            <div class="card card-monitoring">
                <div class="row g-0">
                    <div class="col d-flex flex-colum align-items-center offset-2">
                        <img src="{{ asset("assets/drop 1.png") }}" class="img-fluid rounded-start monitoring-icon"
                             alt="...">
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $sensor->turbidity ?? 0 }} <sup>NTU</sup>
                            </h5>
                        </div>
                    </div>

                </div>
            </div>

            <h4 class="card-monitoring-subtitle">TURBIDITY</h4>
        </div>


        {{-- TURBIDITY --}}
        <div class="d-flex flex-column align-items-center wrapper">
            <div class="card card-monitoring">
                <div class="row g-0">
                    <div class="col d-flex flex-colum align-items-center offset-2">
                        <img src="{{ asset("assets/drop 2.png") }}" class="img-fluid rounded-start monitoring-icon"
                             alt="...">
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $sensor->tds ?? 0 }} <sup>PPM</sup>
                            </h5>
                        </div>
                    </div>

                </div>
            </div>

            <h4 class="card-monitoring-subtitle">TDS</h4>
        </div>



        $host = 'localhost'; // Ganti dengan host database Anda (contoh: 'localhost')
        $user = 'u238830624_andi';      // Ganti dengan username database Anda
        $pass = '8ysrnQ9m6G$';          // Ganti dengan password database Anda
        $dbname = 'u238830624_andi';


    </div>

@endsection
