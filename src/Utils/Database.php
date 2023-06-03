<?php

    namespace App\Utils;

    use Illuminate\Database\Capsule\Manager as DB;
    use App\Utils\Student;

    class Database
    {
        public function __construct()
        {
            $db = new DB;

            $db->addConnection([
                'driver' => 'mysql',
                'host' => 'localhost',
                'database' => 'school',
                'username' => 'root',
                'password' => '',
                'charset' => 'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix' => '',
            ]);

            // Make this Capsule instance available globally via static methods... (optional)
            $db->setAsGlobal();

            // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
            $db->bootEloquent();
        }

        public function index()
        {
            return Student::get();
        }

        public function show($id)
        {
            return Student::find($id);
        }

        public function store($data)
        {
            $student = Student::create($data);
        
            if ($student) {
                header("location: edit.php?id={$student->id}");
            }
        }

        public function update($data)
        {
            $result = Student::where('id', $data['id'])->update($data);
            
            if ($result) {
                header("location: index.php");
            }
        }

        public function destroy($id)
        {
            $result = Student::destroy($id);

            if($result) {
                header("location: index.php");
            }
        }
    }

?>