<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://anapioficeandfire.com/api/books",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        $EBOOKS = json_decode($response, true);
        
        foreach ($EBOOKS as $ebook){
            Book::create(
                [
                    'name' => $ebook['name'],
                    'isbn' => $ebook['isbn'],
                    'authors' => json_encode($ebook['authors']),
                    'numberOfPages' => $ebook['numberOfPages'],
                    'publisher' => json_encode($ebook['publisher']),
                    'country' => $ebook['country'],
                    'mediaType' => $ebook['mediaType'],
                    'released' => json_encode($ebook['released']),
                ]
            );
        }
    }
}
