<?php
class ModelTotalMyCustomDiscount extends Model {

	public function getTotal(&$total_data, &$total, &$taxes) {

        if( ! $this->config->get('my_custom_discount_status') ||
            ! isset($this->session->data['my_custom_discount']) ) return;

        $discount = $this->session->data['my_custom_discount'];

        if($discount <= 0) return;

        $this->language->load('total/my_custom_discount');

        $total_data[] = array(
            'code'       => 'my_custom_discount',
            'title'      => $this->language->get('text_my_custom_discount'),
            'text'       => $this->currency->format(-$discount),
            'value'      => -$discount,
            'sort_order' => $this->config->get('my_custom_discount_sort_order')
        );

        $total -= $discount;
	}

    // Triggered in order confirmation.
	public function confirm($order_info, $order_total) {

        unset($this->session->data['my_custom_discount']);
	}	
}