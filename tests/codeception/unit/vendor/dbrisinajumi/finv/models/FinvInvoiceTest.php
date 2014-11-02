<?php

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-10-25 at 20:38:16.
 */
class FinvInvoiceTest extends PHPUnit_Framework_TestCase {

    /**
     * @var FinvInvoice
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new FinvInvoice;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers FinvInvoice::model
     * @todo   Implement testModel().
     */
    public function testModel() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FinvInvoice::init
     * @todo   Implement testInit().
     */
    public function testInit() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FinvInvoice::getItemLabel
     * @todo   Implement testGetItemLabel().
     */
    public function testGetItemLabel() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FinvInvoice::behaviors
     * @todo   Implement testBehaviors().
     */
    public function testBehaviors() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FinvInvoice::rules
     * @todo   Implement testRules().
     */
    public function testRules() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FinvInvoice::p3insert
     * @todo   Implement testP3insert().
     */
    public function testP3insert() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FinvInvoice::createInvoice
     */
    public function testCreateInvoice() {
        $invoice = array(
            'finv_series_number' => 'SS11',
            'finv_number' => '0011',
            'finv_issuer_ccmp_id' => 27, //parkoil
            'finv_payer_ccmp_id' => 31, // hofa
            'finv_date' => '2013.09.18',
            'finv_fcrn_id' => 12, //LTL
            'finv_amt' => 100,
            'finv_vat' => null,
            'finv_total' => 100,
            'finv_basic_fcrn_id' => 12, //LTL
            'finv_basic_amt' => 100,
            'finv_basic_vat' => null,
            'finv_basic_total' => 100,
            'finv_stst_id' => 1,
        );
        $oFinv = new FinvInvoice();
        $finv_id = $oFinv->createInvoice($invoice);
        
        $fiit = array(
                'fiit_desc' => 'Dizelis',
                'fiit_fprc_id' => 1,
                'fiit_quantity' => 34298.71,
                'fiit_fqnt_id' => 1,
                'fiit_price' => 2.243,
                'fiit_amt' => 7777,
                'fiit_total' => 7777,
                'fiit_fvat_id' => 1,
            );
        $fiit_id = $oFinv->insertInvoiceItem($fiit);
        $fiit = array(
                'fiit_desc' => 'Dizelis II',
                'fiit_fprc_id' => 1,
                'fiit_quantity' => 100,
                'fiit_fqnt_id' => 1,
                'fiit_price' => 3,
                'fiit_amt' => 300,
                'fiit_total' => 300,
                'fiit_fvat_id' => 1,
            
        );
        $fiit_id = $oFinv->insertInvoiceItem($fiit);

    }

}
