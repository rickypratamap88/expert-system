<?php

namespace App\Http\Controllers\Users;

use App\{Consultation, Disease, Symptom, Temporary, TemporaryFinal};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, DB};

class DiagnosisController extends Controller
{
    public function index()
    {
        $symtoms = Symptom::all();
        return view('users.diagnosis.index', compact('symtoms'));
    }


    // penyakit
    public function getProbAbsesPeriodontal()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 1)->get() as $probTooth) {
            $total = $total * $probTooth->probability;
        }

        foreach (Disease::where('id', 1)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbAbsesPeripikal()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 2)->get() as $probTooth) {
            $total = $total * $probTooth->probability;
        }

        foreach (Disease::where('id', 2)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbAlveolarOsteitis()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 3)->get() as $probTooth) {
            $total = $total * $probTooth->probability;
        }

        foreach (Disease::where('id', 3)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbAbrasiGigi()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 4)->get() as $probTooth) {
            $total = $total * $probTooth->probability;
        }

        foreach (Disease::where('id', 4)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbBruxism()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 5)->get() as $probTooth) {
            $total = $total * $probTooth->probability;
        }

        foreach (Disease::where('id', 5)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbGingivitis()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 6)->get() as $probTooth) {
            $total = $total * $probTooth->probability;
        }

        foreach (Disease::where('id', 6)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbGangguanGigiBungsu()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 7)->get() as $probTooth) {
            $total = $total * $probTooth->probability;
        }

        foreach (Disease::where('id', 7)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbAngularCeilitis()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 8)->get() as $probTooth) {
            $total = $total * $probTooth->probability;
        }

        foreach (Disease::where('id', 8)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbKariesMedia()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 9)->get() as $probTooth) {
            $total = $total * $probTooth->probability;
        }

        foreach (Disease::where('id', 9)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbKariesProfunda()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 10)->get() as $probTooth) {
            $total = $total * $probTooth->probability;
        }

        foreach (Disease::where('id', 10)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbKariesSuperfisial()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 11)->get() as $probTooth) {
            $total = $total * $probTooth->probability;
        }

        foreach (Disease::where('id', 11)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbKandidiasis()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 12)->get() as $probTooth) {
            $total = $total * $probTooth->probability;
        }

        foreach (Disease::where('id', 12)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbKalkulus()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 13)->get() as $probTooth) {
            $total = $total * $probTooth->probability;
        }

        foreach (Disease::where('id', 13)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbNekrosisPulpa()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 14)->get() as $probTooth) {
            $total = $total * $probTooth->probability;
        }

        foreach (Disease::where('id', 14)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }
    
    public function getProbPeriodontitis()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 15)->get() as $probTooth) {
            $total = $total * $probTooth->probability;
        }

        foreach (Disease::where('id', 15)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }








    // hasil perhitungan probabilitas
    public function resultProbAbsesPeriodontal($absesPeriodontal)
    {
        TemporaryFinal::where('disease_id', 1)->update(['results' => $absesPeriodontal]);
    }

    public function resultProbAbsesPeripikal($absesPeripikal)
    {
        TemporaryFinal::where('disease_id', 2)->update(['results' => $absesPeripikal]);
    }

    public function resultProbAlveolarOsteitis($alveolarOsteitis)
    {
        TemporaryFinal::where('disease_id', 3)->update(['results' => $alveolarOsteitis]);
    }

    public function resultProbAbrasiGigi($abrasiGigi)
    {
        TemporaryFinal::where('disease_id', 4)->update(['results' => $abrasiGigi]);
    }

    public function resultProbBruxism($bruxism)
    {
        TemporaryFinal::where('disease_id', 5)->update(['results' => $bruxism]);
    }

    public function resultProbGingivitis($gingivitis)
    {
        TemporaryFinal::where('disease_id', 6)->update(['results' => $gingivitis]);
    }

    public function resultProbGangguanGigiBungsu($gangguanGigiBungsu)
    {
        TemporaryFinal::where('disease_id', 7)->update(['results' => $gangguanGigiBungsu]);
    }

    public function resultProbAngularCeilitis($angularCeilitis)
    {
        TemporaryFinal::where('disease_id', 8)->update(['results' => $angularCeilitis]);
    }

    public function resultProbKariesMedia($kariesMedia)
    {
        TemporaryFinal::where('disease_id', 9)->update(['results' => $kariesMedia]);
    }

    public function resultProbKariesProfunda($kariesProfunda)
    {
        TemporaryFinal::where('disease_id', 10)->update(['results' => $kariesProfunda]);
    }

    public function resultProbKariesSuperfisial($kariesSuperfisial)
    {
        TemporaryFinal::where('disease_id', 11)->update(['results' => $kariesSuperfisial]);
    }

    public function resultProbKandidiasis($kandidiasis)
    {
        TemporaryFinal::where('disease_id', 12)->update(['results' => $kandidiasis]);
    }

    public function resultProbKalkulus($kalkulus)
    {
        TemporaryFinal::where('disease_id', 13)->update(['results' => $kalkulus]);
    }

    public function resultProbNekrosisPulpa($nekrosisPulpa)
    {
        TemporaryFinal::where('disease_id', 14)->update(['results' => $nekrosisPulpa]);
    }

    public function resultProbPeriodontitis($periodontitis)
    {
        TemporaryFinal::where('disease_id', 15)->update(['results' => $periodontitis]);
    }
    // END:: hasil perhitungan probabilitas








    public function proccess(Request $request)
    {
        Temporary::query()->truncate();
        TemporaryFinal::query()->truncate();

        foreach ($request->symptom as $symptoms) {
            Temporary::create(['symptom_id' => $symptoms]);
        }

        // $query = DB::select("SELECT `rules`.`disease_id`,`rules`.`symptom_id`, `rules`.`probability` from `rules` JOIN `temporaries` ON `rules`.`symptom_id` = `temporaries`.`symptom_id` ORDER BY `rules`.`symptom_id` ASC");

        $queryTemporaryFinal = DB::table('rules')
            ->join('temporaries', 'rules.symptom_id', '=', 'temporaries.symptom_id')
            ->select('rules.disease_id', 'rules.symptom_id', 'rules.probability')
            ->orderBy('rules.symptom_id', 'asc')
            ->get();

        foreach ($queryTemporaryFinal as $qtf) {
            DB::table('temporary_finals')->insert([
                'disease_id' => $qtf->disease_id,
                'symptom_id' => $qtf->symptom_id,
                'probability' => $qtf->probability,
                'results' => 0
            ]);
        }

        $probAbsesPeriodontal = $this->getProbAbsesPeriodontal();
        $probAbsesPeripikal = $this->getProbAbsesPeripikal();
        $probAlveolarOsteitis = $this->getProbAlveolarOsteitis();
        $probAbrasiGigi = $this->getProbAbrasiGigi();
        $probBruxism = $this->getProbBruxism();
        $probGingivitis = $this->getProbGingivitis();
        $probGangguanGigiBungsu = $this->getProbGangguanGigiBungsu();
        $probAngularCeilitis = $this->getProbAngularCeilitis();
        $probKariesMedia = $this->getProbKariesMedia();
        $probKariesProfunda = $this->getProbKariesProfunda();
        $probKariesSuperfisial = $this->getProbKariesSuperfisial();
        $probKandidiasis = $this->getProbKandidiasis();
        $probKalkulus = $this->getProbKalkulus();
        $probNekrosisPulpa = $this->getProbNekrosisPulpa();
        $probPeriodontitis = $this->getProbPeriodontitis();

        $data = [
            'absesPeriodontal' => $probAbsesPeriodontal,
            'absesPeripikal' => $probAbsesPeripikal,
            'alveolarOsteitis' => $probAlveolarOsteitis,
            'abrasiGigi' => $probAbrasiGigi,
            'bruxism' => $probBruxism,
            'gingivitis' => $probGingivitis,
            'gangguanGigiBungsu' => $probGangguanGigiBungsu,
            'angularCeilitis' => $probAngularCeilitis,
            'kariesMedia' => $probKariesMedia,
            'kariesProfunda' => $probKariesProfunda,
            'kariesSuperfisial' => $probKariesSuperfisial,
            'kandidiasis' => $probKandidiasis,
            'kalkulus' => $probKalkulus,
            'nekrosisPulpa' => $probNekrosisPulpa,
            'periodontitis' => $probPeriodontitis
        ];

        $totalProbability = array_sum($data);

        $absesPeriodontal = ($probAbsesPeriodontal / $totalProbability);
        $absesPeripikal = ($probAbsesPeripikal / $totalProbability);
        $alveolarOsteitis = ($probAlveolarOsteitis / $totalProbability);
        $abrasiGigi = ($probAbrasiGigi / $totalProbability);
        $bruxism = ($probBruxism / $totalProbability);
        $gingivitis = ($probGingivitis / $totalProbability);
        $gangguanGigiBungsu = ($probGangguanGigiBungsu / $totalProbability);
        $angularCeilitis = ($probAngularCeilitis / $totalProbability);
        $kariesMedia = ($probKariesMedia / $totalProbability);
        $kariesProfunda = ($probKariesProfunda / $totalProbability);
        $kariesSuperfisial = ($probKariesSuperfisial / $totalProbability);
        $kandidiasis = ($probKandidiasis / $totalProbability);
        $kalkulus = ($probKalkulus / $totalProbability);
        $nekrosisPulpa = ($probNekrosisPulpa / $totalProbability);
        $periodontitis = ($probPeriodontitis / $totalProbability);


        $this->resultProbAbsesPeriodontal($absesPeriodontal);
        $this->resultProbAbsesPeripikal($absesPeripikal);
        $this->resultProbAlveolarOsteitis($alveolarOsteitis);
        $this->resultProbAbrasiGigi($abrasiGigi);
        $this->resultProbBruxism($bruxism);
        $this->resultProbGingivitis($gingivitis);
        $this->resultProbGangguanGigiBungsu($gangguanGigiBungsu);
        $this->resultProbAngularCeilitis($angularCeilitis);
        $this->resultProbKariesMedia($kariesMedia);
        $this->resultProbKariesProfunda($kariesProfunda);
        $this->resultProbKariesSuperfisial($kariesSuperfisial);
        $this->resultProbKandidiasis($kandidiasis);
        $this->resultProbKalkulus($kalkulus);
        $this->resultProbNekrosisPulpa($nekrosisPulpa);
        $this->resultProbPeriodontitis($periodontitis);



        $diagnosisMax = DB::select("SELECT `temporary_finals`.`id`, MAX(results) as `results`, `diseases`.* FROM temporary_finals JOIN `diseases` ON `temporary_finals`.`disease_id` = `diseases`.`id` GROUP BY `diseases`.`id` ORDER BY `results` DESC LIMIT 1");

        foreach ($diagnosisMax as $diagnosaMax) {
            Consultation::create([
                'user_id' => Auth::user()->id,
                'disease' => $diagnosaMax->name,
                'score' => floor($diagnosaMax->results * 100),
                'information' => $diagnosaMax->information,
                'suggestion' => $diagnosaMax->suggestion
            ]);
        }

        return redirect('/users/diagnosis/results')->with('toast_success', Auth::user()->name . ' Berhasil Mendiagnosa');
    }

    public function results()
    {
        $diagnosis = DB::select("SELECT DISTINCT `temporary_finals`.`disease_id`, `temporary_finals`.`results`, `diseases`.* FROM `temporary_finals` JOIN `diseases` ON `temporary_finals`.`disease_id` = `diseases`.`id` ORDER BY `temporary_finals`.`results` DESC LIMIT 3");

        $diagnosisMax = DB::select("SELECT `temporary_finals`.`id`, MAX(results) as `results`, `diseases`.* FROM temporary_finals JOIN `diseases` ON `temporary_finals`.`disease_id` = `diseases`.`id` GROUP BY `diseases`.`id` ORDER BY `results` DESC LIMIT 1");

        return view('users.diagnosis.results', compact('diagnosis', 'diagnosisMax'));
    }
}


        // $gagalGinjal = ($probGagalGinjal / $totalProbability);
        // $kankerGinjal = ($probKankerGinjal / $totalProbability);
        // $infeksiGinjal = ($probInfeksiGinjal / $totalProbability);
        // $sindromNefrotik = ($probSindromNefrotik / $totalProbability);
        // $hidronefrosis = ($probHidronefrosis / $totalProbability);
        // $kankerKandungKemih = ($probKankerKandungKemih / $totalProbability);
        // $ginjalPolikistik = ($probGinjalPolikistik / $totalProbability);
        // $nefritisInterstisial = ($probNefritisInterstisial / $totalProbability);
        // $sistitisInterstisialis = ($probSistitisInterstisialis / $totalProbability);
        // $infeksiSaluranKemih = ($probInfeksiSaluranKemih / $totalProbability);
        // $batuGinjal = ($probBatuGinjal / $totalProbability);