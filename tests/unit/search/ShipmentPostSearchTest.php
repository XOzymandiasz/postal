<?php

namespace XOzymandias\Yii2Postal\tests\unit\search;

use XOzymandias\Yii2Postal\models\search\ShipmentPostSearch;
use XOzymandias\Yii2Postal\models\ShipmentAddress;
use XOzymandias\Yii2Postal\tests\fixtures\ShipmentAddressFixture;
use XOzymandias\Yii2Postal\tests\fixtures\ShipmentAddressLinkFixture;
use XOzymandias\Yii2Postal\tests\fixtures\ShipmentContentFixture;
use XOzymandias\Yii2Postal\tests\fixtures\ShipmentFixture;
use XOzymandias\Yii2Postal\tests\fixtures\UserFixture;
use Codeception\Test\Unit;
use UnitTester;

/**
 * @property UnitTester $tester
 */

class ShipmentPostSearchTest extends Unit
{
    public ShipmentPostSearch $search;

    public function _before(): void
    {
        $this->search = new ShipmentPostSearch();
    }
    public function _fixtures(): array
    {
        return [
            'shipment' => [
                'class' => ShipmentFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment.php'
            ],
            'content' => [
                'class' => ShipmentContentFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment_content.php'
            ],
            'address' => [
                'class' => ShipmentAddressFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment_address.php',
            ],
            'address_link' => [
                'class' => ShipmentAddressLinkFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment_address_link.php',
            ],
            'user' => [
                'class' => UserFixture::class,
                'dataFile' => codecept_data_dir() . 'user.php'
            ],
        ];
    }

    public function testCreatorScenarioBlocksAssigment(): void
    {
        $this->search->scenario = $this->search::SCENARIO_CREATOR;

        $this->assertNull($this->search->creator_id);

        $this->search->creator_id = 123;
        $this->assertTrue($this->search->validate(['creator_id']));
    }

    public function testBasicFilter(): void
    {
        $shipment = $this->tester->grabFixture('shipment', 'shipment_in_PP');

        $dataProvider = $this->search->search(['ShipmentPostSearch' => [
            'direction' => $shipment->direction,
            'provider' => $shipment->provider,
            'number' => $shipment->number,
            'content' => $shipment->content,
        ]]);

        $this->tester->assertCount(1, $dataProvider->getModels());
        $this->tester->assertSame($shipment->id, $dataProvider->getModels()[0]->id);
    }

    public function testSenderNameFilter(): void
    {
        /**
         * @var ShipmentAddress $address
         */
        $address = $this->tester->grabFixture('address', 'sender');

        $dataProvider = $this->search->search(['ShipmentPostSearch' => [
            'senderName' => 'Jan Kowalski Biuro'
        ]]);

        $senderId = $dataProvider->getModels()[0]->senderAddress->id;

        $this->tester->assertCount(1, $dataProvider->getModels());
        $this->tester->assertSame($address->id, $senderId);
    }

    public function testReceiverNameFilter(): void
    {
        /**
         * @var ShipmentAddress $address
         */
        $address = $this->tester->grabFixture('address', 'receiver');

        $dataProvider = $this->search->search(['ShipmentPostSearch' => [
            'receiverName' => 'Marek Nowak Zakład'
        ]]);

        $receiverId = $dataProvider->getModels()[0]->receiverAddress->id;

        $this->tester->assertCount(1, $dataProvider->getModels());
        $this->tester->assertSame($address->id, $receiverId);
    }

    public function testSenderAddressFilter(): void
    {
        /**
         * @var ShipmentAddress $address
         */
        $address = $this->tester->grabFixture('address', 'sender');

        $dataProvider = $this->search->search(['ShipmentPostSearch' => [
            'senderAddress' => '00123 Warszawa Marszałkowska 12A'
        ]]);

        $senderId = $dataProvider->getModels()[0]->senderAddress->id;

        $this->tester->assertCount(1, $dataProvider->getModels());
        $this->tester->assertSame($address->id, $senderId);
    }

    public function testReceiverAddressFilter(): void
    {
        /**
         * @var ShipmentAddress $address
         */
        $address = $this->tester->grabFixture('address', 'receiver');

        $dataProvider = $this->search->search(['ShipmentPostSearch' => [
            'receiverAddress' => '33-210 Kraków Piastowska 1'
        ]]);

        $senderId = $dataProvider->getModels()[0]->receiverAddress->id;

        $this->tester->assertCount(1, $dataProvider->getModels());
        $this->tester->assertSame($address->id, $senderId);
    }

    public function testReceiverAndSenderNameFilter(): void
    {
        $sender = $this->tester->grabFixture('address', 'sender');
        $receiver = $this->tester->grabFixture('address', 'receiver');

        $dataProvider = $this->search->search(['ShipmentPostSearch' => [
            'senderName' => 'Jan Kowalski Biuro',
        ]]);

        $this->tester->assertNotEmpty($dataProvider->getModels());

        foreach ($dataProvider->getModels() as $index => $model) {
            /**
             * @var Shipment $model
             */
            $shipmentSenderAddress = $model->senderAddress;
            $this->tester->assertSame($sender->id, $shipmentSenderAddress->id);
        }

        $dataProvider = $this->search->search(['ShipmentPostSearch' => [
            'receiverName' => 'Marek Nowak Zakład',
        ]]);

        $this->tester->assertNotEmpty($dataProvider->getModels());

        foreach ($dataProvider->getModels() as $index => $model) {
            /**
             * @var Shipment $model
             */
            $shipmentReceiverAddress = $model->receiverAddress;
            $this->tester->assertSame($receiver->id, $shipmentReceiverAddress->id);
        }

        $this->tester->assertCount(1, $dataProvider->getModels());

        $dataProvider = $this->search->search(['ShipmentPostSearch' => [
            'receiverName' => 'Marek Nowak Zakład',
            'senderName' => 'Jan Kowalski Biuro'
        ]]);

        $this->tester->assertCount(1, $dataProvider->getModels());
    }

    public function testNoJoinWhenNoCompositeFilters(): void
    {
        $shipment = $this->tester->grabFixture('shipment', 'shipment_in_PP');

        $dataProvider = $this->search->search(['ShipmentPostSearch' => [
            'provider' => $shipment->provider,
        ]]);

        $sql = $dataProvider->query->createCommand()->getRawSql();
        $this->tester->assertStringNotContainsString(' JOIN ', $sql);
    }

}