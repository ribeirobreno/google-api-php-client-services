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

/**
 * The "orders" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contentService = new Google_Service_ShoppingContent(...);
 *   $orders = $contentService->orders;
 *  </code>
 */
class Google_Service_ShoppingContent_Orders_Resource extends Google_Service_Resource
{
  /**
   * Marks an order as acknowledged. (orders.acknowledge)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $orderId The ID of the order.
   * @param Google_OrdersAcknowledgeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_OrdersAcknowledgeResponse
   */
  public function acknowledge($merchantId, $orderId, OrdersAcknowledgeRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('acknowledge', array($params), 'Google_Service_OrdersAcknowledgeResponse');
  }
  /**
   * Sandbox only. Moves a test order from state "inProgress" to state
   * "pendingShipment". (orders.advancetestorder)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $orderId The ID of the test order to modify.
   * @param array $optParams Optional parameters.
   * @return Google_Service_OrdersAdvanceTestOrderResponse
   */
  public function advancetestorder($merchantId, $orderId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId);
    $params = array_merge($params, $optParams);
    return $this->call('advancetestorder', array($params), 'Google_Service_OrdersAdvanceTestOrderResponse');
  }
  /**
   * Cancels all line items in an order. (orders.cancel)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $orderId The ID of the order to cancel.
   * @param Google_OrdersCancelRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_OrdersCancelResponse
   */
  public function cancel($merchantId, $orderId, OrdersCancelRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('cancel', array($params), 'Google_Service_OrdersCancelResponse');
  }
  /**
   * Cancels a line item. (orders.cancellineitem)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $orderId The ID of the order.
   * @param Google_OrdersCancelLineItemRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_OrdersCancelLineItemResponse
   */
  public function cancellineitem($merchantId, $orderId, OrdersCancelLineItemRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('cancellineitem', array($params), 'Google_Service_OrdersCancelLineItemResponse');
  }
  /**
   * Sandbox only. Creates a test order. (orders.createtestorder)
   *
   * @param string $merchantId The ID of the managing account.
   * @param Google_OrdersCreateTestOrderRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_OrdersCreateTestOrderResponse
   */
  public function createtestorder($merchantId, OrdersCreateTestOrderRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('createtestorder', array($params), 'Google_Service_OrdersCreateTestOrderResponse');
  }
  /**
   * Retrieves or modifies multiple orders in a single request.
   * (orders.custombatch)
   *
   * @param Google_OrdersCustomBatchRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_OrdersCustomBatchResponse
   */
  public function custombatch(OrdersCustomBatchRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('custombatch', array($params), 'Google_Service_OrdersCustomBatchResponse');
  }
  /**
   * Retrieves an order from your Merchant Center account. (orders.get)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $orderId The ID of the order.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Order
   */
  public function get($merchantId, $orderId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google_Service_Order');
  }
  /**
   * Retrieves an order using merchant order id. (orders.getbymerchantorderid)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $merchantOrderId The merchant order id to be looked for.
   * @param array $optParams Optional parameters.
   * @return Google_Service_OrdersGetByMerchantOrderIdResponse
   */
  public function getbymerchantorderid($merchantId, $merchantOrderId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'merchantOrderId' => $merchantOrderId);
    $params = array_merge($params, $optParams);
    return $this->call('getbymerchantorderid', array($params), 'Google_Service_OrdersGetByMerchantOrderIdResponse');
  }
  /**
   * Sandbox only. Retrieves an order template that can be used to quickly create
   * a new order in sandbox. (orders.gettestordertemplate)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $templateName The name of the template to retrieve.
   * @param array $optParams Optional parameters.
   * @return Google_Service_OrdersGetTestOrderTemplateResponse
   */
  public function gettestordertemplate($merchantId, $templateName, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'templateName' => $templateName);
    $params = array_merge($params, $optParams);
    return $this->call('gettestordertemplate', array($params), 'Google_Service_OrdersGetTestOrderTemplateResponse');
  }
  /**
   * Lists the orders in your Merchant Center account. (orders.listOrders)
   *
   * @param string $merchantId The ID of the managing account.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool acknowledged Obtains orders that match the acknowledgement
   * status. When set to true, obtains orders that have been acknowledged. When
   * false, obtains orders that have not been acknowledged. We recommend using
   * this filter set to false, in conjunction with the acknowledge call, such that
   * only un-acknowledged orders are returned.
   * @opt_param string maxResults The maximum number of orders to return in the
   * response, used for paging. The default value is 25 orders per page, and the
   * maximum allowed value is 250 orders per page. Known issue: All List calls
   * will return all Orders without limit regardless of the value of this field.
   * @opt_param string orderBy The ordering of the returned list. The only
   * supported value are placedDate desc and placedDate asc for now, which returns
   * orders sorted by placement date. "placedDate desc" stands for listing orders
   * by placement date, from oldest to most recent. "placedDate asc" stands for
   * listing orders by placement date, from most recent to oldest. In future
   * releases we'll support other sorting criteria.
   * @opt_param string pageToken The token returned by the previous request.
   * @opt_param string placedDateEnd Obtains orders placed before this date
   * (exclusively), in ISO 8601 format.
   * @opt_param string placedDateStart Obtains orders placed after this date
   * (inclusively), in ISO 8601 format.
   * @opt_param string statuses Obtains orders that match any of the specified
   * statuses. Multiple values can be specified with comma separation.
   * Additionally, please note that active is a shortcut for pendingShipment and
   * partiallyShipped, and completed is a shortcut for shipped ,
   * partiallyDelivered, delivered, partiallyReturned, returned, and canceled.
   * @return Google_Service_OrdersListResponse
   */
  public function listOrders($merchantId, $optParams = array())
  {
    $params = array('merchantId' => $merchantId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google_Service_OrdersListResponse');
  }
  /**
   * Refund a portion of the order, up to the full amount paid. (orders.refund)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $orderId The ID of the order to refund.
   * @param Google_OrdersRefundRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_OrdersRefundResponse
   */
  public function refund($merchantId, $orderId, OrdersRefundRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('refund', array($params), 'Google_Service_OrdersRefundResponse');
  }
  /**
   * Returns a line item. (orders.returnlineitem)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $orderId The ID of the order.
   * @param Google_OrdersReturnLineItemRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_OrdersReturnLineItemResponse
   */
  public function returnlineitem($merchantId, $orderId, OrdersReturnLineItemRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('returnlineitem', array($params), 'Google_Service_OrdersReturnLineItemResponse');
  }
  /**
   * Marks line item(s) as shipped. (orders.shiplineitems)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $orderId The ID of the order.
   * @param Google_OrdersShipLineItemsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_OrdersShipLineItemsResponse
   */
  public function shiplineitems($merchantId, $orderId, OrdersShipLineItemsRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('shiplineitems', array($params), 'Google_Service_OrdersShipLineItemsResponse');
  }
  /**
   * Updates the merchant order ID for a given order.
   * (orders.updatemerchantorderid)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $orderId The ID of the order.
   * @param Google_OrdersUpdateMerchantOrderIdRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_OrdersUpdateMerchantOrderIdResponse
   */
  public function updatemerchantorderid($merchantId, $orderId, OrdersUpdateMerchantOrderIdRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updatemerchantorderid', array($params), 'Google_Service_OrdersUpdateMerchantOrderIdResponse');
  }
  /**
   * Updates a shipment's status, carrier, and/or tracking ID.
   * (orders.updateshipment)
   *
   * @param string $merchantId The ID of the managing account.
   * @param string $orderId The ID of the order.
   * @param Google_OrdersUpdateShipmentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_OrdersUpdateShipmentResponse
   */
  public function updateshipment($merchantId, $orderId, OrdersUpdateShipmentRequest $postBody, $optParams = array())
  {
    $params = array('merchantId' => $merchantId, 'orderId' => $orderId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateshipment', array($params), 'Google_Service_OrdersUpdateShipmentResponse');
  }
}
