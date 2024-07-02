<?php

namespace Database\Seeders;

use App\Models\Geografis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeografisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Geografis::create([
                "name" => "Desa Hegarmanah",
                "koordinat" => "6.927927, 106.819944",
                "luas" => "148,37 Km",
                "utara" => "Desa Batununggal Kec.Cibadak",
                "selatan" => "Desa Bojong kembar Kec.Cikembar",
                "timur" => "Desa Cicantayan dan Desa Sukadamai Kec.Cicantayan",
                "barat" => "Desa Cimanggis
                Kec.Cicantayan dan Desa
                Sekarwangi Kec. Cibadak.",
                "description" => "Desa Hegarmanah berada di
                Kecamatan CIcantayan, Kabupaten
                Sukabumi, Jawa Barat. Secara
                geografis, Desa Hegarmanah terletak
                diantara …. LS dan ….. BT. Desa
                Hegarmanah memiliki wilayah seluas
                1.172 ha. Jarak dari ibukota kecamatan
                kurang lebih…. km, sedangkan jarak ke
                ibukota kabupaten sejauh kurang
                lebih… km.",
            ]);
    }
}
