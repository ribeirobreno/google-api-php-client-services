<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_Clouddebugger_SourceContext extends Google_Model
{
  protected $cloudRepoType = 'Google_Service_Clouddebugger_CloudRepoSourceContext';
  protected $cloudRepoDataType = '';
  protected $cloudWorkspaceType = 'Google_Service_Clouddebugger_CloudWorkspaceSourceContext';
  protected $cloudWorkspaceDataType = '';
  protected $gerritType = 'Google_Service_Clouddebugger_GerritSourceContext';
  protected $gerritDataType = '';
  protected $gitType = 'Google_Service_Clouddebugger_GitSourceContext';
  protected $gitDataType = '';

  public function setCloudRepo(CloudRepoSourceContext $cloudRepo)
  {
    $this->cloudRepo = $cloudRepo;
  }
  public function getCloudRepo()
  {
    return $this->cloudRepo;
  }
  public function setCloudWorkspace(CloudWorkspaceSourceContext $cloudWorkspace)
  {
    $this->cloudWorkspace = $cloudWorkspace;
  }
  public function getCloudWorkspace()
  {
    return $this->cloudWorkspace;
  }
  public function setGerrit(GerritSourceContext $gerrit)
  {
    $this->gerrit = $gerrit;
  }
  public function getGerrit()
  {
    return $this->gerrit;
  }
  public function setGit(GitSourceContext $git)
  {
    $this->git = $git;
  }
  public function getGit()
  {
    return $this->git;
  }
}
