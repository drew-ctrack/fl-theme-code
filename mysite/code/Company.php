<?php

use SilverStripe\Forms\TextareaField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;
use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;

class Company extends DataObject {

    private static $has_one = [
        'HomePage' => HomePage::class,
    ];

    private static $extensions = [
        Versioned::class,
    ];

    private static $versioned_gridfield_extensions = true;

    private static $db = [
        'CompanyName' => 'Text',
        'CompanyLogo' => Image::class
    ];

    private static $summary_fields = [
        'CompanyName' => 'Company'
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldtoTab('Root.Main', TextareaField::create('CompanyName','Company Name'));

        $fields->addFieldtoTab('Root.Main', $images = UploadField::create('CompanyLogo','Upload Logo'));
        $images
        ->setFolderName('company-logos')
        ->getValidator()->setAllowedExtensions(['png', 'jpeg', 'jpg', 'JPG']);

        return $fields;
    }

}
