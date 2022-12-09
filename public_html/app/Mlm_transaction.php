<?php

namespace App;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Mail\SendMail;
class Mlm_transaction extends Model
{
    //

     protected $fillable = [
        'user_id','tid','amount','table_name','description','status',
    ];


 public static function get_level_income_report(){

 // echo Carbon::today();die;

   $data=Bonus_income::where(['bonus_incomes.status'=>1])
   ->leftJoin('users', 'users.id', '=', 'bonus_incomes.user_id')  
   ->select('bonus_incomes.*','users.name as username')
   ->orderBy('bonus_incomes.id', 'desc')
   ->get();
        
        
    return $data;     
 }



 public static function get_bonus_income_report(){

  $data2=BonusReward::where(['bonus_rewards.status'=>1])
   ->leftJoin('users', 'users.id', '=', 'bonus_rewards.user_id')  
   ->select('bonus_rewards.*','users.name as username')
   ->orderBy('bonus_rewards.id', 'desc')
   ->get();

   $data=Mlm_transaction::where(['mlm_transactions.status'=>1])
   ->leftJoin('users', 'users.id', '=', 'mlm_transactions.user_id')  
   ->select('mlm_transactions.*','users.name as username')
   ->orderBy('mlm_transactions.id', 'desc')
   ->get();
    return $data2;   
        
       
 }



 public static function get_prize_report(){

 // echo Carbon::today();die;

   $data=PrizeReward::where(['prize_rewards.status'=>1])   
   ->leftJoin('users', 'users.id', '=', 'prize_rewards.user_id')  
   ->select('prize_rewards.*','users.name as username')
   ->orderBy('prize_rewards.id', 'desc')
   ->get();
    return $data;     
 }


 public static function get_other_prize_report(){

 // echo Carbon::today();die;

   $data=OtherReward::where(['other_rewards.status'=>1])   
   ->leftJoin('users', 'users.id', '=', 'other_rewards.user_id')  
   ->select('other_rewards.*','users.name as username')
   ->orderBy('other_rewards.id', 'desc')
   ->get();
    return $data;     
 }




 public static function transaction_history(){

 // echo Carbon::today();die;

   $data=Mlm_transaction::where(['mlm_transactions.status'=>1])
  
   ->leftJoin('users', 'users.id', '=', 'mlm_transactions.user_id')  
   ->select('mlm_transactions.*','users.name as username')
   ->orderBy('mlm_transactions.id', 'desc')
   ->get();
    return $data;     
 }








 public static function get_usertransaction_list(){
    $data['']='';
    if(Auth::check()){
       $data=Mlm_transaction::where(['mlm_transactions.status'=>1,'mlm_transactions.user_id'=>Auth::user()->id])
         ->leftJoin('users', 'users.id', '=', 'mlm_transactions.user_id')       
         ->select('mlm_transactions.*','users.name as username')
         ->orderBy('mlm_transactions.id', 'desc')->get(); 
    }

   
    return $data;     
 }


 public static function get_usercommission_list(){
    $data['']='';
    //,'bonus_rewards','prize_rewards','other_rewards'
    if(Auth::check()){
       $data=Mlm_transaction::where(['mlm_transactions.status'=>1,'mlm_transactions.user_id'=>Auth::user()->id])
       ->whereIn('mlm_transactions.table_name',['bonus_incomes'])
         ->leftJoin('users', 'users.id', '=', 'mlm_transactions.user_id')
         ->select('mlm_transactions.*','users.name as username')
         ->orderBy('mlm_transactions.id', 'desc')->get();
    }


    return $data;
 }

    
}
