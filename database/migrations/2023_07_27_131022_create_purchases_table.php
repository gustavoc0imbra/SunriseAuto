<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->integer('status');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->integer('payment_method');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('purchases');
        /*$table->dropForeign('lists_user_id_foreign');
        $table->dropIndex('lists_user_id_index');
        $table->dropColumn('user_id');*/
    }
}
