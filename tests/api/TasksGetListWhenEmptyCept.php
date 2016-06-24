<?php
$I = new ApiTester($scenario);
$I->wantTo('get tasks list when empty');
$I->sendGET('/tasks');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
