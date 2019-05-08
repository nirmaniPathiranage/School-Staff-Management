<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNonacademicsalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nonacademicsalaries', function (Blueprint $table) {
            $table->increments('salaryid');
            $table->string('department')->default('Zonal Education Office - Giriulla');
            $table->string('staffid');
            $table->string('fullname');
            $table->date('paymentdate');
            $table->double('basic');
            $table->double('costoflive');
            $table->double('fest');
            $table->double('interim');
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
        Schema::dropIfExists('nonacademicsalaries');
    }
}
