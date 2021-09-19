<?php

use Illuminate\Database\Seeder;
use App\categores;

class CategoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mainCategore = new categores;
        $mainCategore->Title = "Computers & Laptops";
        $mainCategore->description = "Test";
        $mainCategore->save();

        $subCategore1 = new categores;
        $subCategore1->Title = "Cameras & Photos";
        $subCategore1->description = "Test";
        $subCategore1->save();
        
       $subCategore2 = new categores;
        $subCategore2->Title = "Games";
        $subCategore2->description = "Test";
        $subCategore2->save();

        $subCategore3 = new categores;
        $subCategore3->Title = "Smartphones & Tablets";
        $subCategore3->description = "Test";
        $subCategore3->save();


        $subCategore4 = new categores;
        $subCategore4->Title = "TV & Audio";
        $subCategore4->description = "Test";
        $subCategore4->save();

        $subCategore5 = new categores;
        $subCategore5->Title = "Gadgets";
        $subCategore5->description = "Test";
        $subCategore5->save();

        $subCategore6 = new categores;
        $subCategore6->Title = "Video Games & Consoles";
        $subCategore6->description = "Test";
        $subCategore6->save();

        $subCategore7 = new categores;
        $subCategore7->Title = "Accessories";
        $subCategore7->description = "Test";
        $subCategore7->save();


    }
}
