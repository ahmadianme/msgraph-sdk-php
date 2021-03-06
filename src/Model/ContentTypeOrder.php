<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContentTypeOrder File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* ContentTypeOrder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ContentTypeOrder extends Entity
{
    /**
    * Gets the default
    *
    * @return bool The default
    */
    public function getDefault()
    {
        if (array_key_exists("default", $this->_propDict)) {
            return $this->_propDict["default"];
        } else {
            return null;
        }
    }

    /**
    * Sets the default
    *
    * @param bool $val The value of the default
    *
    * @return ContentTypeOrder
    */
    public function setDefault($val)
    {
        $this->_propDict["default"] = $val;
        return $this;
    }
    /**
    * Gets the position
    *
    * @return int The position
    */
    public function getPosition()
    {
        if (array_key_exists("position", $this->_propDict)) {
            return $this->_propDict["position"];
        } else {
            return null;
        }
    }

    /**
    * Sets the position
    *
    * @param int $val The value of the position
    *
    * @return ContentTypeOrder
    */
    public function setPosition($val)
    {
        $this->_propDict["position"] = $val;
        return $this;
    }
}
