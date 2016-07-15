<?php
$I = new ApiTester($scenario);
$I->wantTo('get tasks list with item');
$I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
$I->sendPOST('tasks', [
    'title' => 'new',
    'description' => 'content',
]);

$I->sendGET('tasks');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseContainsJson(['title' => 'new']);
