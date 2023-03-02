<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //Estructura de asignar roles
        $role1=Role::create(['name'=>'admin']); //Creando Rol 1
        $role2=Role::create(['name'=>'user']); //Creando Rol 2
        $user=User::find(1); //Se busca el usuario creado,comprobando que es id=1
        $user->assignRole($role1);//Cuando encontramos al usuario se le asigna el Role1

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
