<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataSiswaPpdb>
 */
class DataSiswaPpdbFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        date_default_timezone_set('Asia/Jakarta');
        return [
            'name' => $this->faker->name(),
            'tgl' => date('d F Y H:i T'),
            'kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'nisn' => $this->faker->unique()->numerify('##########'),
            'nik' => $this->faker->unique()->numerify('################'),
            'asalsekolah' => $this->faker->sentence(mt_rand(2,4)),
            'lahir' => $this->faker->randomElement(['Bogor ', 'Jakarta ', 'Sukabumi ']) . $this->faker->dateTimeBetween('2008-01-01,', '2010-12-31')->format('d-m-Y'),
            'email' => $this->faker->unique()->freeEmail(),
            'no_hp' => $this->faker->numerify('08##########'),
            'namaortu' => $this->faker->name(),
            'alamat' => $this->faker->randomElement(['Bakom', 'Rancamaya', 'Cigombong', 'Cicurug', 'Ciawi', 'Tajur']),
            'hportu' => $this->faker->numerify('08##########')
        ];
    }
}
