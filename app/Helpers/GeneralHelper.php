<?php

namespace App\Helpers;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class GeneralHelper
{
    public static function generateRandomCharacter($count=null)
    {
        if (empty($count))
        {
            $count = 16;
        }

        $character_set_array = array( );
        $character_set_array[ ] = array( 'count' => $count, 'characters' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789' );
        $temp_array = array( );
        foreach ( $character_set_array as $character_set )
        {
            for ( $i = 0; $i < $character_set[ 'count' ]; $i++ )
            {
                $temp_array[ ] = $character_set[ 'characters' ][ rand( 0, strlen( $character_set[ 'characters' ] ) - 1 ) ];
            }
        }
        shuffle( $temp_array );
        return implode( '', $temp_array );
    }

    public static function generateSlug($str, $table=null, $field='slug')
    {
        $str=strtolower($str);
        $slug = Str::slug($str);

        if (empty($table))
        {
            return $slug;
        }
        else
        {
            $count = DB::table($table)->where($field, 'like', $slug.'%')->count();
            if ($count == 0)
            {
                $count = "";
            }
            else
            {
                $count = '-'.$count;
            }

            return $slug.$count;
        }
    }

    public static function changeDateFormat($date=null)
    {
        if (!empty($date))
        {
            $dateFormat = Setting::where('key', '=', 'date-format')->first()->value.' '.Setting::where('key', '=', 'time-format')->first()->value;
            return date($dateFormat, strtotime($date));
        }
        else
        {
            return null;
        }
    }

    public static function indonesianDateFormat($timestamp='', $dateFormat='j F Y', $suffix='')
    {
        if (trim ($timestamp) == '')
        {
            $timestamp = time ();
        }
        elseif (!ctype_digit ($timestamp))
        {
            $timestamp = strtotime ($timestamp);
        }
        # remove S (st,nd,rd,th) there are no such things in indonesia
        $dateFormat = preg_replace ("/S/", "", $dateFormat);
        $pattern = array
        (
            '/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
            '/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
            '/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
            '/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
            '/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
            '/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
            '/April/','/June/','/July/','/August/','/September/','/October/',
            '/November/','/December/',
        );
        $replace = array
        (
            'Sen','Sel','Rab','Kam','Jum','Sab','Min',
            'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
            'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
            'Januari','Februari','Maret','April','Juni','Juli','Agustus','September',
            'Oktober','November','Desember',
        );
        $date = date ($dateFormat, $timestamp);
        $date = preg_replace ($pattern, $replace, $date);
        $date = "{$date} {$suffix}";
        return $date;
    }

    public static function checkOperaMiniBrowser()
    {
        $user_agent = isset( $_SERVER['HTTP_USER_AGENT'] ) ? $_SERVER['HTTP_USER_AGENT'] : '';
        $operaMini = false;
        if ( stristr( $user_agent, 'Opera Mini' ) )
        {
            //its opera mini, try the X-OperaMini-Phone-UA
            $user_agent = isset( $_SERVER['HTTP_X_OPERAMINI_PHONE_UA'] ) ? $_SERVER['HTTP_X_OPERAMINI_PHONE_UA'] : $user_agent;
            $operaMini = true;
        }

        return $operaMini;
    }

    public static function getMoneyString($value=null)
    {
        if(!empty($value))
        {
            return strrev(implode('.',str_split(strrev(strval($value)),3)));
        }
        else
        {
            return null;
        }
    }
}