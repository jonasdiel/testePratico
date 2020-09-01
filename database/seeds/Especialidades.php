<?php

use Illuminate\Database\Seeder;

class Especialidades extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $especialidades = array(
            'ALERGOLOGIA',
            'ANGIOLOGIA',
            'BUCO MAXILO',
            'CARDIOLOGIA CLÍNICA',
            'CARDIOLOGIA INFANTIL',
            'CIRURGIA CABEÇA E PESCOÇO',
            'CIRURGIA CARDÍACA',
            'CIRURGIA DE CABEÇA/PESCOÇO',
            'CIRURGIA DE TÓRAX',
            'CIRURGIA GERAL',
            'CIRURGIA PEDIÁTRICA',
            'CIRURGIA PLÁSTICA',
            'CIRURGIA TORÁCICA',
            'CIRURGIA VASCULAR',
            'CLÍNICA MÉDICA'
        );

        foreach($especialidades as $especialidade) {
            DB::table('especialidades')->insert([
                'nome' => $especialidade
            ]);
        }
    }
}
