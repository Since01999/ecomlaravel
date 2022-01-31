<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;

class Product_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //here we are seeding multiple products
     
        DB::table('products')->insert(
           [ 
               [
                "name"=>"lgmobile",
                "description"=>"this is an lg mobile",
                "price"=>"10000",
                "category"=>"mobile",
                "gallery"=>"https://images.unsplash.com/photo-1483478550801-ceba5fe50e8e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80",
                
            ],  
            [
                "name"=>"Oppo",
                "description"=>"this is an oppo mobile",
                "price"=>"20000",
                "category"=>"mobile",
                "gallery"=>"https://images.unsplash.com/photo-1423784346385-c1d4dac9893a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80",
                
            ],
              [
                "name"=>"Vivo",
                "description"=>"this is an vivo mobile",
                "price"=>"25000",
                "category"=>"mobile",
                "gallery"=>"https://images.unsplash.com/photo-1611926653458-09294b3142bf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80",
                
            ], 
             [
                "name"=>"iphone",
                "description"=>"this is an lg mobile",
                "price"=>"50000",
                "category"=>"mobile",
                "gallery"=>"https://images.unsplash.com/photo-1546054454-aa26e2b734c7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1480&q=80",
                
            ], 
             [
                "name"=>"Oneplus",
                "description"=>"this is an lg mobile",
                "price"=>"40000",
                "category"=>"mobile",
                "gallery"=>"https://images.unsplash.com/photo-1546054454-aa26e2b734c7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1480&q=80",
                
             ],
           ]
            );
    }
}
