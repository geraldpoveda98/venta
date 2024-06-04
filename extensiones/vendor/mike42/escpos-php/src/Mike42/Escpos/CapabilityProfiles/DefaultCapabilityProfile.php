<?php
/**
 
 */
namespace Mike42\Escpos\CapabilityProfiles;

use Mike42\Escpos\CapabilityProfile;

class DefaultCapabilityProfile
{
    public static function getInstance()
    {
        return CapabilityProfile::load('default');
    }
}
