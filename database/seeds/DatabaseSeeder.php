<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    
	    Model::unguard();
	    
           // This group is for testing
		   $this->call(UsersTableSeeder::class);
		   $this->call(CharactersTableSeeder::class);
           $this->call(CharacterResourcesTableSeeder::class);
           $this->call(BankRecordsTableSeeder::class);
           $this->call(ArmorTemplatesTableSeeder::class);
           $this->call(ItemTemplatesTableSeeder::class);
           $this->call(WeaponTemplatesTableSeeder::class);
           $this->call(ShopsTableSeeder::class);
           $this->call(ShopProductsTableSeeder::class);
           $this->call(ItemsTableSeeder::class);
           $this->call(QuestsTableSeeder::class);
           $this->call(BooksTableSeeder::class);           
           
           
//         $this->call(ClanPrivilegesTableSeeder::class);
//         $this->call(DonationPacksTableSeeder::class);
//         $this->call(ElementsSkillsTableSeeder::class);
//         $this->call(ElementsTableSeeder::class);
//         $this->call(GameRanksTableSeeder::class);
//         $this->call(GameSettingsTableSeeder::class);
//         $this->call(SkillsTableSeeder::class);
//         $this->call(SpecializationsTableSeeder::class);
        
        Model::reguard();
    }
}