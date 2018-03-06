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

        $fields->addFieldsToTab("Root.CallToAction", array(
          $ctaHeader = TextField::create("PageCallToActionHeader", "Page Specific: Call to Action Header"),
          $ctaText = TextField::create("PageCallToActionText", "Page Specific: Call to Action Text"),
          $ctaLink = TextField::create("PageCallToActionLink", "Page Specific: Call to Action Link"),
          CheckboxField::create("ctaCheckbox", "Enable Call to Action")
        ));

        $ctaHeader->displayIf("ctaCheckbox")->isChecked();
        $ctaText->displayIf("ctaCheckbox")->isChecked();
        $ctaLink->displayIf("ctaCheckbox")->isChecked();

        return $fields;
    }
}
