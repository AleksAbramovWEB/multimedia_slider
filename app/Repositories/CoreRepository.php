<?php


    namespace App\Repositories;


    use Illuminate\Database\Eloquent\Model;

    abstract class CoreRepository
    {
        /**
         * @var Model
         */
        protected $model;


        public function __construct()
        {

            $class = $this->getModelClass();
            $this->model = new $class();


        }

        abstract protected function getModelClass();

        /**
         * @return \Illuminate\Contracts\Foundation\Application|Model|mixed
         */
        protected function startCondition()
        {
            return clone $this->model;
        }

    }
