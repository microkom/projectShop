<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    private $arrayProductos = array(
        array(
            'name' => 'hp01',
            'brand' => 'HP',
            'model' => '255 G6',
            'description' => 'Este equipo incorpora un procesador APU AMD E2 de modelo E2-9000e, con velocidad de rendimiento de hasta 2 GHz y una RAM de 4 GB de memoria DDR3L. Juntos te permitirán trabajar, escuchar música y navegar por internet sin bloqueos. Así que ya sabes, llévatelo al trabajo o donde quieras, ya que con esta potencia te responderá ante todo lo que necesites.',
            'specifications' => 'Resolución: 1366 x 768 píxeles
            Calidad de imagen: HD
            Tipo de pantalla: 15.6" LED HD
            Memoria RAM: 4 GB
            Procesador: AMD E2-9000 (2 x 1.8 GHz)
            Velocidad Procesador: 1,5 GHz, hasta 2 GHz
            Número de Nucleos: 2',
            'price' => 278,
            'categoryid' => 1,
            'subcategoryid' => 1,
            'providerid' => 1,
            'imgRoute' => 'Productos/Informatica/Portatil/hp01.png',
            'stock' => 20,
            'taxesid' => 1,
        ),
        array(
            'name' => 'hp02',
            'brand' => 'HP',
            'model' => 'Notebook 15-da0018ns',
            'description' => 'Este equipo incorpora un procesador Intel Core i3-7020U, con velocidad de rendimiento de hasta 2.3 GHz y una RAM de 4 GB de memoria DDR4. Juntos te permitirán trabajar, escuchar música y navegar por internet sin bloqueos, así que ya sabes, llévatelo al trabajo o donde quieras, ya que con esta potencia te responderá ante todo lo que necesites. ¡Y con mucho color! Alucina con las imágenes en alta definición de la pantalla del HP de 15.6 pulgadas y resolución HD de 1366 x 768 píxeles con retroiluminación WLED, con la que podrás visualizar perfectamente la pantalla desde cualquier ángulo.',
            'specifications' => 'Resolución: 1366 x 768 píxeles
            Calidad de imagen: HD
            Tipo de pantalla: 15.6" WLED HD
            Tipo de RAM: DDR4
            Memoria RAM: 4 GB
            Procesador: Intel Core i3-7020U (2 x 2.3 GHz)
            Tamaño de caché: 3 MB',
            'price' => 429,
            'categoryid' => 1,
            'subcategoryid' => 1,
            'providerid' => 1,
            'imgRoute' => 'Productos/Informatica/Portatil/hp02.png',
            'stock' => 20,
            'taxesid' => 1,
        ),
    );
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();

        foreach ($this->arrayProductos as $producto) {
            $product = new Product();
            $product->model = $producto['model'];
            $product->name = $producto['name'];
            $product->brand = $producto['brand'];
            $product->description = $producto['description'];
            $product->specifications = $producto['specifications'];
            $product->price = $producto['price'];
            $product->categoryid = $producto['categoryid'];
            $product->subcategoryid = $producto['subcategoryid'];
            $product->providerid = $producto['providerid'];
            $product->imgRoute = $producto['imgRoute'];
            $product->stock = $producto['stock'];
            $product->taxesid = $producto['taxesid'];
            $product->save();
        }

    }
}
