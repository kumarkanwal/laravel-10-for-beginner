<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/', function () {
    // return view('dashboard');

    // $users = DB::select("select * from users ");
    // $users = DB::insert("insert into users (username, email,password) values(?,?,?)" , ["vishal","vishal@gmail.com","vishalishere"]);
    // $users = DB::update("update users set email = ? where id = ?", ["vishal9034@gmail.com", 2]);
    // $users = DB::delete("delete from users where id = ?",[2]);

    // $users = DB::table('users')->get();
    // $users = DB::table('users')->where("id", 1)->get();
    // $users = DB::table('users')->insert([
    //     'username' => 'vishal',
    //     'email' => 'vishal903@gmail.com',
    //     'password' => 'velo903'
    //     ]);
    // $users = DB::table('users')->where('id', 1)->update(['email' => 'kanwal1234@gmail.com']);
    // $users = DB::table('users')->where('id', 1)->delete();
        


    
// $user = User::all();
    // $user->delete();
    //  $user->update(
    //     ['email' => 'kanwal123465@gmail.com', ]
    // );
    //    $user = User::create([
    //     'name' => 'vvishal',
    //     'email' => 'vvishal903@gmail.com',
    //     'password' => 'vvelo903'
    //    ]); 
    $user = User::create([
        'name' => 'Sarthak',
        'email'=> 'sarthak4@gmail.com',
        'password'=> bcrypt('kanwal1123')
    ]);
    dd($user);

   
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

