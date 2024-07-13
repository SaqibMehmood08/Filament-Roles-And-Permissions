composer require filament/filament:"^2.0"
php artisan migrate
 composer require spatie/laravel-permission
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
composer require doctrine/dbal
use Spatie\Permission\Traits\HasRoles; USER MODEL---
    use HasRoles;
    implements FilamentUser
     public function canAccessFilament():bool
    {
        return $this->hasRole(['admin']);
    }

--seeder
 $user= User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '12345678',
        ]);
        $role=Role::create(['name'=>'admin']);
        $user->assignRole($role);
        
     $user= User::factory()->create([
            'name' => 'bussines_user',
            'email' => 'bussiness@gmail.com',
            'password' => '12345678',
        ]);
        $role=Role::create(['name'=>'bussines_user']);
        $user->assignRole($role);     
 php artisan migrate:fresh --seed
 
  php artisan make:filament-resource Role
  --import use Spatie\Permission\Models\Role;
  php artisan make:filament-resource Permission --generate
  	
         
         

         
         
         
         
         
   public static function getEloquentQuery(): builder
    {
        return parent::getEloquentQuery()->where('name','!=','admin');
    }			      



   This is just a basic example how you can create and manage your own and send data to page       
