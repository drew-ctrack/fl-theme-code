<?php

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\ORM\DataExtension;

class CustomSiteConfig extends DataExtension {
    private static $db = [
        'PhoneNumber' => 'Varchar',
        'Address' => 'Varchar',
        'EmailAddress' => 'Varchar',
        'FacebookLink' => 'Varchar',
        'TwitterLink' => 'Varchar',
        'InstagramLink' => 'Varchar',
        'YouTubeLink' => 'Varchar',
        'LinkedInLink' => 'Varchar',
        'CallToActionHeader' => 'Varchar',
        'CallToActionText' => 'Varchar',
        'CallToActionLink' => 'Varchar'
    ];

    public function updateCMSFields(FieldList $fields) {
        $fields->addFieldsToTab("Root.Footer", array(
          TextField::create("PhoneNumber", "Phone Number"),
          TextField::create("Address", "Address"),
          TextField::create("EmailAddress", "Email Address")
        ));

        $fields->addFieldsToTab("Root.Social", array(
          TextField::create("FacebookLink", "Facebook Link"),
          TextField::create("TwitterLink", "Twitter Link"),
          TextField::create("InstagramLink", "Instagram Link"),
          TextField::create("YouTubeLink", "YouTube Link"),
          TextField::create("LinkedInLink", "LinkedIn Link")
        ));

        $fields->addFieldsToTab("Root.CallToAction", array(
          TextField::create("CallToActionHeader", "Call to Action Header"),
          TextField::create("CallToActionText", "Call to Action Text"),
          TextField::create("CallToActionLink", "Call to Action Link")
        ));
    }
}
