<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    class TambahKolomDiMahasiswa extends Migration
    {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
        {
            Schema::table('mahasiswa', function(Blueprint $table){
            $table->string('email', 50)->after('nama');
            $table->string('alamat', 255)->after('jurusan');
            $table->string('tanggal_lahir', 50)->after('alamat');
            });
        }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
        {
            Schema::table('mahasiswa', function(Blueprint $table){
            $table->dropColumn('email');
            $table->dropColumn('alamat');
            $table->dropColumn('tanggal_lahir');
            });
        }
}