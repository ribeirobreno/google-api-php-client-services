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

class Google_Service_Partners_GetCompanyResponse extends Google_Model
{
  protected $companyType = 'Google_Service_Partners_Company';
  protected $companyDataType = '';
  protected $responseMetadataType = 'Google_Service_Partners_ResponseMetadata';
  protected $responseMetadataDataType = '';

  public function setCompany(Company $company)
  {
    $this->company = $company;
  }
  public function getCompany()
  {
    return $this->company;
  }
  public function setResponseMetadata(ResponseMetadata $responseMetadata)
  {
    $this->responseMetadata = $responseMetadata;
  }
  public function getResponseMetadata()
  {
    return $this->responseMetadata;
  }
}
