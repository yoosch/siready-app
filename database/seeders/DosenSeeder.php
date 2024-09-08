<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dosen = [
            ['nip' => '1965110719920310', 'nama' => 'Drs. Eko Adi Sarwoko, M.Komp.'],
            ['nip' => '1970070519970210', 'nama' => 'Priyo Sidik Sasongko, S.Si., M.Kom.'],
            ['nip' => '1971081119970210', 'nama' => 'Dr. Aris Sugiharto, S.Si., M.Kom.'],
            ['nip' => '1973082919980220', 'nama' => 'Beta Noranita, S.Si., M.Kom.'],
            ['nip' => '1974040119990310', 'nama' => 'Dr. Aris Puji Widodo, S.Si., M.T.'],
            ['nip' => '1976011020091220', 'nama' => 'Dinar Mutiara Kusumo Nugraheni, S.T., M.InfoTech.'],
            ['nip' => '1978050220050120', 'nama' => 'Sukmawati Nur Endah, S.Si., M.Kom.'],
            ['nip' => '1978051620031210', 'nama' => 'Helmie Arif Wibawa, S.Si., M.Cs.'],
            ['nip' => '1979021220081210', 'nama' => 'Indra Waspada, S.T., M.TI'],
            ['nip' => '1979052420091210', 'nama' => 'Dr. Sutikno, S.T., M.Cs.'],
            ['nip' => '1979072020031210', 'nama' => 'Nurdin Bahtiar, S.Si., M.T.'],
            ['nip' => '1980091420060410', 'nama' => 'Edy Suharto, S.T., M.Kom'],
            ['nip' => '1980102120050110', 'nama' => 'Ragil Saputra, S.Si., M.Cs.'],
            ['nip' => '1981042020050120', 'nama' => 'Dr. Retno Kusumaningrum, S.Si., M.Kom.'],
            ['nip' => '1982030920060410', 'nama' => 'Dr.Eng. Adi Wibowo, S.Si., M.Kom.'],
            ['nip' => '1983020320060410', 'nama' => 'Satriyo Adhy, S.Si., M.T.'],
            ['nip' => '1989030320150420', 'nama' => 'Khadijah, S.Kom., M.Cs.'],
            ['nip' => '1985112520180320', 'nama' => 'Rismiyati, B.Eng, M.Cs'],
            ['nip' => '1984041120190310', 'nama' => 'Fajar Agung Nugroho, S.Kom., M.Cs.'],
            ['nip' => '1988032220201210', 'nama' => 'Prajanto Wahyu Adi, M.Kom.'],
            ['nip' => '1981062020150410', 'nama' => 'Muhammad Malik Hakim, S.T., M.T.I.'],
            ['nip' => '1980122720150410', 'nama' => 'Guruh Aryotejo, S.Kom., M.Sc'],
            ['nip' => '1991120920220410', 'nama' => 'Adhe Setya Pramayoga, S.Kom., M.T.'],
            ['nip' => '1996030320220410', 'nama' => 'Sandy Kurniawan, S.Kom., M.Kom.'],
            ['nip' => '1958090119860320', 'nama' => 'Prof. Dr. Dra. Sunarsih, M.Si.'],
            ['nip' => '1985063020121210', 'nama' => 'Solikhin, S.Si., M.Sc.'],
            ['nip' => '1969021419940320', 'nama' => 'Prof. Dr. Widowati, S.Si., M.Si.'],
            ['nip' => '1965112319940310', 'nama' => 'Prof. Dr. Rahmat Gernowo, M.Si.'],
            ['nip' => '1972031719980210', 'nama' => 'Prof. Dr. Kusworo Adi, S.Si., M.T.'],
            ['nip' => '1963110519880310', 'nama' => 'Drs. Bayu Surarso, M.Sc., Ph.D.'],
            ['nip' => '1973122020001210', 'nama' => 'Farikhin, S.Si., M.Si., Ph.D.'],
            ['nip' => '1961092819860320', 'nama' => 'Dr. Dra. Tatik Widiharih, M.Si.'],
            ['nip' => '1963070619910210', 'nama' => 'Dr. Drs. Tarno, M.Si.'],
            ['nip' => '1975082419990310', 'nama' => 'Dr. Budi Warsito, S.Si., M.Si.'],
            ['nip' => '1964051819920310', 'nama' => 'Dr.Drs. Catur Edi Widodo, M.T.'],
            ['nip' => '1965022519920110', 'nama' => 'Dr.Drs. Rukun Santoso, M.Si.'],
            ['nip' => '1972112119980210', 'nama' => 'Jatmiko Endro Suseno, S.Si., M.Si., Ph.D.'],
            ['nip' => '1988061420221020', 'nama' => 'Yunila Dwi Putri Ariyanti, S.Kom., M.Kom.'],
            ['nip' => '1992042520230720', 'nama' => 'Dr. Yeva Fadhilah Ashari, S.Si., M.Si.'],
            ['nip' => '1996022120230720', 'nama' => 'Etna Vianita, S.Mat., M.Mat.'],
        ];

        foreach ($dosen as $ds) {
            Dosen::create($ds);
        }
    }
}
