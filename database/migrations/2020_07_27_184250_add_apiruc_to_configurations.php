<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddApirucToConfigurations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('configurations', function (Blueprint $table) {
            $table->text('url_apiruc')->nullable();
            $table->text('token_apiruc')->nullable();
        });

        DB::table('configurations')->update([
            'id' => '1',
            //'url_apiruc' => 'https://apiperu.dev',
            //'token_apiruc' => '4b297f3cf07f893870d7d3db9b22e10ea47a8340e2bef32a3b8ca94153ae5a1c'
            'url_apiruc' => 'https://zekasystem.xyz/',
            'token_apiruc' => 'JyfGvwblVXpXSVUSVPvrVOqXqKmybwjglnIM2bc4A2W2isGcmQRITbxf9raX247zBvOZhP9SCkLZpXPB6PE5nrUvPmVcMQBhHxvC'
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('configurations', function (Blueprint $table) {
            $table->dropColumn(['url_apiruc', 'token_apiruc']);
        });
    }
}
