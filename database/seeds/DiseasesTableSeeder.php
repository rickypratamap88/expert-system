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
            'information' => '<p>Belum</p>',
            'suggestion' => '<p>Belum</p>',
        ]);

        Disease::create([
            'code' => 'P02',
            'name' => 'Abses Peripikal',
            'probability' => '0.1',
            'appear' => '3',
            'information' => '<p>Belum</p>',
            'suggestion' => '<p>Belum</p>',
        ]);

        Disease::create([
            'code' => 'P03',
            'name' => 'Alveolar Osteitis',
            'probability' => '0.1',
            'appear' => '2',
            'information' => '<p>Belum</p>',
            'suggestion' => '<p>Belum</p>',
        ]);

        Disease::create([
            'code' => 'P04',
            'name' => 'Abrasi Gigi',
            'probability' => '0.1',
            'appear' => '2',
            'information' => '<p>Belum</p>',
            'suggestion' => '<p>Belum</p>',
        ]);

        Disease::create([
            'code' => 'P05',
            'name' => 'Bruxism(Gigi Gemeretak)',
            'probability' => '0.1',
            'appear' => '2',
            'information' => '<p>Belum</p>',
            'suggestion' => '<p>Belum</p>',
        ]);

        Disease::create([
            'code' => 'P06',
            'name' => 'Gingivitis(Radang Gusi)',
            'probability' => '0.1',
            'appear' => '3',
            'information' => '<p>Belum</p>',
            'suggestion' => '<p>Belum</p>',
        ]);

        Disease::create([
            'code' => 'P07',
            'name' => 'Gangguan Gigi Bungsu',
            'probability' => '0.1',
            'appear' => '3',
            'information' => '<p>Belum</p>',
            'suggestion' => '<p>Belum</p>',
        ]);

        Disease::create([
            'code' => 'P08',
            'name' => 'Angular Ceilitis(Radang Sudut Bibir)',
            'probability' => '0.1',
            'appear' => '3',
            'information' => '<p>Belum</p>',
            'suggestion' => '<p>Belum</p>',
        ]);

        Disease::create([
            'code' => 'P09',
            'name' => 'Karies Media',
            'probability' => '0.1',
            'appear' => '2',
            'information' => '<p>Belum</p>',
            'suggestion' => '<p>Belum</p>',
        ]);

        Disease::create([
            'code' => 'P10',
            'name' => 'Karies Profunda',
            'probability' => '0.1',
            'appear' => '2',
            'information' => '<p>Belum</p>',
            'suggestion' => '<p>Belum</p>',
        ]);

        Disease::create([
            'code' => 'P11',
            'name' => 'Karies Superfisial',
            'probability' => '0.1',
            'appear' => '2',
            'information' => '<p>Belum</p>',
            'suggestion' => '<p>Belum</p>',
        ]);

        Disease::create([
            'code' => 'P12',
            'name' => 'Kandidiasis',
            'probability' => '0.1',
            'appear' => '2',
            'information' => '<p>Belum</p>',
            'suggestion' => '<p>Belum</p>',
        ]);

        Disease::create([
            'code' => 'P13',
            'name' => 'Kalkulus (Karang gigi)',
            'probability' => '0.1',
            'appear' => '3',
            'information' => '<p>Belum</p>',
            'suggestion' => '<p>Belum</p>',
        ]);

        Disease::create([
            'code' => 'P14',
            'name' => 'Nekrosis Pulpa',
            'probability' => '0.1',
            'appear' => '2',
            'information' => '<p>Belum</p>',
            'suggestion' => '<p>Belum</p>',
        ]);

        Disease::create([
            'code' => 'P15',
            'name' => 'Periodontitis',
            'probability' => '0.1',
            'appear' => '4',
            'information' => '<p>Belum</p>',
            'suggestion' => '<p>Belum</p>',
        ]);
    }
}
