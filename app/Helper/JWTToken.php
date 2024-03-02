<?php

namespace App\Helper;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTToken{
    public static function generateToken($email,$id){
        $key=env('JWT_KEY');
        $payload=[
            'iss'=> 'web-token',
            'iat'=>time(),
            'exp'=>time()+60*60*30,
            'email'=> $email,
            'id'=> $id
        ];
        return JWT::encode($payload, $key,'HS256');

}
public static function checkToken($token){
    try{
        if($token==null){
            return 'unautorized';
        }else{
            $key=env('JWT_KEY');
            $decode=JWT::decode($token, new key($key,'HS256'));
            return $decode;
        }


    }catch(Exception $e){
        return 'unautorized';

    }
}



}
