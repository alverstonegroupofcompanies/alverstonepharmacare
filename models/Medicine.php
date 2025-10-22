<?php
namespace app\models;

use Yii;
use yii\web\UploadedFile;

class Medicine extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile|null
     */
    public $imageFile;

    public static function tableName()
    {
        return 'medicine';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description'], 'string'],
            [['price'], 'number'],
            [['created_at'], 'safe'],
            [['category', 'dosage_form'], 'string', 'max' => 100],
            [['strength'], 'string', 'max' => 50],
            [['name', 'image'], 'string', 'max' => 255],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'category' => 'Category',
            'description' => 'Description',
            'dosage_form' => 'Dosage Form',
            'strength' => 'Strength',
            'price' => 'Price',
            'created_at' => 'Created At',
            'image' => 'Image',
            'imageFile' => 'Upload Image',
        ];
    }

    public function upload()
{
    if ($this->imageFile && $this->validate(['imageFile'])) {
        $filename = uniqid('med_') . '.' . $this->imageFile->extension;
        $uploadPath = Yii::getAlias('@webroot/uploads/medicine/');
        $fullPath = $uploadPath . $filename;

        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        if ($this->imageFile->saveAs($fullPath)) {
            $this->image = $filename; // Set image attribute for DB
            return true;
        }
    }

    return false;
}

}
