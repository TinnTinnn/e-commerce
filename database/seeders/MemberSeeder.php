<?php

namespace Database\Seeders;

use App\Http\Controllers\MemberController;
use App\Http\Controllers\MemberSessionController;
use App\Http\Controllers\WalletController;
use Illuminate\Database\Seeder;
use Random\RandomException;

class MemberSeeder extends Seeder
{
    /**
     * @throws RandomException
     */
    public function run(): void
    {
        $walletCtl = new WalletController();

        $walletJohn = $walletCtl->create(['amount' => 10]);
        $memberCtl = new MemberController();
        $memberJohn = $memberCtl->create([
            'name' => 'John Doe',
            'username' => 'admin',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'code' => 'JD123',
            'role_id' => 1,
            'wallet_id' => $walletJohn->id
        ]);

        $sessionCtl = new MemberSessionController();
        $sessionCtl->create([
            'member_id' => $memberJohn->id,
            'token' => bin2hex(random_bytes(32)),
        ]);

        $walletJim = $walletCtl->create(['amount' => 20]);
        $memberCtl = new MemberController();
        $memberJim = $memberCtl->create([
            'name' => 'Jim Duck',
            'username' => 'member',
            'password' => password_hash('member', PASSWORD_DEFAULT),
            'code' => 'MB321',
            'role_id' => 5,
            'wallet_id' => $walletJim->id
        ]);

        $sessionCtl->create([
            'member_id' => $memberJim->id,
            'token' => bin2hex(random_bytes(32)),
        ]);
    }
}
