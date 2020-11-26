<?php

use App\Symptom;
use Illuminate\Database\Seeder;

class SymtomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Symptom::create([
            'code' => 'G01',
            'symptom' => 'Pembengkakan atau peradangan pada gusi',
        ]);

        Symptom::create([
            'code' => 'G02',
            'symptom' => 'Sulit mengunyah',
        ]);

        Symptom::create([
            'code' => 'G03',
            'symptom' => 'Gigi bergoyang',
        ]);

        Symptom::create([
            'code' => 'G04',
            'symptom' => 'Bau mulut tak sedap',
        ]);

        Symptom::create([
            'code' => 'G05',
            'symptom' => 'Rahang terjadi pembengkakan',
        ]);

        Symptom::create([
            'code' => 'G06',
            'symptom' => 'Rasa sakit atau nyeri di sekitar gusi',
        ]);

        Symptom::create([
            'code' => 'G07',
            'symptom' => 'Demam',
        ]);

        Symptom::create([
            'code' => 'G08',
            'symptom' => 'Pembengkakan kelenjar getah bening sekitar rahang atau leher ',
        ]);

        Symptom::create([
            'code' => 'G09',
            'symptom' => 'Pembengkakan / Nanah disertai rasa sakit atau nyeri disekitar gusi',
        ]);

        Symptom::create([
            'code' => 'G10',
            'symptom' => 'Rasa sakit yang hebat selama beberapa hari pencabutan gigi',
        ]);

        Symptom::create([
            'code' => 'G11',
            'symptom' => 'Tulang terlihat pada Socket',
        ]);

        Symptom::create([
            'code' => 'G12',
            'symptom' => 'Gigi terasa ngilu dan sensitif',
        ]);

        Symptom::create([
            'code' => 'G13',
            'symptom' => 'Bentuk gigi tampak terkikis',
        ]);

        Symptom::create([
            'code' => 'G14',
            'symptom' => 'Sakit kepala',
        ]);

        Symptom::create([
            'code' => 'G15',
            'symptom' => 'Insomnia atau merasa gelisah',
        ]);

        Symptom::create([
            'code' => 'G16',
            'symptom' => 'Suara gemeretak gigi yang terdengar ketika tidur',
        ]);

        Symptom::create([
            'code' => 'G17',
            'symptom' => 'Gusi mudah berdarah',
        ]);

        Symptom::create([
            'code' => 'G18',
            'symptom' => 'Bentuk gusi agak membulat',
        ]);

        Symptom::create([
            'code' => 'G19',
            'symptom' => 'Konsistensi gusi menjadi lunak',
        ]);

        Symptom::create([
            'code' => 'G20',
            'symptom' => 'Pembengkakan atau peradangan pada gusi paling belakang',
        ]);

        Symptom::create([
            'code' => 'G21',
            'symptom' => 'Kemerahan pada sudut-sudut mulut',
        ]);

        Symptom::create([
            'code' => 'G22',
            'symptom' => 'Sudut mulut terasa nyeri',
        ]);

        Symptom::create([
            'code' => 'G23',
            'symptom' => 'Sudut mulut bersisik',
        ]);

        Symptom::create([
            'code' => 'G24',
            'symptom' => 'Ulkulus (luka pada sudut mulut)',
        ]);

        Symptom::create([
            'code' => 'G25',
            'symptom' => 'Gigi Berlubang',
        ]);

        Symptom::create([
            'code' => 'G26',
            'symptom' => 'Dentin terlihat',
        ]);

        Symptom::create([
            'code' => 'G27',
            'symptom' => 'Pulpa terinfeksi/radang pada pulpa',
        ]);

        Symptom::create([
            'code' => 'G28',
            'symptom' => 'Sakit berdenyut tanpa rasangan',
        ]);

        Symptom::create([
            'code' => 'G29',
            'symptom' => 'Bintik putih pada gigi',
        ]);

        Symptom::create([
            'code' => 'G30',
            'symptom' => 'Bercak putih pada lidah',
        ]);

        Symptom::create([
            'code' => 'G31',
            'symptom' => 'Bercak putih pada rongga mulut',
        ]);

        Symptom::create([
            'code' => 'G32',
            'symptom' => 'Terdapat endapan plak',
        ]);

        Symptom::create([
            'code' => 'G33',
            'symptom' => 'Terdapat karang gigi',
        ]);

        Symptom::create([
            'code' => 'G34',
            'symptom' => 'Pembusukan gigi Dan pulpa mati rasa',
        ]);

        Symptom::create([
            'code' => 'G35',
            'symptom' => 'Ruang pulpa terbuka',
        ]);

        Symptom::create([
            'code' => 'G36',
            'symptom' => 'Gusi atau gigi bernanah',
        ]);

        Symptom::create([
            'code' => 'G37',
            'symptom' => 'Gusi berwarna merah',
        ]);
    }
}
