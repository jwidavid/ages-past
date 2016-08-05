<?php

namespace App\Http\Controllers\mensk;

use App\Clan;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Book;

class LibraryController extends Controller
{
    /**
     * Show the mensk text view.
     *
     * @return \Illuminate\Http\Response
     */
    public function main() 
    {     
        return view('mensk.library.library');
    }
    
    public function book($book_id)
    {
        $book = Book::find($book_id);
        return view('mensk.library.book')->with('book', $book);
    }
    
    public function books($category)
    {
        $books = Book::where('category', '=', $category);
        return view('mensk.library.books')->with('books', $books)->with('category', ucfirst($category));
    }
    
    public function info() 
    {     
        return view('mensk.library.info');
    }
    
    public function records() 
    {     
        return view('mensk.library.records');
    }
    
    public function clans()
    {
        $clans = Clan::all();
        
        if ( !count($clans) )
            flash('It seems that there are no clans yet created.', 'warning');
        
        return view('mensk.library.clans')->with('clans', $clans);
    }
    
    public function citizens() 
    {
	    $characters = DB::table('characters')
	    	->where('characters.id', '!=', Auth::user()->character->id)
	    	->select('characters.id','characters.name','users.rank','characters.level')
	    	->join('users', 'characters.user_id', '=', 'users.id')
	    	->get();
	    
    	return view('mensk.library.citizens')->with('characters', $characters);
    }
}
