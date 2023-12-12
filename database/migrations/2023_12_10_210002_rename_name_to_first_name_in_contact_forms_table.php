<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class RenameNameToFirstNameInContactFormsTable extends Migration
{
    public function up()
    {
        DB::statement('ALTER TABLE contact_forms CHANGE name first_name VARCHAR(255)');
    }

    public function down()
    {
        DB::statement('ALTER TABLE contact_forms CHANGE first_name name VARCHAR(255)');
    }
}
