<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFirstPartyToOauthClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('oauth_clients', function (Blueprint $table) {
            $table->boolean('first_party_client')->after('revoked')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('oauth_clients', function (Blueprint $table) {
            $table->dropColumn('first_party_client');
        });
    }
}
