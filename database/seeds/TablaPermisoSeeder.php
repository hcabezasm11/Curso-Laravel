<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\Permiso;

class TablaPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Permiso::class)->times(50)->create();
        $permi0 = Permiso::create([
            'nombre' => 'Prestar Libros',
            'slug' => 'prestar-libros'
        ]);
        $permi0->roles()->sync(1);
        $permi1 = Permiso::create([
            'nombre' => 'Crear libros',
            'slug' => 'crear-libros'
        ]);
        $permi1->roles()->sync(1);
        $permi2 = Permiso::create([
            'nombre' => 'Editar libros',
            'slug' => 'editar-libros'
        ]);
        $permi2->roles()->sync(1);
        $permi3 = Permiso::create([
            'nombre' => 'Listar libros',
            'slug' => 'listar-libros'
        ]);
        $permi3->roles()->sync(1);
    }
}
