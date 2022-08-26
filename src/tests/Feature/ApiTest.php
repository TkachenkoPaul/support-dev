<?php

namespace Tests\Feature;

use App\Models\Admins;
use Illuminate\Support\Facades\Config;

use PHPOpenSourceSaver\JWTAuth\JWT;
use PHPOpenSourceSaver\JWTAuth\JWTAuth;
use Tests\TestCase;

class ApiTest extends TestCase
{
    /*auth test*/
    public function testLoginUser(): void
    {
        $baseUrl = Config::get('app.url') . '/api/login';
        $login = Config::get('api.apiLogin');
        $password = Config::get('api.apiPassword');
        $response = $this->json('POST', $baseUrl . '/', [
            'id' => $login,
            'password' => $password
        ]);
        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'status',
                'user'=> ['id'],
                'authorization' => [
                    'token','type'
                ]
            ]);
    }
    public function testNotAuth(): void
{
    $baseUrl = Config::get('app.url').'/api';
    $response = $this->json('GET', $baseUrl . '/billing/users', []);
    $response->assertStatus(401);
}

    /*users endpoint*/
    public function testUsersEndpoint(): void
    {
        $user = Admins::query()->find( Config::get('api.apiLogin'));
        $token = auth()->login($user);
        $baseUrl = Config::get('app.url').'/api';
        $response = $this->withHeader('Authorization','Bearer '.$token)
            ->json('GET', $baseUrl . '/billing/users', []);

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'data'=> [
                    '*' =>[
                        'uid',
                        'login',
                        'activate',
                        'registration',
                        'credit' => [
                            'credit','credit_date'
                        ],
                        'deposit' => [
                            'id','deposit'
                        ],
                        'group',
                        'contacts' => [
                            'fio','phone','email','city','street','build','flat','comments','contract_id','contract_date',
                            'passport_num','passport_grant','passport_date',
                        ]
                    ]
                ],
                'meta' => [
                    'current_page','from','to','last_page','per_page','total',
                ],
            ]);
    }
    public function testUserEndpoint()
    {
        $admin = Admins::query()->find( Config::get('api.apiLogin'));
        $token = auth()->login($admin);
        $baseUrl = Config::get('app.url').'/api';
        $response = $this->withHeader('Authorization','Bearer '.$token)
            ->json('GET', $baseUrl . '/billing/users/1', []);

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'user'=> [
                    'login', 'uid','activate','registration','activate','registration',
                    'credit' => [
                        'credit','credit_date',
                    ],
                    'deposit' =>[
                        'id', 'deposit',
                    ],
                    'group' => [
                        'id', 'name'
                    ],
                    'contacts' => [
                        'fio','phone','email','city','street','build','flat','comments','contract_id','contract_date',
                        'passport_num','passport_grant','passport_date',
                    ]
                ],
            ]);
    }

    /*payment endpoints */
    public function testUserPaymentsEndpoint()
    {
        $admin = Admins::query()->find( Config::get('api.apiLogin'));
        $token = auth()->login($admin);
        $baseUrl = Config::get('app.url').'/api';
        $response = $this->withHeader('Authorization','Bearer '.$token)
            ->json('GET', $baseUrl . '/billing/payments/1', []);
        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'data'=> [
                    '*' => [
                        'id','date','sum','dsc','ip','last_deposit','uid','aid','method','bill_id','amount'
                    ]
                ],
            ]);
    }
    public function testAllPaymentsEndpoint()
    {
        $admin = Admins::query()->find( Config::get('api.apiLogin'));
        $token = auth()->login($admin);
        $baseUrl = Config::get('app.url').'/api';
        $response = $this->withHeader('Authorization','Bearer '.$token)
            ->json('GET', $baseUrl . '/billing/payments', []);
        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'data'=> [
                    '*' => [
                        'id','date','sum','dsc','ip','last_deposit','uid','aid','method','bill_id','amount'
                    ]
                ],
            ]);
    }

    /*fee endpoints*/
    public function testUserFeesEndpoint()
    {
        $admin = Admins::query()->find( Config::get('api.apiLogin'));
        $token = auth()->login($admin);
        $baseUrl = Config::get('app.url').'/api';
        $response = $this->withHeader('Authorization','Bearer '.$token)
            ->json('GET', $baseUrl . '/billing/fees/1', []);
        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'data'=> [
                    '*' => [
                        'id','date','sum','dsc','ip','last_deposit','uid','aid','method','bill_id','inner_describe'
                    ]
                ],
            ]);
    }
    public function testAllFeesEndpoint()
    {
        $admin = Admins::query()->find( Config::get('api.apiLogin'));
        $token = auth()->login($admin);
        $baseUrl = Config::get('app.url').'/api';
        $response = $this->withHeader('Authorization','Bearer '.$token)
            ->json('GET', $baseUrl . '/billing/fees', []);
        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'data'=> [
                    '*' => [
                        'id','date','sum','dsc','ip','last_deposit','uid','aid','method','bill_id','inner_describe'
                    ]
                ],
            ]);
    }

    /*meesages endpoints*/
    public function testUserMessagesEndpoint()
    {
        $admin = Admins::query()->find( Config::get('api.apiLogin'));
        $token = auth()->login($admin);
        $baseUrl = Config::get('app.url').'/api';
        $response = $this->withHeader('Authorization','Bearer '.$token)
            ->json('GET', $baseUrl . '/billing/messages/1', []);
        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'data'=> [
                    '*' => [
                        'id','uid','chapter','message','reply','ip','date','state','subject','priority',
                        'closed_date','done_date','plan_date','plan_time','admin_read','responsible','inner_msg','phone'
                    ]
                ],
            ]);
    }
    public function testAllMessagesEndpoint()
    {
        $admin = Admins::query()->find( Config::get('api.apiLogin'));
        $token = auth()->login($admin);
        $baseUrl = Config::get('app.url').'/api';
        $response = $this->withHeader('Authorization','Bearer '.$token)
            ->json('GET', $baseUrl . '/billing/messages', []);
        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'data'=> [
                    '*' => [
                        'id','uid','chapter','message','reply','ip','date','state','subject','priority',
                        'closed_date','done_date','plan_date','plan_time','admin_read','responsible','inner_msg','phone',
                    ]
                ],
            ]);
    }
    public function testMessageEndpoint()
    {
        $admin = Admins::query()->find( Config::get('api.apiLogin'));
        $token = auth()->login($admin);
        $baseUrl = Config::get('app.url').'/api';
        $response = $this->withHeader('Authorization','Bearer '.$token)
            ->json('GET', $baseUrl . '/billing/message/62567', []);
        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'data'=> [
                    'id','uid','chapter','message','reply','ip','date','state','subject','priority',
                    'closed_date','done_date','plan_date','plan_time','admin_read','responsible','inner_msg','phone','replies'
                ],
            ]);
    }
}
