<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Student extends Model
    {
        protected $table = "students";

        public $timestamps = false;

        protected $fillable = ['name', 'email', 'gender', 'dob', 'age'];
    }

?>