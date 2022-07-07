<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

//use Illuminate\Support\Facades\Request;


class BookController extends Controller{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function hey (){
        return json_encode("Hi how are you doing ?");
    }
    
    public function index(){
     
        $books = Book::all();

        //return json_encode("Hello word");
        
        return response()->json($books);

    }

    public function create(Request $request){
        $book = new Book;
 
        $book->name= $request->name;
        $book->price = $request->price;
        $book->description= $request->description;
        
        $book->save();
 
        return response()->json($book);
    }

    public function show($id){
        $book = Book::find($id);
        return response()->json($book);
    }

    public function update(Request $request, $id){ 
        $book= Book::find($id);
        
        $book->name = $request->input('name');
        $book->price = $request->input('price');
        $book->description = $request->input('description');
        $book->save();
        return response()->json($book);
    }

    public function destroy($id){
        $book = Product::find($id);
        $book->delete();
        return response()->json('book removed successfully');
    }
}
