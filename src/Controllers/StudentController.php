<?php

    namespace App\Controllers;

    use App\Models\Student;
    use Symfony\Component\HttpFoundation\Request;


    class StudentController
    {
        private $query, $post;

        public function __construct()
        {
            $request = Request::createFromGlobals();
            $this->query = $request->query;
            $this->post = $request->request;
        }
        public function index()
        {
            $students = Student::get();

            view('index.php', ['students' => $students]);
        }

        public function show()
        {
            $student = Student::find($this->query->get('id'));

            view('show.php', ['student' => $student]);
        }

        public function create()
        {
            view('create.php');
        }

        public function store()
        {
            $student = Student::create($this->post->all());
        
            if ($student) {
                header("location: /ba-032/index.php/edit?id={$student->id}");
            }
        }

        public function edit()
        {
            $student = Student::find($this->query->get('id'));

            view('edit.php', ['student' => $student]);
        }

        public function update()
        {
            $result = Student::where('id', $this->post->get('id'))->update($this->post->all());
            
            if ($result) {
                header("location: index");
            }
        }

        public function delete()
        {
            $result = Student::destroy($this->query->get('id'));

            if($result) {
                header("location: index");
            }
        }
    }


?>