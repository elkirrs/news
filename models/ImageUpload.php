<?php


namespace app\models;


use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class ImageUpload extends Model
{
    public $image;

    public function rules()
    {
        return [
            [['image'], 'required'],
            [['image'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    public function uploadFile(UploadedFile $file, $currentImage)
    {
        $this->image = $file;

        if ($this->validate()){
            $this->deleteCurrentImage($currentImage);
            return $this->saveImage();
        }
    }


    /**
     * Уникальная генерация названия картинки
     */
    private function generateFileName()
    {
        return md5(uniqid($this->image->baseName)) . '.' . $this->image->extension;
    }


    /**
     * Удаление картинки которая уже существует
     */
    public function deleteCurrentImage($currentImage)
    {
        if ($this->fileExists($currentImage)) {
            unlink('uploads/' . $currentImage);
        }
    }

    /**
     * Проверка существования файла
     */
    public function fileExists($currentImage)
    {
        if (!empty($currentImage) && $currentImage != null){
            return file_exists('uploads/' . $currentImage);
        }
    }


    /**
     * Метод сохранения картинки
     */
    public function saveImage()
    {
        $filename = $this->generateFileName();
        $this->image->saveAs('uploads/' . $filename);
        return $filename;
    }
}