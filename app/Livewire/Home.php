<?php

namespace App\Livewire;

use App\Models\jadwal_pelet;
use Livewire\Component;

class Home extends Component
{

    public ?string $jam = "";

    public function save() {

        if(is_null($this->jam) || empty($this->jam)) {
            session()->flash("error", "Jam tidak boleh kosong");
            return redirect()->route('home');
        }


        jadwal_pelet::create([
            "jam" => $this->jam,
        ]);

        session()->flash("message", "Berhasil tambah jadwal");
        return redirect()->route('home');
    }

    public function remove(string $id) {
        jadwal_pelet::findOrFail($id)->delete();

        session()->flash("message", "Berhasil hapus jadwal");
        return redirect()->route('home');
    }

    public function render()
    {
        $jadwals = jadwal_pelet::all();
        return view('livewire.home', [
            "jadwals" => $jadwals
        ]);
    }
}
