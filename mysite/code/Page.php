<?php

use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\TextField;

class Page extends SiteTree
{
    private static $db = [
      'PageCallToActionHeader' => 'Varchar',
      'PageCallToActionText' => 'Varchar',
      'PageCallToActionLink' => 'Varchar'
    ];

    private static $has_one = [];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $pageClass = static::class;

        if ($pageClass != "HomePage") {
          $fields->addFieldsToTab("Root.CallToAction", TextField::create("PageCallToActionHeader", "Page Specific: Call to Action Header"));
          $fields->addFieldsToTab("Root.CallToAction", TextField::create("PageCallToActionText", "Page Specific: Call to Action Text"));
          $fields->addFieldsToTab("Root.CallToAction", TextField::create("PageCallToActionLink", "Page Specific: Call to Action Link"));
        };

        return $fields;
    }
}
