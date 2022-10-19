<?php

namespace App\Http\Helpers\UI\Crud\Traits;

trait CreateUpdateTrait
{
    public function getFiles()
    {
        $path = $this->getPath($this->model);
        if (empty($this->files)) {
            return;
        }
        if (is_array($this->files)) {
            foreach ($this->files['images'] as $file) {
                $fileName = $this->uploadImage($path,$file);
            }
        }
        if (!is_array($this->files)) {
            $this->request['image'] = $this->uploadImage($path, $this->files);
        }
    }

    private function getPath($model)
    {
        $array = explode('\\', get_class($model));
        $str = array_pop($array);
        return $str;
    }
}
