<?php


    namespace App\Repositories;


    use App\Models\ImagineForSlider;

    class ImagineForSliderRepository extends CoreRepository
    {

        protected function getModelClass()
        {
            return ImagineForSlider::class;
        }

        public function getImagesForHome(){
            $images =      $this->startCondition()
                                ->select(["id", "path"])
                                ->limit(10)
                                ->orderBy("id", "DESC")
                                ->get();
            return $images;
        }

        public function getImagesForApi($int){
            $images =      $this->startCondition()
                                ->select(["id", "path"])
                                ->offset($int)
                                ->limit(1)
                                ->orderBy("id", "DESC")
                                ->toBase()
                                ->first();
            return $images;
        }
    }
