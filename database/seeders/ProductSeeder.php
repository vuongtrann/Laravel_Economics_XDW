<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Product::factory(25)->create();
        DB::table('products')->insert([
            ['id'=>1,'name'=>'Ghost S','slug'=>'ghost-s','description'=>'Mainboard: MSI MAG B560M Mortar, CPU: Intel Core I5 11400F, Ram: Kingston Fury Beast RGB 1x8GB 3200, VGA: MSI RTX 2060 OC','image_name'=>'1.jpg','price'=>'2439','sale_price'=>'2339'],
            ['id'=>2,'name'=>'Phantom s','slug'=>'phantom-s','description'=>'Mainboard: MSI MAG B560M Mortar, CPU: Intel Core I7 11400F, Ram: Kingston Fury Beast RGB 1x8GB 3200, VGA: MSI RTX 2060 OC','image_name'=>'2.jpg','price'=>'2739','sale_price'=>'2539'],
            ['id'=>3,'name'=>'Garen S','slug'=>'garen-s','description'=>'Mainboard: MSI MAG Z690 Mortar, CPU: Intel Core I7 12700F, Ram: Kingston Fury Beast RGB 2x8GB 3200, VGA: MSI RTX 3070 OC','image_name'=>'3.jpg','price'=>'5439','sale_price'=>'4339'],
            ['id'=>4,'name'=>'Neon S','slug'=>'neon-s','description'=>'Mainboard: MSI MAG B550 Mortar, CPU: Intel Core I5 15400F, Ram: Kingston Fury Beast RGB 1x8GB 3200, VGA: MSI RTX 2070 OC','image_name'=>'4.jpg','price'=>'3439','sale_price'=>'2439'],
            ['id'=>5,'name'=>'Volibear S','slug'=>'volibear-s','description'=>'Mainboard: MSI MAG B650 Mortar, CPU: Intel Core I7 17400F, Ram: Kingston Fury Beast RGB 2x8GB 3200, VGA: MSI RTX 2070 OC','image_name'=>'5.jpg','price'=>'5439','sale_price'=>'4339'],
            ['id'=>6,'name'=>'MSI GF63','slug'=>'msi-gs63','description'=>'LCD: 15,6" 144hz, CPU: Intel Core I5 11400H, Ram: DDR4 1x8GB 3200, VGA: GTX 1650 OC','image_name'=>'6.jpg','price'=>'4569','sale_price'=>'3956'],
            ['id'=>7,'name'=>'TUF Gaming F15','slug'=>'tuf-f15','description'=>'LCD: 15,6" 144hz, CPU: Intel Core I5 11400H, Ram: DDR4 1x8GB 3200, VGA: RTX 3050 OC','image_name'=>'7.jpg','price'=>'7569','sale_price'=>'6956'],
            ['id'=>8,'name'=>'MSI Katana GF66','slug'=>'msi-gf66','description'=>'LCD: 15,6" 144hz, CPU: Intel Core I5 11400H, Ram: DDR4 1x8GB 3200, VGA: RTX 3050 OC','image_name'=>'8.jpg','price'=>'7569','sale_price'=>'6956'],
            ['id'=>9,'name'=>'Acer Nitro 5','slug'=>'nitro5','description'=>'LCD: 15,6" 144hz, CPU: Ryzen R5-5600H, Ram: DDR4 1x8GB 3200, VGA: GTX 1650 OC','image_name'=>'9.jpg','price'=>'5569','sale_price'=>'4956'],
            ['id'=>10,'name'=>'TUF Gaming F15','slug'=>'tuf-f15','description'=>'LCD: 15,6" 144hz, CPU: Intel Core I5 11400H, Ram: DDR4 1x8GB 3200, VGA: RTX 3050 OC','image_name'=>'10.jpg','price'=>'7569','sale_price'=>'6956'],
            ['id'=>11,'name'=>'ROG Strix G15','slug'=>'strix-g15','description'=>'LCD: 15,6" 144hz, CPU: Ryzen R7 4800H, Ram: DDR4 1x8GB 3200, VGA: GTX 1650 OC','image_name'=>'11.jpg','price'=>'5769','sale_price'=>'5756'],
            ['id'=>12,'name'=>'HP Victus 16','slug'=>'victus','description'=>'LCD: 16,1" 144hz, CPU: Ryzen R5 5600H, Ram: DDR4 1x8GB 3200, VGA: RTX 3050 OC','image_name'=>'12.jpg','price'=>'7569','sale_price'=>'6956'],
            ['id'=>13,'name'=>'Acer Nitro 5 Eagle','slug'=>'nitro-5','description'=>'LCD: 15,6" 144hz, CPU: Intel Core I5 11400H, Ram: DDR4 1x8GB 3200, VGA: RTX 3050 OC','image_name'=>'13.jpg','price'=>'8569','sale_price'=>'7956'],
            ['id'=>14,'name'=>'ROG Strix G15','slug'=>'strixg15','description'=>'LCD: 15,6" 144hz, CPU: Ryzen R7 4800H, Ram: DDR4 1x8GB 3200, VGA: GTX 1650 OC','image_name'=>'14.jpg','price'=>'5569','sale_price'=>'4956'],            
        ]);
    }
}
