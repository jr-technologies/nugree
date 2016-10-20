<?php
/**
 * Created by PhpStorm.
 * User: zeenomlabs
 * Date: 3/15/2016
 * Time: 9:56 PM
 */

namespace App\Http\Requests\Requests\Project;


use App\DB\Providers\SQL\Models\Project;
use App\Http\Requests\Interfaces\RequestInterface;
use App\Http\Requests\Request;
use App\Http\Validators\Validators\ProjectValidators\AddProjectValidator;
use App\Transformers\Request\Project\AddProjectTransformer;


class AddProjectRequest extends Request implements RequestInterface{

    public $validator;
    public function __construct(){
        parent::__construct(new AddProjectTransformer($this->getOriginalRequest()));
        $this->validator = new AddProjectValidator($this);
    }

    public function authorize(){
        return true;
    }

    public function validate(){
        return $this->validator->validate();
    }
    public function getProjectModel()
    {
        $project = new Project();
        $project->title = $this->get('title');
        $project->description = $this->get('description');
        $project->cityId = $this->get('cityId');
        $project->societyId = $this->get('societyId');
        return $project;
    }
    public function getProjectImageModel()
    {
        $final = [];
        $projectImages = $this->get('images');
        foreach($projectImages as $image)
        {
            dd($this->resize_imagejpg($image));
            $extension = $resizeImage->getClientOriginalExtension();
            $imageName = md5($image->getClientOriginalName()) . '.' . $extension;
            $image->move(public_path() . '/assets/imgs/projects', $imageName)->resize(100,100);
            $final[] = 'assets/imgs/projects/' . $imageName;
        }
        return $final;
    }


    public function resize_imagejpg($filename) {
        $percent = 0.5;

// Content type
        header('Content-Type: image/jpeg');

// Get new dimensions
        list($width, $height) = getimagesize($filename);
        $new_width = $width * $percent;
        $new_height = $height * $percent;

// Resample
        $image_p = imagecreatetruecolor($new_width, $new_height);
        $image = imagecreatefromjpeg($filename);
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

// Output
        return $image;
    }

} 