<?php
$I = new ApiTester($scenario);
$I->wantTo('create new task item');
$I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
$I->sendPOST('/tasks', [
    'title' => 'new',
    'description' => 'content',
]);

$I->seeResponseCodeIs(200);
$I->seeNumRecords(1, 'tasks', ['title' => 'new', 'description' => 'content']);
