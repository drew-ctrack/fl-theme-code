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

        $fields->addFieldsToTab("Root.CallToAction", $ctaHeader = TextField::create("PageCallToActionHeader", "Page Specific: Call to Action Header"));
        $fields->addFieldsToTab("Root.CallToAction", $ctaText = TextField::create("PageCallToActionText", "Page Specific: Call to Action Text"));
        $fields->addFieldsToTab("Root.CallToAction", $ctaLink = TextField::create("PageCallToActionLink", "Page Specific: Call to Action Link"));

        $ctaHeader->hideIf("ClassName")->isEqualTo("HomePage");

        return $fields;
    }
}
