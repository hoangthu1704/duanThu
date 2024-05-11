<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\CloudDeploy;

class RepairRolloutRule extends \Google\Collection
{
  protected $collection_key = 'sourcePhases';
  protected $conditionType = AutomationRuleCondition::class;
  protected $conditionDataType = '';
  /**
   * @var string
   */
  public $id;
  /**
   * @var string[]
   */
  public $jobs;
  protected $repairModesType = RepairMode::class;
  protected $repairModesDataType = 'array';
  /**
   * @var string[]
   */
  public $sourcePhases;

  /**
   * @param AutomationRuleCondition
   */
  public function setCondition(AutomationRuleCondition $condition)
  {
    $this->condition = $condition;
  }
  /**
   * @return AutomationRuleCondition
   */
  public function getCondition()
  {
    return $this->condition;
  }
  /**
   * @param string
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param string[]
   */
  public function setJobs($jobs)
  {
    $this->jobs = $jobs;
  }
  /**
   * @return string[]
   */
  public function getJobs()
  {
    return $this->jobs;
  }
  /**
   * @param RepairMode[]
   */
  public function setRepairModes($repairModes)
  {
    $this->repairModes = $repairModes;
  }
  /**
   * @return RepairMode[]
   */
  public function getRepairModes()
  {
    return $this->repairModes;
  }
  /**
   * @param string[]
   */
  public function setSourcePhases($sourcePhases)
  {
    $this->sourcePhases = $sourcePhases;
  }
  /**
   * @return string[]
   */
  public function getSourcePhases()
  {
    return $this->sourcePhases;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RepairRolloutRule::class, 'Google_Service_CloudDeploy_RepairRolloutRule');
