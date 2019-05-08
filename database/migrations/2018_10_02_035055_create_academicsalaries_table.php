<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicsalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academicsalaries', function (Blueprint $table) {
            $table->increments('salaryid');
            $table->string('department')->default('Zonal Education Office - Giriulla');
            $table->string('staffid');
            $table->string('fullname');
            $table->date('paymentdate');
            $table->double('basic');
            $table->double('costoflive');
            $table->double('fest');
            $table->double('interim');
            $table->integer('leavebalance');
            $table->double('deductionperleave')->default('150');
            $table->double('wop');
            $table->double('insurance');
            $table->double('stamp');
            $table->double('welfare');
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
        Schema::dropIfExists('academicsalaries');
    }
}
