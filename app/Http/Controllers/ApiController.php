<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class ApiController extends Controller
{
    function listBook(){
        $book=Book::orderBy('id', 'DESC')->get();
        return response()->json([
            'status' => true,
            'books' => array($book)
        ]);
    }
    function storeBook(Request $request){
        $request->validate([
            'name' => 'required',
            'genre' => 'required|integer',
            'details' => 'required',
        ]);
        if ($request->hasFile('images')){
            $fileName = time() . rand(1, 99) . '.' . $request->images->getClientOriginalExtension();
            $request->file('images')->move(public_path('uploads/books'), $fileName);
        }
        $book = Book::create([
            'name'=>$request->name,
            'genre'=>$request->genre,
            'details'=>$request->details,
            'isbn'=>$request->isbn,
            'images'=>$fileName,
        ]);

        return response()->json([
            'status' => true,
            'message' => "Book Created successfully!",
            'book' => $book
        ], 201);
    }
    public function updateBook(Request $request,$id)
    {
        $book=Book::find($id);
        $fileName=$book->images;
        if ($request->hasFile('images')){
            $fileName = time() . rand(1, 99) . '.' . $request->images->getClientOriginalExtension();
            $request->file('images')->move(public_path('uploads/books'), $fileName);

        }
        $book->update([
            'name'=>$request->name,
            'genre'=>$request->genre,
            'details'=>$request->details,
            'isbn'=>$request->isbn,
            'images'=>$fileName,
        ]);

        return response()->json([
            'status' => true,
            'message' => "book Updated successfully!",
            'book' => $book
        ], 200);
    }
    public function destroy($id)
    {
        DB::table('books')->where('id', $id)->delete();
        return response()->json([
            'status' => true,
            'message' => "Book deleted successfully!",
        ], 200);
    }
    public function registerUser(Request $request)
    {
        try {
             $request->validate([
                'name' => 'required',
                'password' => 'required',
                'email' => 'required|email',
            ]);


            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role' => 1,
                'phone' => "09922270728",
                'status' => 1,
                'local' =>"fa",
               "dark_mode" =>0,
                'password' => Hash::make($request->password)
            ]);

            return response()->json([
                'status' => true,
                'message' => 'User Created Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    public function loginUser(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'password' => 'required',
                'email' => 'required|email',
            ]);

            if(!Auth::attempt($request->only(['email', 'password']))){
                return response()->json([
                    'status' => false,
                    'message' => 'Email & Password does not match with our record.',
                ], 401);
            }

            $user = User::where('email', $request->email)->first();

            return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

}
