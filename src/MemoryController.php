<?php

namespace RBMH\Memory;


use App\Http\Controllers\ApiController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ParagraphController;

class MemoryController extends ApiController {

    protected $entry;

    protected $paragraphController;

    public function __construct () {
        $this->paragraphController = new ParagraphController();
    }

    /**
     * @return mixed
     */
    public function getEntryVariable () {
        return $this->entry;
    }

    /**
     * @param mixed $entry
     */
    public function setEntryVariable ($entry): void {
        $this->entry = $entry;
    }

    public function get ()
    {
        $entry = $this->getEntryVariable();
        unset($entry['data']->changed_by);
        unset($entry['data']->created_by);
        unset($entry['data']->created_time);
        unset($entry['data']->updated_time);
        unset($entry['data']->first_published);

        if(isset($entry['data']->background_image)) {
            $entry['data']->background_image = prepareImages($entry['data']->background_image);
            if(isset($entry['data']->background_image[0])){
                $entry['data']->background_image=$entry['data']->background_image[0];
            }
            $entry['data']->background_image = ImageController::getImagePolicy($entry['data']->background_image, "memory_back");
        }

        if(!empty($entry['data']->background_color)){
            $background_color=$this->getTaxonomieTerm($entry['data']->background_color);
            if(isset($background_color['data']['color_code'])){
                $entry['data']->background_color=$background_color['data']['color_code'];
            }else{
                $entry['data']->background_color="#000000";
            }
        }

        if(isset($entry['data']->content)) {
            $entry['data']->content = $this->paragraphController->paragraph($entry['data']->content,"memory");
        }

        return $entry;
    }
}
