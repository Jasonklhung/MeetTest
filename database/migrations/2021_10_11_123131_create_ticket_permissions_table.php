<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_permissions', function (Blueprint $table) {
            $table->id();
            $table->string('permission_id');
            $table->enum('read',array('Y','N'))->default('Y')->comment('讀取');
            $table->enum('create',array('Y','N'))->default('Y')->comment('新增');
            $table->enum('delete',array('Y','N'))->default('Y')->comment('刪除');
            $table->enum('slove',array('Y','N'))->default('Y')->comment('解決');
            $table->enum('type_featureRequest_create',array('Y','N'))->default('Y')->comment('ticket功能請求類型新增');
            $table->enum('type_featureRequest_slove',array('Y','N'))->default('Y')->comment('ticket功能請求類型解決');
            $table->enum('type_testCase_create',array('Y','N'))->default('Y')->comment('ticket測試案例類型新增');
            $table->enum('type_testCase_slove',array('Y','N'))->default('Y')->comment('ticket測試用例類型解決');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_permissions');
    }
}
