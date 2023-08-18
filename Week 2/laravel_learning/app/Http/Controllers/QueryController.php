<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class QueryController extends Controller
{
    public function one_record(){
        //Fetching one record for UserID using find() method
            //$userID = 1;
            //$user = User::find($userID);

        //Fetching one record using firstWhere() method
            // $userEmail = 'sa@gmail.com';
            // $user = User::firstWhere('email', $userEmail);

        //Fetching one record using where() and first() method
            //$user = User::where('email', $userEmail)->first();

        //Fetching one record using first()
            //$user = User::first();

        //Fetching one record using take() and get() method
            // $user = User::select('*')->take(1)->get();
            $user=User::first();
            //dd($user->toArray());
            //$user = $user->toArray();
            return $user;
            
            //return redirect()->route('OneRecord');
            // return view('queries', compact('user'));
            //dd($user); 
           // return view('queries', ['user' => $user]);

    }

    public function today_reg_records(){
        // Carbon library, which is a popular date and time manipulation library in Laravel.
        // using ORM
            $users = User::select('*')->whereDate('created_at', Carbon::today())->get();
            $user = $this->one_record();
        // using query builder
        //$users = DB::select('*')whereDate('created_at', DB::raw('CURDATE()'))->get();

            return view('queries', ['users'=>$users, 'user'=>$user]);
            //return redirect()->route('TodayRecord');
    }

    public function year_2022(){
        $year = User::whereYear('created_at', '=', 2023)->get();

        return $year;
    }

    public function female_gender(){
        $gender = User::where('gender', 'Female')->get();
        return $gender;
    }

    public function last_5_user(){

        $last_5 = User::latest()->take(5)->get();
        return $last_5;
    
    }


    public function diff_users(){
        $diff = User::skip(5)->take(3)->get();

        return $diff;
    }

    public function male_1(){
        $activeMaleUsers = User::where('gender', 'male')->where('is_active', 1)->get();

        return $activeMaleUsers;
    }

    public function ph_cnic_not_null(){
        $ph_cnic = User::whereNotNull('phone')->orWhereNotNull('cnic')->get();

        return $ph_cnic;
    }

    public function age_2030(){
        $age2030  = User::whereBetween('age', [20, 30])->get();

        return $age2030;
    }

    public function greater_18(){
        $greater_18 = User::select('name', 'email')->where('age', '>', 18)->whereNotNull('cnic')->get();

        $greater_18;
    }

    public function avg_age(){
        $averageAge = User::avg('age');

        return $averageAge;

    }

    public function exist_or_Does_exist(){
        $recordExists = User::where('cnic', '17221-4777789-9')->where('phone', '0332-6589743')->exists();

        if ($recordExists) {
            $result = "Record found";
        } else {
            $result = "Sorry no record found";
        }

        return $result;
    }

    public function starts_a(){
        $starts_with_a = User::where('name', 'like', 'a%')->get();
        return $starts_with_a;
    }

    public function not_in(){
        $notin = User::whereNotIn('age', [20, 21, 22])->get();
        return $notin;
    }

    public function groupbyy(){
        $groups = User::select('age', DB::raw('COUNT(*) as user_count'))->groupBy('age')->having('user_count', '>', 2)->get();
        return $groups;
    }

    public function age_15(){
        $add5 = User::where('age', 15)->update(['age' => DB::raw('age + 5')]);
        return $add5;
    }

    public function req(){
        $users = User::where('age', '>', 20)->where('age', '<', 25)->where('gender', 'male')->where('is_active', 1)->whereMonth('registration_date', 3)->where('country', 'Pakistan')->whereNotNull('cnic')->orderByDesc('age')->get();

             return $users;
    }
}
