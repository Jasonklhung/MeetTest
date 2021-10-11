<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBugPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bug_permissions', function (Blueprint $table) {
            $table->id();
            $table->string('permission_id');
            $table->enum('read',array('Y','N'))->default('Y')->comment('讀取');
            $table->enum('create',array('Y','N'))->default('Y')->comment('新增');
            $table->enum('edit',array('Y','N'))->default('Y')->comment('編輯');
            $table->enum('delete',array('Y','N'))->default('Y')->comment('刪除');
            $table->enum('slove',array('Y','N'))->default('Y')->comment('解決');
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
        Schema::dropIfExists('bug_permissions');
    }
}
