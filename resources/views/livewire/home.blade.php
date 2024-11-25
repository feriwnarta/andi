<div class="container">
    <h2 class="title text-center">AQUARIUM MONITORING</h2>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif



    @if(isset($jadwals))

        @foreach($jadwals as $jadwal)
            <div class="card mb-3">
                <div class="row g-0 px-4 py-4 align-items-center"> <!-- menambahkan align-items-center di sini -->
                    <div class="col">
                        <h2>{{ \Carbon\Carbon::createFromFormat('H:i:s', $jadwal->jam)->format('H:i') }}</h2>
                    </div>

                    <div class="col-auto d-flex justify-content-end"> <!-- gunakan col-auto agar lebar kolom hanya sesuai kontennya -->
                        <button type="button" class="btn-close" aria-label="Close" wire:click="remove({{ $jadwal->id }})"></button>
                    </div>
                </div>
            </div>


        @endforeach

    @else
        <h1>Tidak ada jadwal</h1>
    @endif




    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Jadwal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah jadwal</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jam</label>
                            <input type="time" wire:model="jam" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Masukan jam</div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" wire:click="save">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>
