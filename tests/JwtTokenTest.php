<?php
/**
 * @desc JwtTokenTest.php 描述信息
 * @author Tinywan(ShaoBo Wan)
 * @date 2022/2/24 10:04
 */


namespace Tinywan\Tests;


use PHPUnit\Framework\TestCase;
use Tinywan\Jwt\JwtToken;

class JwtTokenTest extends TestCase
{
    public function RS256(){
        $user = [
            'id'  => 2022,
            'name'  => 'Tinywan',
            'email' => 'Tinywan@163.com'
        ];
        $token = JwtToken::generateToken($user);
        self::assertIsArray($token);
    }
}