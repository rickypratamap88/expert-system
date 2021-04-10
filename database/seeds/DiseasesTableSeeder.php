<?php

use App\Disease;
use Illuminate\Database\Seeder;

class DiseasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Disease::create([
            'code' => 'P01',
            'name' => 'Abses Periodontal',
            'probability' => '0.1',
            'appear' => '2',
            'information' => '<p>Abses Periodontal Merupakan infeksi yang  terletak di sekitar poket periodontal dan dapat  menyebabkan kerusakan ligamentum atau  jaringan periodontal dan tulang rahang.</p>',
            'suggestion' => '<p>Perawatan dan Pemberian Antibiotik</p>',
        ]);

        Disease::create([
            'code' => 'P02',
            'name' => 'Abses Peripikal',
            'probability' => '0.1',
            'appear' => '3',
            'information' => '<p>Abses Peripikal merupakan pembentukan nanah  atau pus diujung akar gigi yang merupakan  kelanjutan dari infeksi pulpa gigi bermula dari  karies atau lubang yang dalam yang mengenai pulpa sehingga pulpa menjadi mati atau nekrosis</p>',
            'suggestion' => '<p>Perawatan dan Pemberian Antibiotik</p>',
        ]);

        Disease::create([
            'code' => 'P03',
            'name' => 'Alveolar Osteitis',
            'probability' => '0.1',
            'appear' => '2',
            'information' => '<p>Alveolar Osteitis sama dengan dry socket adalah sakit pasca pencabutan satu sampai tiga hari yang tidak umum karena bekuan darah di lokasi bekas pencabutan gigi telah lepas sebelum luka sembuh biasanya nyeri sedang sampai berat diikuti peradangan di sekitar area bekas pencabutan.</p>',
            'suggestion' => '<p> Perawatan dengan terapi antibiotik,dan membalut luka.</p>',
        ]);

        Disease::create([
            'code' => 'P04',
            'name' => 'Abrasi Gigi',
            'probability' => '0.1',
            'appear' => '2',
            'information' => '<p>Abrasis Gigi merupakan hilangnya struktur gigi  akibat dari kebiasaan menyikat gigi yang terlalu keras, bagian yang terkikis adalah email kadang dentin yang menimbulkan rasa ngilu.</p>',
            'suggestion' => '<p>Menggunakan bulu sikan gigi yang halus,dengan mengoleskan fluor, dan melakukan penambalan gigi.</p>',
        ]);

        Disease::create([
            'code' => 'P05',
            'name' => 'Bruxism(Gigi Gemeretak)',
            'probability' => '0.1',
            'appear' => '2',
            'information' => '<p>Bruxism (Gigi Gemeretak) merupakan gerakan  yang tidak sengaja atau reflek dalam menggerakkan gigi, menggerus gigi selama atau saat tidur yang dapat menimbukan gigi terasah atau terkikis hingga rusak dan kadang menyebabkan sakit kepala.</p>',
            'suggestion' => '<p>Dengan menggunakan alat bantu saat tidur (nightguard) dan Melatih postur tubuh yang baik.</p>',
        ]);

        Disease::create([
            'code' => 'P06',
            'name' => 'Gingivitis(Radang Gusi)',
            'probability' => '0.1',
            'appear' => '3',
            'information' => '<p>Gingivitis (Radang Gusi) merupakan radang yang terjadi pada gusi karena kurangnya perawatan atau pembersihan gigi serta mulut.</p>',
            'suggestion' => '<p>Berkumur dengan obat kumur, Konsumsi Vitamin C, dan Banyak minum air putih.</p>',
        ]);

        Disease::create([
            'code' => 'P07',
            'name' => 'Gangguan Gigi Bungsu',
            'probability' => '0.1',
            'appear' => '3',
            'information' => '<p>Gangguan Gigi Bungsu merupakan keadaaan dimana gigi geraham terakhir tidak dapat keluar dengan sempurna karena terhalang gigi di depannya atau kekurangan ruangan atau rahang sempit.</p>',
            'suggestion' => '<p>Dengan melakukan pencabutan pada gigi bungsu.</p>',
        ]);

        Disease::create([
            'code' => 'P08',
            'name' => 'Angular Ceilitis(Radang Sudut Bibir)',
            'probability' => '0.1',
            'appear' => '3',
            'information' => '<p>Angular Ceilitis (Radang Sudut Bibir) merupakan luka di sudut mulut atau peradangan yang terjadi karena banyak faktor seperti infeksi bakteri, virus ataupun jamur.</p>',
            'suggestion' => '<p>Dengan memakai obat anti jamur dan Konsumsi banyak air putih.</p>',
        ]);

        Disease::create([
            'code' => 'P09',
            'name' => 'Karies Media',
            'probability' => '0.1',
            'appear' => '2',
            'information' => '<p>Karies Media merupakan lubang gigi yang sudah mengenai email dan sebagian dentin yang menyebabkan ngilu.</p>',
            'suggestion' => '<p>Dengan melakukan penambalan gigi.</p>',
        ]);

        Disease::create([
            'code' => 'P10',
            'name' => 'Karies Profunda',
            'probability' => '0.1',
            'appear' => '2',
            'information' => '<p>Karies Profunda merupakan lubang pada gigi yang menjalar dari email dentin dan bahkan menembus pulpa menimbulkan rasa sakit yang spontan.</p>',
            'suggestion' => '<p>Dengan melakukan penambalan gigi</p>',
        ]);

        Disease::create([
            'code' => 'P11',
            'name' => 'Karies Superfisial',
            'probability' => '0.1',
            'appear' => '2',
            'information' => '<p>Karies Superfisial merupakan lubang pada sisi yang baru mencapai daerah email dan jarang memberi keluhan.</p>',
            'suggestion' => '<p>Dengan melakukan penambalan gigi</p>',
        ]);

        Disease::create([
            'code' => 'P12',
            'name' => 'Kandidiasis',
            'probability' => '0.1',
            'appear' => '2',
            'information' => '<p>Kandidiasis merupakan infeksi jamur pada kulit mukosa mulut spesis yang paling umum ditemukan adalah candida albicaus</p>',
            'suggestion' => '<p>Dengan memakai obat anti jamur dan Konsumsi banyak air putih.</p>',
        ]);

        Disease::create([
            'code' => 'P13',
            'name' => 'Kalkulus (Karang gigi)',
            'probability' => '0.1',
            'appear' => '3',
            'information' => '<p>Kalkulus (Karang Gigi) merupakan plak atau sisa makanan yang melekat pada gigi dan terjadi karena kurangnya pembersihan.</p>',
            'suggestion' => '<p>Melakukan scalling atau pembersihan karang gigi.</p>',
        ]);

        Disease::create([
            'code' => 'P14',
            'name' => 'Nekrosis Pulpa',
            'probability' => '0.1',
            'appear' => '2',
            'information' => '<p>Nekrosis Pulpa merupakan proses kematian pulpa yang merupakan lanjutan dari proses infeksi atau peradangan pulpa baik kronik ataupun akut yang tidak dirawat.</p>',
            'suggestion' => '<p>Dengan melakukan pencabutan gigi.</p>',
        ]);

        Disease::create([
            'code' => 'P15',
            'name' => 'Periodontitis',
            'probability' => '0.1',
            'appear' => '4',
            'information' => '<p>Periodontitis merupakan infeksi gusi berat yang dapat menyebabkan kerusakan pada jaringan lunak dan tulang penyangga gigi</p>',
            'suggestion' => '<p>Dengan melakukan Perawatan dan perbaikan pada akar gigi.</p>',
        ]);
    }
}
